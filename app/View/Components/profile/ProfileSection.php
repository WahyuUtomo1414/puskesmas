<?php

namespace App\View\Components\Profile;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileSection extends Component
{
    public $profileData;

    public function __construct($profileData)
    {
        $this->profileData = $profileData;
    }

    public function render(): View|Closure|string
    {
        return view('components.profile.profile-section');
    }
}
