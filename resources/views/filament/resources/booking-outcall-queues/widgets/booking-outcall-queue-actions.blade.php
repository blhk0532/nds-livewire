<div>
    <div class="flex flex-col md:flex-row md:items-end gap-3">
        <div class="flex-1 grid grid-cols-1 sm:grid-cols-3 gap-3">
            <div>
                <x-filament::input.wrapper>
                    <x-filament::input
                        type="text"
                        wire:model.defer="filter_name"
                        placeholder="Name"
                    />
                </x-filament::input.wrapper>
            </div>

            <div>
                <x-filament::input.wrapper>
                    <x-filament::input
                        type="text"
                        wire:model.defer="filter_phone"
                        placeholder="Phone"
                    />
                </x-filament::input.wrapper>
            </div>

            <div>
                <x-filament::input.wrapper>
                    <x-filament::input
                        type="text"
                        wire:model.defer="filter_city"
                        placeholder="City"
                    />
                </x-filament::input.wrapper>
            </div>
        </div>

        <div class="flex gap-2">
            <x-filament::button
                wire:click="applyFilters"
                type="button"
                class="whitespace-nowrap"
            >
                Apply Filters
            </x-filament::button>

            <x-filament::button
                wire:click="clearFilters"
                color="gray"
                type="button"
                class="whitespace-nowrap"
            >
                Clear
            </x-filament::button>

            <x-filament::button
                wire:click="exportCsv"
                color="primary"
                type="button"
                class="whitespace-nowrap"
            >
                Export CSV
            </x-filament::button>
        </div>
    </div>
</div>
