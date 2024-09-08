<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('employees')->truncate();

        $employees = [
            [
                'name' => 'Alex',
                'slug' => 'alex',
                'profile_photo_url' => 'https://media.istockphoto.com/id/1476170969/photo/portrait-of-young-man-ready-for-job-business-concept.jpg?s=2048x2048&w=is&k=20&c=yif473DFhN451o-tNC1tASFFoP5QTOYcqS26dhEbv6U='
            ],
            [
                'name' => 'Marbel',
                'slug' => 'marbel',
                'profile_photo_url' => 'https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=2048x2048&w=is&k=20&c=JecbHiBxM7ZzAADbPkqJuvNoCs3uO2VrK2LmrSpm3Ek='
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}