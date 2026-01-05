<div>
    <div wire:ignore id="booking-calendar" x-data x-init="(function waitForInit(){ if (typeof window.initCalendar === 'function') { window.initCalendar(); } else { setTimeout(waitForInit, 50); } })()"></div>

    @if($showCreateModal)
        <div id="booking-create-modal" class="p-4">
            <form wire:submit.prevent="create">
                <div>
                    <label>Date</label>
                    <input type="date" wire:model.defer="service_date" />
                </div>
                <div>
                    <label>Start</label>
                    <input type="time" wire:model.defer="start_time" />
                </div>
                <div>
                    <label>End</label>
                    <input type="time" wire:model.defer="end_time" />
                </div>
                <div>
                    <label>User</label>
                    <select wire:model.defer="service_user_id">
                        <option value="">Select</option>
                        @foreach($this->users as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-2">
                    <button type="submit">Create</button>
                    <button type="button" wire:click="$set('showCreateModal', false)">Cancel</button>
                </div>
            </form>
        </div>
    @endif

    <script>
        // Lazy-load published FullCalendar bundle if it's not already present
        (function ensureFullcalendarBundle() {
            if (window.FullCalendar) return;
            if (document.querySelector('script[data-filament-fullcalendar]')) return;
            var s = document.createElement('script');
            s.setAttribute('data-filament-fullcalendar', '');
            s.src = '/js/adultdate/filament-booking/components/filament-fullcalendar-alpine.js';
            s.defer = true;
            document.head.appendChild(s);
        })();

        window.initCalendar = function() {
            const calendarEl = document.getElementById('booking-calendar');
            if (!calendarEl) return;

            // ensure container has a reasonable height so Filament doesn't collapse it
            if (!calendarEl.style.minHeight) {
                calendarEl.style.minHeight = '420px';
            }

            // Safely detect FullCalendar on the window to avoid ReferenceErrors
            if (window.FullCalendar && window.FullCalendar.Calendar) {
                const Calendar = window.FullCalendar.Calendar;
                const calendar = new Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    selectable: true,
                    select: function(info) {
                        if (window.livewire && window.livewire.emit) {
                            window.livewire.emit('openBookingCreate', {
                                date: info.startStr,
                                start: info.startStr,
                                end: info.endStr,
                            });
                        }
                    },
                    events: '/booking-periods/events'
                });

                calendar.render();

                window.addEventListener('booking-period-created', function() {
                    calendar.refetchEvents();
                });
            } else {
                // fallback message so the user sees why the calendar didn't appear
                calendarEl.innerHTML = '<div class="p-4 text-sm text-gray-600">Calendar library not loaded. Check console for errors.</div>';
            }
        }

        document.addEventListener('open-booking-create', function(e) {
            const detail = e.detail || {};
            const modal = document.getElementById('booking-create-modal');
            if (!modal) return;
            // simple Alpine-style binding without Alpine: populate inputs
            modal.querySelector('input[type=date]').value = detail.date || '';
            // show modal via simple style
            modal.style.display = 'block';
            // set a global for submit to call
            window._bookingForm = {
                service_date: detail.date || '',
                start_time: detail.start || '',
                end_time: detail.end || '',
            };
        });

        window.submitCreate = function() {
            window.livewire && window.livewire.emit && window.livewire.emit('create');
        }

        window.closeModal = function() {
            const modal = document.getElementById('booking-create-modal');
            if (!modal) return;
            modal.style.display = 'none';
        }
    </script>
</div>
