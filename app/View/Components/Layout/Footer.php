<?php

namespace App\View\Components\Layout;

use Closure;
use App\Helpers\SettingHelper;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Footer extends Component
{
    public string $instagram;
    public string $tiktok;
    public string $facebook;

    public function __construct()
    {
        $this->instagram = SettingHelper::getSetting('instagram') ?? '';
        $this->tiktok    = SettingHelper::getSetting('tiktok') ?? '';
        $this->facebook  = SettingHelper::getSetting('Facebook') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.footer');
    }
}
