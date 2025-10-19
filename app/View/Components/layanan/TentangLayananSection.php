<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TentangLayananSection extends Component
{
    /**
     * Create a new component instance.
     */
    //public $hero;

    public function __construct(
        //$hero
    )
    {
        //$this->hero = $hero;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layanan.tentang-layanan-section');
    }
}
