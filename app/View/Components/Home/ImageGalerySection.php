<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageGalerySection extends Component
{
    public $imageGalleries;

    /**
     * Create a new component instance.
     *
     * @param  \Illuminate\Support\Collection|array|null  $imageGalleries
     */
    public function __construct($imageGalleries = null)
    {
        // Pastikan selalu Collection untuk mempermudah loop
        $this->imageGalleries = $imageGalleries ?? collect();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.image-galery-section');
    }
}