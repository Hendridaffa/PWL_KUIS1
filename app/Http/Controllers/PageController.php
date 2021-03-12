<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Penyedia;
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
    public function pegawai()
    {
        return view('daftarPegawai', ['pegawai' => Pegawai::pegawai()]);
    }
    public function penyedia()
    {
        return view('daftarPenyedia', ['penyedia' => Penyedia::penyedia()]);
    }
}
