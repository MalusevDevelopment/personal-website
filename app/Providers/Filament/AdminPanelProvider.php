<?php

namespace App\Providers\Filament;

use App\Helpers\Permissions;
use Filament\Forms\Components\FileUpload;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Mvenghaus\FilamentScheduleMonitor\FilamentPlugin as ScheduleMonitorFilamentPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function register(): void
    {
        parent::register();

        FilamentView::registerRenderHook(
            PanelsRenderHook::STYLES_BEFORE,
            static fn (): string => Blade::render('@livewireStyles'),
        );
        FilamentView::registerRenderHook(
            PanelsRenderHook::STYLES_AFTER,
            static fn (): string => Blade::render('@livewireScripts'),
        );
    }

    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->darkMode()
            ->id('admin')
            ->path('admin')
            ->passwordReset()
            ->globalSearch()
            ->globalSearchDebounce('500ms')
            ->databaseNotifications()
            ->databaseNotificationsPolling('30s')
            ->passwordReset()
            ->topbar()
            ->spa()
            ->login()
            ->navigationItems([
                NavigationItem::make('Telescope')
                    ->visible(fn () => auth()->user()->can(Permissions::VIEW_TELESCOPE))
                    ->group('Monitoring')
                    ->icon('heroicon-o-eye')
                    ->url('/'.rtrim(config('telescope.path'))),
                NavigationItem::make('Horizon')
                    ->visible(fn () => auth()->user()->can(Permissions::VIEW_HORIZON))
                    ->group('Monitoring')
                    ->icon('heroicon-o-queue-list')
                    ->url('/'.rtrim(config('horizon.path'))),
            ])
            ->colors([
                'primary' => Color::Blue,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->discoverClusters(in: app_path('Filament/Clusters'), for: 'App\\Filament\\Clusters')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
            ])
            ->breadcrumbs()
            ->collapsibleNavigationGroups()
            ->databaseNotifications()
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
                ScheduleMonitorFilamentPlugin::make(),
                BreezyCore::make()
                    ->myProfile(
                        shouldRegisterNavigation: true,
                        hasAvatars: true,
                        slug: 'profile',
                    )
                    ->enableTwoFactorAuthentication(
                        force: app()->environment('production')
                    )
                    ->enableSanctumTokens()
                    ->avatarUploadComponent(fn () => FileUpload::make('avatar_url')->disk('profile-photos'))
                    ->passwordUpdateRules(
                        rules: [
                            Password::default()
                                ->mixedCase()
                                ->letters()
                                ->numbers()
                                ->symbols()
                                ->max(64)
                                ->min(8)
                                ->uncompromised(3),
                        ]
                    ),
            ]);
    }
}
