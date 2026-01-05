<?php

namespace Database\Seeders;

use Adultdate\FilamentBooking\Models\BookingMeeting;
use Adultdate\FilamentBooking\Models\BookingSprint;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookingMeetingAndSprintSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::limit(5)->get();

        if ($users->isEmpty()) {
            return;
        }

        $now = now();

        BookingMeeting::create([
            'title' => 'Weekly Team Meeting',
            'description' => 'Discuss project progress and upcoming tasks',
            'starts_at' => $now->copy()->addDay()->setTime(9, 0),
            'ends_at' => $now->copy()->addDay()->setTime(10, 0),
        ])->users()->attach([$users[0]->id, $users[1]->id]);

        BookingMeeting::create([
            'title' => 'Client Review',
            'description' => 'Review with client about deliverables',
            'starts_at' => $now->copy()->addDays(2)->setTime(14, 0),
            'ends_at' => $now->copy()->addDays(2)->setTime(15, 30),
        ])->users()->attach([$users[1]->id, $users[2]->id, $users[3]->id]);

        BookingMeeting::create([
            'title' => 'Sprint Planning',
            'description' => 'Plan the next sprint with the team',
            'starts_at' => $now->copy()->addDays(3)->setTime(10, 0),
            'ends_at' => $now->copy()->addDays(3)->setTime(11, 0),
        ])->users()->attach([$users[0]->id, $users[2]->id, $users[4]->id]);

        BookingSprint::create([
            'title' => 'Sprint 1 - Initial Development',
            'description' => 'Build core features and user authentication',
            'priority' => \Adultdate\FilamentBooking\Enums\Priority::High->value,
            'starts_at' => $now->copy()->addDay()->setTime(9, 0),
            'ends_at' => $now->copy()->addDays(7)->setTime(18, 0),
        ]);

        BookingSprint::create([
            'title' => 'Sprint 2 - Feature Expansion',
            'description' => 'Add advanced features and improve UX',
            'priority' => \Adultdate\FilamentBooking\Enums\Priority::Medium->value,
            'starts_at' => $now->copy()->addDays(8)->setTime(9, 0),
            'ends_at' => $now->copy()->addDays(14)->setTime(18, 0),
        ]);

        BookingSprint::create([
            'title' => 'Sprint 3 - Polish & Bug Fixes',
            'description' => 'Fix reported bugs and polish the application',
            'priority' => \Adultdate\FilamentBooking\Enums\Priority::Low->value,
            'starts_at' => $now->copy()->addDays(15)->setTime(9, 0),
            'ends_at' => $now->copy()->addDays(21)->setTime(18, 0),
        ]);
    }
}
