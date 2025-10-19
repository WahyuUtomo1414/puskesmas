<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;
use App\Helpers\BennerHelper;
use App\Models\Profile;
use Illuminate\Support\Facades\Cache;

class ProfileController extends Controller
{
    public function index()
    {
        $profileData = Cache::remember('profile_data', 600, function () {
            return [
                'counts' => Count::where('active', true)->limit(4)->get(),
                'profileData' => Profile::where('active', true)->limit(1)->get(),
            ];
        });

        $data = [];

        $data['profile'] = BennerHelper::getBennerImageUrl('profile');

        return view('pages.profilepages', $data = array_merge($data, $profileData));
    }
}
