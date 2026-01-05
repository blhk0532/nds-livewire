<x-filament-panels::page>
    <x-filament::section>
        <x-slot name="heading">
            Manage Schedules for {{ $this->record->name }} Provider
        </x-slot>
        {{ $this->table }}
    </x-filament::section>
</x-filament-panels::page>
