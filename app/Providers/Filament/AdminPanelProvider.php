<?php

namespace App\Providers\Filament;

use Adultdate\FilamentBooking\Filament\Pages\CalendarSettingsPage;
use Adultdate\FilamentBooking\Filament\Widgets\AccountWidget;
// use App\Filament\Pages\AppDashboard;
use Adultdate\FilamentBooking\FilamentBookingPlugin;
use Filament\Http\Middleware\Authenticate;
// use Filament\Pages\Dashboard;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Wallacemartinss\FilamentIconPicker\FilamentIconPickerPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            // ->discoverPages(in: app_path('plugins/adultdate/filament-booking/src/Filament/Pages'), for: 'Adultdate\\FilamentBooking\\Filament\\Pages')
            ->pages([
                //    Dashboard::class,
                CalendarSettingsPage::class,
            ])
            ->plugins([
                FilamentBookingPlugin::make(),
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                //   AccountWidget::class,
                //   FilamentInfoWidget::class,

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                FilamentIconPickerPlugin::make(),
                //      \Statikbe\FilamentTranslationManager\FilamentChainedTranslationManagerPlugin::make(),
            ]);
    }
}
