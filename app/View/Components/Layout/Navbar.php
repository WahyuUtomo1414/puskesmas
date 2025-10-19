<?php

namespace App\View\Components\Layout;

use Closure;
use App\Helpers\SettingHelper;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public string $strukturOrganisasi;
    public string $ilp;
    public string $kb;

    public function __construct()
    {
        $this->strukturOrganisasi  = SettingHelper::getSetting('strukturOrganisasi') ?? '';
        $this->ilp  = SettingHelper::getSetting('ilp') ?? '';
        $this->kb  = SettingHelper::getSetting('kb') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.navbar');
    }
}
