<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [];

        return view('pages.servicepages', $data);
    }
}
