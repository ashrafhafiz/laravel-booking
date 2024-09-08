<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('schedules')->truncate();

        $schedules = [
            [
                'employee_id' => 1,
                'starts_at' => '2024-09-08',
                'ends_at' => '2025-09-08',
                // 'monday_starts_at' => '09:00:00',
                // 'monday_ends_at' => '17:00:00',
                // 'tuesday_starts_at' => '09:00:00',
                // 'tuesday_ends_at' => '17:00:00',
                // 'wednesday_starts_at' => '09:00:00',
                // 'wednesday_ends_at' => '17:00:00',
                // 'thursday_starts_at' => '09:00:00',
                // 'thursday_ends_at' => '17:00:00',
                // 'friday_starts_at' => '09:00:00',
                // 'friday_ends_at' => '17:00:00',
                // 'saturday_starts_at' => '09:00:00',
                // 'saturday_ends_at' => '17:00:00',
                // 'sunday_starts_at' => '09:00:00',
                // 'sunday_ends_at' => '17:00:00',
            ],
            [
                'employee_id' => 2,
                'starts_at' => '2024-09-08',
                'ends_at' => '2025-09-08',
            ]
        ];

        foreach ($schedules as $schedule) {
            Schedule::factory()->create($schedule);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}