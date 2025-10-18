<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Count;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\BennerHelper;
use App\Helpers\SettingHelper;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        $homeData = Cache::remember('home_data', 600, function () {
            return [
                'counts' => Count::where('active', true)->limit(4)->get(),
                'divisi' => Service::where('active', true)->limit(4)->get(),
                // 'faqs'   => Faq::where('active', true)->limit(6)->get(),
                // 'branches' => Branch::where('active', true)->with('blogs')->get(),
                'blogs'    => Blog::where('active', true)->get(),
                // 'branchesAsc' => Branch::with(['blogs' => fn($q) => $q->orderBy('created_at', 'asc')])->get(),
                // 'branchesDesc'=> Branch::with(['blogs' => fn($q) => $q->orderBy('created_at', 'desc')])->get(),
            ];
        });

        $data['hero'] = BennerHelper::getBennerImageUrl('hero');

        // Get Setting Helpers About Section
        $data['aboutTextA'] = SettingHelper::getSetting('about_text_a');
        $data['aboutTextB'] = SettingHelper::getSetting('about_text_b');
        $data['vision'] = SettingHelper::getSetting('vision');
        $data['mission'] = SettingHelper::getSetting('mission');
        $data['aboutImage'] = BennerHelper::getBennerImageUrl('about_image');

        // //Get Setting Helpers Galery Section
        // $data['galeryTitle'] = SettingHelper::getSetting('galery_title');
        // $data['galeryText'] = SettingHelper::getSetting('galery_text');

        // //Get Setting Helpers Faq Section
        // $data['faqTitle'] = SettingHelper::getSetting('faq_title');

        // //Get Setting Helpers Footer Section
        // $data['instagram'] = SettingHelper::getSetting('instagram');
        // $data['youtube'] = SettingHelper::getSetting('youtube');
        // $data['tiktok'] = SettingHelper::getSetting('tiktok');
        // $data['linkedin'] = SettingHelper::getSetting('linkedin');
        // $data['whatsapp'] = SettingHelper::getSetting('whatsapp');

        return view('pages.homepage', $data = array_merge($data, $homeData));
    }
}
