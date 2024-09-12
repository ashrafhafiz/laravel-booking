<?php

use Carbon\Carbon;
use App\Models\Service;
use App\Models\Employee;
use App\Models\Schedule;
use App\Bookings\ServiceSlotAvailability;

it('show avialble time slots for a service', function () {

    Carbon::setTestNow(Carbon::parse('first day of January 2010'));

    $employee = Employee::factory()
        ->has(Schedule::factory()->state([
            'starts_at' => now()->startOfDay(),
            'ends_at' => now()->endOfDay()
        ]))
        ->create();

    $service = Service::factory()->create([
        'duration' => 30,
    ]);

    $availability = (new ServiceSlotAvailability(collect([$employee]), $service))
        ->forPeriod(
            now()->startOfDay(),
            now()->endOfDay()
        );

    dd($availability->first());
    // expect($availability->first->date->toDateString())->toEqual(now()->toDateString());
});
