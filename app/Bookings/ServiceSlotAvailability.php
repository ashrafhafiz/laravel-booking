<?php

namespace App\Bookings;

use Carbon\Carbon;
use App\Models\Service;
use App\Models\Employee;
use Carbon\CarbonPeriod;
use Spatie\Period\Period;
use Illuminate\Support\Collection;
use Spatie\Period\PeriodCollection;

class ServiceSlotAvailability
{

    public function __construct(protected Collection $employees, protected Service $service) {}

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        $range = (new SlotRangeGenerator($startsAt, $endsAt))
            ->generate($this->service->duration);

        $this->employees->each(function (Employee $employee) use ($startsAt, $endsAt, &$range) {

            $periods = (new ScheduleAvailability($employee, $this->service))
                ->forPeriod($startsAt, $endsAt);

            foreach ($periods as $period) {
                $this->addAvailabileEmployeeForPeriod($range, $period, $employee);
            }
        });

        return $range;
    }

    public function addAvailabileEmployeeForPeriod(Collection $range, Period $period, Employee $employee)
    {
        dd($range);
    }
}
