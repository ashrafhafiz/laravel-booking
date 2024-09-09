<?php

namespace App\Bookings;

use App\Models\Employee;
use App\Models\Service;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;

class ServiceSlotAvailability
{

    public function __construct(protected Collection $employees, protected Service $service) {}

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        $range = (new SlotRangeGenerator($startsAt, $endsAt))
            ->generate($this->service->duration);

        $this->employees->each(function (Employee $employee) use ($startsAt, $endsAt, &$range) {

            $availability = (new ScheduleAvailability($employee, $this->service))
                ->forPeriod($startsAt, $endsAt);
            dump($availability);
        });
    }
}
