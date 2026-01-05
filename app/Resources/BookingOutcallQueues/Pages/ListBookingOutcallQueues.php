<?php

namespace App\Resources\BookingOutcallQueues\Pages;

use App\Resources\BookingOutcallQueues\BookingOutcallQueueResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBookingOutcallQueues extends ListRecords
{
    protected static string $resource = BookingOutcallQueueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
