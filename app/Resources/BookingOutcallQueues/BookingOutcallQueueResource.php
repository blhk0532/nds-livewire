<?php

namespace App\Resources\BookingOutcallQueues;

use App\Models\BookingOutcallQueue;
use App\Resources\BookingOutcallQueues\Pages\CreateBookingOutcallQueue;
use App\Resources\BookingOutcallQueues\Pages\EditBookingOutcallQueue;
use App\Resources\BookingOutcallQueues\Pages\ListBookingOutcallQueues;
use App\Resources\BookingOutcallQueues\Pages\ViewBookingOutcallQueue;
use App\Resources\BookingOutcallQueues\Schemas\BookingOutcallQueueForm;
use App\Resources\BookingOutcallQueues\Schemas\BookingOutcallQueueInfolist;
use App\Resources\BookingOutcallQueues\Tables\BookingOutcallQueuesTable;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BookingOutcallQueueResource extends Resource
{
    protected static ?string $model = BookingOutcallQueue::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedServerStack;

    protected static ?string $navigationLabel = 'Queues';

    protected static string|UnitEnum|null $navigationGroup = 'Bookings';

    public static function form(Schema $schema): Schema
    {
        return BookingOutcallQueueForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BookingOutcallQueueInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BookingOutcallQueuesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBookingOutcallQueues::route('/'),
            'create' => CreateBookingOutcallQueue::route('/create'),
            'view' => ViewBookingOutcallQueue::route('/{record}'),
            'edit' => EditBookingOutcallQueue::route('/{record}/edit'),
        ];
    }
}
