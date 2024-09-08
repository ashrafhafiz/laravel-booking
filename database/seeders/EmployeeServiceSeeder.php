<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('employee_service')->truncate();

        $employeesServices = [
            [
                'employee_id' => 1,
                'service_id' => 1,
            ],
            [
                'employee_id' => 1,
                'service_id' => 2,
            ],
            [
                'employee_id' => 2,
                'service_id' => 1,
            ],
        ];

        foreach ($employeesServices as $employeeService) {
            DB::table('employee_service')->insert($employeeService);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}