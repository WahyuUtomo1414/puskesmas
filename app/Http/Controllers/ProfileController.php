<?php

namespace App\Http\Controllers;

use App\Models\Count;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProfileController extends Controller
{
    public function index()
    {
        $profileData = Cache::remember('profile_data', 600, function () {
            return [
                'counts' => Count::where('active', true)->limit(4)->get(),
            ];
        });

        $data = [];

        return view('pages.profilepages', $data = array_merge($data, $profileData));
    }
}
