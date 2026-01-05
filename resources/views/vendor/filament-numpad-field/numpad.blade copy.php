<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div
        x-data="numpadEuro({
            entangled: $wire.$entangle('{{ $getStatePath() }}'),
            storesCents: @js($storesCents),
            allowNegative: @js($allowNegative),
            minCents: @js($minCents),
            maxCents: @js($maxCents),
        })"
        class="flex flex-col gap-4"
    >
        <input
            type="hidden"
            x-ref="livewireInput"
            wire:model.live="{{ $getStatePath() }}"
        />

        <div class="flex items-end justify-between">
            <div class="text-4xl font-semibold tabular-nums select-none ml-auto">






</div></div>


<div wire:partial="schema-component::form.phone" x-data="filamentSchemaComponent({
                    path: 'data.phone',
                    containerPath: 'data',
                    $wire,
                })" class="fi-grid-col" style="--col-span-default: span 1 / span 1;" wire:key="Ba0tlpzTbFSx8hVmvYvx.form.phone" data-has-alpine-state="true">
                            <div class="fi-sc-component">
                    <div data-field-wrapper="" class="fi-fo-field">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]-->        <div class="fi-fo-field-label-col">
            

            <div class="fi-fo-field-label-ctn ">
                

                                    <label for="form.phone" class="fi-fo-field-label">
                        

                                                    <span class="fi-fo-field-label-content">
                                Phone<!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->                            </span>
                        <!--[if ENDBLOCK]><![endif]-->
                        
                    </label>
                <!--[if ENDBLOCK]><![endif]-->
                
            </div>

            
        </div>
    <!--[if ENDBLOCK]><![endif]-->
    <!--[if BLOCK]><![endif]-->        <div class="fi-fo-field-content-col">
            

            <!--[if BLOCK]><![endif]-->                <div class="fi-input-wrp fi-fo-phone-input" x-data="{
            isDisabled: false,
            init(){
                $nextTick(() =&gt; {
                    $dispatch('phoneInput:isDisabled', { key: 'form.phone', isDisabled: this.isDisabled });
                });
            }
        }" x-load-css="['http:\/\/localhost:8000\/css\/ysfkaya\/filament-phone-input\/filament-phone-input.css?v=4.0.0.0']" data-has-alpine-state="true">
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
    <div class="fi-input-wrp-content-ctn">
        <div dusk="phone-input.form.phone" class="inline-flex w-full" wire:ignore="">
            <div class="w-full" x-load="" x-load-src="http://localhost:8000/js/ysfkaya/filament-phone-input/components/filament-phone-input.js?v=4.0.0.0" x-data="phoneInputFormComponent({
                    options: {
                        allowDropdown: true,
                        autoPlaceholder: 'polite',
                        containerClass: '',
                        countryOrder: null,
                        countrySearch: true,
                        customPlaceholder: null,
                        dropdownContainer: null,
                        excludeCountries: [],
                        fixDropdownWidth: true,
                        formatAsYouType: true,
                        formatOnDisplay: true,
                        performIpLookup: true,
                        i18n: [],
                        initialCountry: 'se',
                        nationalMode: true,
                        onlyCountries: JSON.parse('[\u0022se\u0022,\u0022no\u0022,\u0022dk\u0022,\u0022fi\u0022,\u0022th\u0022,\u0022ph\u0022]'),
                        placeholderNumberType: 'MOBILE',
                        showFlags: true,
                        separateDialCode: false,
                        strictMode: false,
                        useFullscreenPopup: false,
                        displayNumberFormat: 'E164',
                        inputNumberFormat: 'E164',
                        focusNumberFormat: false,
                        ...[],
                    },
                    locale: 'en',
                    intlTelInputSelectedCountryCookieName: 'intlTelInputSelectedCountry',
                    state: $wire.$entangle('data.phone'),
                    statePath: 'data.phone',
                    key: 'form.phone',
                    isLive: false,
                    isLiveDebounced: false,
                    isLiveOnBlur: false,
                    liveDebounce: null,
                                    })">


                <div class="iti iti--allow-dropdown iti--show-flags iti--inline-dropdown"><div class="iti__country-container" style="left: 0px;"><button type="button" class="iti__selected-country" aria-expanded="false" aria-label="Selected country" aria-haspopup="true" aria-controls="iti-0__dropdown-content" role="combobox" title="Sweden: +46"><div class="iti__selected-country-primary"><div class="iti__flag iti__se"><span class="iti__a11y-text">Sweden +46</span></div><div class="iti__arrow" aria-hidden="true"></div></div></button><div id="iti-0__dropdown-content" class="iti__dropdown-content iti__hide ">
                    
                    
                    <input value="+4670" type="text" class="iti__search-input" placeholder="Search" role="combobox" aria-expanded="true" aria-label="Search" aria-controls="iti-0__country-listbox" aria-autocomplete="list" autocomplete="off">
                    

          
                    <span  x-text="formatted"  class="iti__a11y-text">6 results found</span><ul class="iti__country-list" id="iti-0__country-listbox" role="listbox" aria-label="List of countries">
                        <li id="iti-0__item-dk" class="iti__country iti__highlight" tabindex="-1" role="option" data-dial-code="45" data-country-code="dk" aria-selected="false">
                            <div class="iti__flag iti__dk"></div><span class="iti__country-name">Denmark</span><span class="iti__dial-code">+45</span></li><li id="iti-0__item-fi" class="iti__country " tabindex="-1" role="option" data-dial-code="358" data-country-code="fi" aria-selected="false"><div class="iti__flag iti__fi"></div><span class="iti__country-name">Finland</span>
                                <span class="iti__dial-code">+358</span></li><li id="iti-0__item-no" class="iti__country " tabindex="-1" role="option" data-dial-code="47" data-country-code="no" aria-selected="false"><div class="iti__flag iti__no"></div><span class="iti__country-name">Norway</span><span class="iti__dial-code">+47</span></li><li id="iti-0__item-ph" class="iti__country " tabindex="-1" role="option" data-dial-code="63" data-country-code="ph" aria-selected="false">
                                    <div class="iti__flag iti__ph"></div><span class="iti__country-name">Philippines</span><span class="iti__dial-code">+63</span></li><li id="iti-0__item-se" class="iti__country " tabindex="-1" role="option" data-dial-code="46" data-country-code="se" aria-selected="false"><div class="iti__flag iti__se"></div><span class="iti__country-name">Sweden</span><span class="iti__dial-code">+46</span></li><li id="iti-0__item-th" class="iti__country " tabindex="-1" role="option" data-dial-code="66" data-country-code="th" aria-selected="false">
                                        
                                        <div class="iti__flag iti__th"></div>
                                        <span class="iti__country-name">Thailand</span>
                                        <span class="iti__dial-code">+66</span></li></ul></div></div>
                                        <input class="fi-input iti__tel-input" x-ref="input" id="form.phone" type="tel" autocomplete="off" placeholder="070-123 45 67" data-intl-tel-input-id="0" style="padding-left: 48px;">
                                    
                                    
                                    </div>
         
         
            </div>
        </div>
    </div>
    <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]--></div>
            <!--[if ENDBLOCK]><![endif]-->
            

            <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->        </div>
    <!--[if ENDBLOCK]><![endif]--></div>

                </div>
                    </div>



