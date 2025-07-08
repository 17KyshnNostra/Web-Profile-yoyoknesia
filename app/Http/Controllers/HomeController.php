<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Package;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all();
        $portofolios = Portofolio::all();
        return view('home', compact('layanans', 'portofolios'));
    }

    public function about()
    {
        return view('about-us');
    }

    public function portofolio()
    {
        $portofolios = \App\Models\Portofolio::all();
        return view('porto', compact('portofolios'));
    }

    public function dokumentasi()
    {
        $layanans = \App\Models\Layanan::all();
        return view('dokumentasi', compact('layanans'));
    }
}
