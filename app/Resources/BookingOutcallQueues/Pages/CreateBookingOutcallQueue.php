<?php

namespace App\Resources\BookingOutcallQueues\Pages;

use App\Resources\BookingOutcallQueues\BookingOutcallQueueResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBookingOutcallQueue extends CreateRecord
{
    protected static string $resource = BookingOutcallQueueResource::class;
}
