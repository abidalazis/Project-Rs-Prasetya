<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan_it;

class indikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }
    public function indikator_mutu()
    {
        return view('dashboard.indikator-mutu.index');
    }
    public function atem()
    {
        return view('dashboard.indikator-mutu.sarpras.atem');
    }
    public function driver()
    {
        return view('dashboard.indikator-mutu.sarpras.driver');
    }
    public function it()
    {
        return view('dashboard.indikator-mutu.sarpras.it');
    }
    public function kesling()
    {
        return view('dashboard.indikator-mutu.sarpras.kesling');
    }
    public function security()
    {
        return view('dashboard.indikator-mutu.sarpras.security');
    }
    public function upsrs()
    {
        return view('dashboard.indikator-mutu.sarpras.upsrs');
    }
    public function keuangan()
    {
        return view('dashboard.indikator-mutu.keuangan');
    }
    public function sdm()
    {
        return view('dashboard.indikator-mutu.sdm');
    }
    

    
}
