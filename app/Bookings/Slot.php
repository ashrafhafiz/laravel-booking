<?php

namespace App\Bookings;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Collection;

class Slot
{
    public $employee = [];

    public function __construct(public Carbon $time) {}
}
