<?php

namespace App\Providers\Filament;

use App\Enums\Books\BookStatus;
use App\Filament\App\Resources\Books\BookResource;
use App\Filament\App\Resources\BookUsers\BookUserResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AppPanelProvider extends BasePanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $panel = $this->basepanel($panel);

        return $panel
            ->default()
            ->id('app')
            ->path('')
            ->login()
            ->registration()
            ->passwordReset()
            ->colors([
                'primary' => Color::hex('#354C58'),
                'gray' => Color::Slate,
            ])
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\Filament\App\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\Filament\App\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\Filament\App\Widgets')
            ->navigation(function (NavigationBuilder $builder): NavigationBuilder {
                return $builder->groups([
                    NavigationGroup::make('')
                        ->items([
                            NavigationItem::make('Dashboard')
                                ->icon('tabler-home')
                                ->url(Dashboard::getUrl())
                                ->isActiveWhen(fn () => request()->routeIs('filament.app.pages.dashboard')),
                            ...BookResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Mi estante')
                        ->items([
                            NavigationItem::make('Libros solicitados')
                                ->icon('tabler-clock-plus')
                                ->url(BookUserResource::getUrl().'?tab='.BookStatus::Requested->value)
                                ->isActiveWhen(fn () => request()->routeIs('filament.app.resources.mis-libros.index') && request()->query('tab') === BookStatus::Requested->value)
                                ->badge(
                                    fn () => auth()->user()->books()->where('status', BookStatus::Requested)->count() ?: null
                                ),
                            NavigationItem::make('Actualmente leyendo')
                                ->icon('tabler-book')
                                ->url(BookUserResource::getUrl().'?tab='.BookStatus::Borrowed->value)
                                ->isActiveWhen(fn () => request()->routeIs('filament.app.resources.mis-libros.index') && request()->query('tab') === BookStatus::Borrowed->value)
                                ->badge(
                                    fn () => auth()->user()->books()->where('status', BookStatus::Borrowed)->count() ?: null
                                ),
                            NavigationItem::make('Lecturas anteriores')
                                ->icon('tabler-book-2')
                                ->url(BookUserResource::getUrl().'?tab='.BookStatus::Returned->value)
                                ->isActiveWhen(fn () => request()->routeIs('filament.app.resources.mis-libros.index') && request()->query('tab') === BookStatus::Returned->value)
                                ->badge(
                                    fn () => auth()->user()->books()->where('status', BookStatus::Returned)->count() ?: null
                                ),
                        ]),
                ]);
            })
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
