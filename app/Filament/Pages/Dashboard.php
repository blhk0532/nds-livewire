<?php

namespace App\Filament\Pages;

use App\Traits\HasDashArrange;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    use HasDashArrange;

    protected string $view = 'dash-arrange::dashboard';

    protected static ?string $slug = 'dashboard';

    public function mount(): void
    {
        // Initialize DashArrange functionality
        $this->mountHasDashArrange();
    }

    public function getTitle(): string|Htmlable
    {
        return '';
    }

    public function getWidgets(): array
    {
        return [
            \Adultdate\FilamentBooking\Filament\Widgets\StatsOverviewWidget::class,
            \Adultdate\FilamentBooking\Filament\Widgets\AccountWidget::class,
            \Adultdate\FilamentBooking\Filament\Widgets\FilamentInfosWidget::class,
        ];
    }

    public function getPermissionCheckClosure(): \Closure
    {
        return fn (string $widgetClass) => true;
    }
}
