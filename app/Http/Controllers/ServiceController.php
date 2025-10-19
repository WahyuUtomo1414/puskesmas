<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\SettingHelper;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [];

        return view('pages.servicepages', $data);
    }

    public function showService($id)
    {
        $service = Service::findOrFail($id);
        
        $instagram = SettingHelper::getSetting('instagram');

        return view('pages.layananshow', compact('service', 'instagram'));
    }
}
