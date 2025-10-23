<?php

namespace App\View\Components\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BennerSection extends Component
{
    public $counts;
    public string $profile;
    public $profileData;

    public function __construct($counts, string $profile)
    {
        $this->counts = $counts;
        $this->profile = $profile;
    }

    public function render(): View|Closure|string
    {
        return view('components.profile.benner-section');
    }
}
