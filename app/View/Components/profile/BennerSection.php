<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BEnnerSection extends Component
{
    /**
     * Create a new component instance.
     */
    public $counts;
    public $profileData;

    public function __construct(
        $counts, 
        $profileData,
        public string $profile
    )
    {
        $this->counts = $counts;
        $this->profileData = $profileData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.profile.benner-section');
    }
}
