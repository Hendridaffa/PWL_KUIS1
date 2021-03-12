<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }
    public function daftarService()
    {
        return view('daftarService', ['services' => Service::service()]);
    }
    public function pelanggan()
    {
        return view('daftarPelanggan', ['pelanggan' => Pelanggan::pelanggan()]);
    }
}
