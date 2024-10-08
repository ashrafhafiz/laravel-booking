<?php

namespace App\Bookings;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;

class DateCollection extends Collection
{
    public function firstAvailableDate()
    {
        return $this->first(function (Date $date) {
            return $date->slots->count() >= 1;
        });
    }
}
