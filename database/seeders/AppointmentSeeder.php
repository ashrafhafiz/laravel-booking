<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('appointments')->truncate();

        $appointments = [];

        foreach ($appointments as $appointment) {
            Appointment::factory()->create($appointment);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}