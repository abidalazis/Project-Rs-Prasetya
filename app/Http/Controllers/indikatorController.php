<?php

namespace App\Http\Controllers;

use App\Models\atem;
use App\Models\laporan_it;
use Illuminate\Http\Request;

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
        $atem = atem::all();

        return view('dashboard.indikator-mutu.sarpras.atem', compact('atem'));
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
    public function humas()
    {
        return view('dashboard.indikator-mutu.humas');
    }
    public function cssd()
    {
        return view('dashboard.indikator-mutu.perawat.cssd');
    }
    public function icu()
    {
        return view('dashboard.indikator-mutu.perawat.icu');
    }
    public function igd()
    {
        return view('dashboard.indikator-mutu.perawat.igd');
    }
    public function kaber()
    {
        return view('dashboard.indikator-mutu.perawat.kaber');
    }
    public function ok()
    {
        return view('dashboard.indikator-mutu.perawat.ok');
    }
    public function londri()
    {
        return view('dashboard.indikator-mutu.perawat.londri');
    }
    public function lt2()
    {
        return view('dashboard.indikator-mutu.perawat.lt2');
    }
    public function lt4()
    {
        return view('dashboard.indikator-mutu.perawat.lt4');
    }
    public function lt5()
    {
        return view('dashboard.indikator-mutu.perawat.lt5');
    }
    public function lt6()
    {
        return view('dashboard.indikator-mutu.perawat.lt6');
    }
    public function perina()
    {
        return view('dashboard.indikator-mutu.perawat.perina');
    }
    public function rajal()
    {
        return view('dashboard.indikator-mutu.perawat.rajal');
    }

    //Penunjang Medis
    public function casemix()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.casemix');
    }
    public function farmasi()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.farmasi');
    }
    public function gisi()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.gisi');
    }
    public function lab()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.lab');
    }
    public function radioogi()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.radioogi');
    }
    public function rehab()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.rehab');
    }
    public function rm()
    {
        return view('dashboard.indikator-mutu.penunjang-medis.rm');
    }
    

    
}
