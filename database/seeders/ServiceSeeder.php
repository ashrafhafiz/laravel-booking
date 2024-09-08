<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Hair Cut',
                'slug' => 'hair-cut',
                'duration' => 30,
                'price' => 2000,
            ],
            [
                'title' => 'Beard Shave',
                'slug' => 'beard-shave',
                'duration' => 15,
                'price' => 1500,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}