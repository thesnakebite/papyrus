<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Filament\PanelProvider;

abstract class BasePanelProvider extends PanelProvider
{
    public function basepanel(Panel $panel): Panel
    {
        return $panel
            ->brandName('Papyrus')
            ->brandLogo('/images/branding.png')
            ->darkModeBrandLogo('/images/branding-dark.png')
            ->brandLogoHeight('2.4rem')
            ->favicon('/images/favicon.ico')
            ->font('Source Sans 3')
            ->profile()
            ->viteTheme('resources/css/filament/theme.css')
            ->globalSearch(false)
            ->spa();
    }
}
