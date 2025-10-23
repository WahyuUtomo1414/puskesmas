<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use App\Models\Doctor;

class DoctorSection extends Component
{
    public $doctors;

    public function __construct()
    {
        // Ambil dokter aktif dengan service, limit 8 untuk homepage
        $this->doctors = Doctor::with('service')
            ->where('active', 1)
            ->orderBy('name', 'asc')
            ->limit(8)
            ->get();
    }

    public function render()
    {
        return view('components.home.doctor-section');
    }
}
