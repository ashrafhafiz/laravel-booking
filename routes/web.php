<?php

use App\Bookings\ScheduleAvailability;
use App\Bookings\ServiceSlotAvailability;
use App\Bookings\SlotRangeGenerator;
use App\Models\Employee;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $employees = Employee::get();
    $service = Service::find(1);


    $availability = (new ServiceSlotAvailability($employees, $service))
        ->forPeriod(
            now()->startOfDay(),
            now()->addDay()->endOfDay()
        );

    dd($availability->firstAvailableDate());

    // $generator = (new SlotRangeGenerator(now()->startOfDay(), now()->addDay()->endOfDay()))
    //     ->generate(30);

    // dd($generator);

    //
    // $employee = Employee::find(1);
    // $service = Service::find(1);


    // $availability = (new ScheduleAvailability($employee, $service))
    //     ->forPeriod(
    //         now()->startOfDay(),
    //         now()->addMonth()->endOfDay()
    //     );

    return view('welcome');
});
