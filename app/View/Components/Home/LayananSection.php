<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayananSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $layanan;

    public function __construct($layanan)
    {
        $this->layanan = $layanan;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.layanan-section');
    }
}
