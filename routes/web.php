<?php

use App\Models\BookingServicePeriod;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

Route::get('/booking-periods/events', function (Request $request) {
    $start = $request->query('start');
    $end = $request->query('end');

    try {
        $startDate = $start ? Carbon::parse($start)->startOfDay() : null;
        $endDate = $end ? Carbon::parse($end)->endOfDay() : null;
    } catch (\Exception $e) {
        return response()->json([], 400);
    }

    $query = BookingServicePeriod::query();
    if ($startDate && $endDate) {
        $query->whereBetween('service_date', [$startDate->toDateString(), $endDate->toDateString()]);
    }

    $events = $query->with('serviceUser')->get()->map(function (BookingServicePeriod $period) {
        $title = $period->serviceUser?->name ?? 'Booking';

        if ($period->start_time) {
            $start = Carbon::parse($period->service_date.' '.$period->start_time)->toIsoString();
        } else {
            $start = Carbon::parse($period->service_date)->toDateString();
        }

        if ($period->end_time) {
            $end = Carbon::parse($period->service_date.' '.$period->end_time)->toIsoString();
        } else {
            $end = null;
        }

        return [
            'id' => $period->id,
            'title' => $title,
            'start' => $start,
            'end' => $end,
            'allDay' => $period->start_time ? false : true,
            'extendedProps' => [
                'period_type' => $period->period_type,
                'service_location' => $period->service_location,
            ],
        ];
    })->values();

    return response()->json($events);
})->middleware(['auth']);
