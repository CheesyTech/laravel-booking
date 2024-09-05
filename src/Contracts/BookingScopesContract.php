<?php
declare(strict_types=1);

namespace CheesyTech\LaravelMultiBooking\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface BookingScopesContract
{
    public function pastBookings(): MorphMany;

    public function futureBookings(): MorphMany;

    public function currentBookings(): MorphMany;

}