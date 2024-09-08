<?php

namespace App\Bookings;

use Spatie\Period\Period;
use Spatie\Period\PeriodCollection;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct()
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod()
    {
        $this->periods = $this->periods->add(
            Period::make(
                now()->startOfDay(),
                now()->addDay()
            )
        );

        dd($this->periods);
    }
}