<div class="grid grid-cols-3 gap-3 select-none">
            <template x-for="n in [1,2,3,4,5,6,7,8,9]" :key="n">
                <button type="button"
                        class="p-5 rounded-2xl shadow border text-2xl font-semibold hover:shadow-md active:scale-95 active:bg-primary-500 transition"
                        x-on:click="press(n)" x-text="n"></button>
            </template>

            <button type="button"
                    class="p-5 rounded-2xl shadow border text-lg font-medium hover:shadow-md active:scale-95 active:bg-primary-500 transition"
                    x-on:click="clearAll()" title="Wissen">C
            </button>

            <button type="button"
                    class="p-5 rounded-2xl shadow border text-2xl font-semibold hover:shadow-md active:scale-95 active:bg-primary-500 transition"
                    x-on:click="press(0)">0
            </button>

            <button type="button"
                    class="p-5 rounded-2xl shadow border text-lg font-medium hover:shadow-md active:scale-95 active:bg-primary-500 transition"
                    x-on:click="backspace()" title="Delete">&larr;
            </button>
        </div>

        <template x-if="validationMessage">
            <p class="text-xs text-red-600" x-text="validationMessage"></p>
        </template>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('numpadEuro', ({entangled, storesCents, allowNegative, minCents, maxCents}) => ({
                entangled,
                storesCents,
                allowNegative,
                minCents,
                maxCents,

                digits: '0',
                negative: false,
                validationMessage: '',

                init() {
                    const raw = this.entangled ?? 0;
                    let cents = this.storesCents ? parseInt(raw || 0, 10) : Math.round(parseFloat(raw || 0));

                    this.digits = String(isNaN(cents) ? 0 : Math.max(0, cents));

                    this.$watch('entangled', (value) => {
                        if (value !== null && value !== '' && !this._initialized) {
                            this._loadInitialValue(value)
                        }
                    })

                    if (this.entangled !== null && this.entangled !== '') {
                        this._loadInitialValue(this.entangled)
                    }

                    this._pushToWire();

                    this.$wire.on('resetNumpad', (notification) => {
                        this._resetNumpad()
                    })
                },

                get signedCents() {
                    const c = parseInt(this.digits.replace(/\D/g, '') || '0', 10);
                    return this.negative ? -c : c;
                },

                get formatted() {
                    return this._formatNl(this.signedCents);
                },

                press(n) {
                    if (!Number.isInteger(n) || n < 0 || n > 9) return;
                    this.validationMessage = '';
                    this.digits = (this.digits + String(n)).replace(/^0+(?=\d)/, '');
                    this._pushToWire();
                },

                backspace() {
                    this.validationMessage = '';
                    this.digits = this.digits.length <= 1 ? '0' : this.digits.slice(0, -1);
                    this._pushToWire();
                },

                clearAll() {
                    this.validationMessage = '';
                    this.digits = '0';
                    this.negative = false;
                    this._pushToWire();
                },

                _pushToWire() {
                    const cents = this.signedCents;

                    const val = this.storesCents ? cents : (cents / 100).toFixed(2);
                    this.$refs.livewireInput.value = val;
                    this.$refs.livewireInput.dispatchEvent(new Event('input', {bubbles: true}));

                    this.entangled = val;
                },


                _formatNl(cents) {
                
                    return `${cents}`;
                },

                _resetNumpad() {
                    this.digits = '0'
                    this.negative = false
                    this.validationMessage = ''
                    this._pushToWire()
                },

                _loadInitialValue(value) {
                    let cents = 0

                    this._initialized = true
                    this._pushToWire()
                },
            }))
        })
    </script>
</x-dynamic-component>
