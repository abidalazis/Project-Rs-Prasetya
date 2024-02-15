<?php

namespace App\Http\Controllers;

use App\Models\it;
use App\Models\ok;
use App\Models\rm;
use App\Models\hnm;
use App\Models\icu;
use App\Models\igd;
use App\Models\lab;
use App\Models\lt2;
use App\Models\lt4;
use App\Models\lt5;
use App\Models\lt6;
use App\Models\sdm;
use App\Models\atem;
use App\Models\cssd;
use App\Models\gizi;
use App\Models\hand;
use App\Models\uang;
use App\Models\audit;
use App\Models\kaber;
use App\Models\rajal;
use App\Models\rehab;
use App\Models\upsrs;
use App\Models\driver;
use App\Models\londri;
use App\Models\perina;
use App\Models\casemix;
use App\Models\farmasi;
use App\Models\kesling;
use App\Models\security;
use App\Models\radiologi;
use App\Models\supervisi;
use App\Models\laporan_it;
use App\Models\surveilans;
use App\Models\surveilansok;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $driver = driver::all();

        return view('dashboard.indikator-mutu.sarpras.driver', compact('driver'));
    }
    public function it()
    {
        $it = it::all();
        return view('dashboard.indikator-mutu.sarpras.it', compact('it'));
    }
    public function kesling()
    {
        $kesling = kesling::all();
        return view('dashboard.indikator-mutu.sarpras.kesling', compact('kesling'));
    }
    public function security()
    {
        $security = security::all();
        return view('dashboard.indikator-mutu.sarpras.security', compact('security'));
    }
    public function upsrs()
    {
        $upsrs = upsrs::all();
        return view('dashboard.indikator-mutu.sarpras.upsrs', compact('upsrs'));
    }
    public function keuangan()
    {
        $keuangan = uang::all();
        return view('dashboard.indikator-mutu.keuangan', compact('keuangan'));
    }
    public function sdm()
    {
        $sdm = sdm::all();
        return view('dashboard.indikator-mutu.sdm', compact('sdm'));
    }
    public function humas()
    {
        $hnm = hnm::all();
        return view('dashboard.indikator-mutu.humas', compact('hnm'));
    }
    public function cssd()
    {
        $cssd = cssd::all();
        return view('dashboard.indikator-mutu.perawat.cssd', compact('cssd'));
    }
    public function icu()
    {
        $icu = icu::all();
        return view('dashboard.indikator-mutu.perawat.icu', compact('icu'));
    }
    public function igd()
    {
        $igd = igd::all();
        return view('dashboard.indikator-mutu.perawat.igd', compact('igd'));
    }
    public function kaber()
    {
        $kaber = kaber::all();
        return view('dashboard.indikator-mutu.perawat.kaber', compact('kaber'));
    }
    public function ok()
    {
        $ok = ok::all();
        return view('dashboard.indikator-mutu.perawat.ok', compact('ok'));
    }
    public function londri()
    {
        $londri = londri::all();
        return view('dashboard.indikator-mutu.perawat.londri', compact('londri'));
    }
    public function lt2()
    {
        $lt2 = lt2::all();
        return view('dashboard.indikator-mutu.perawat.lt2', compact('lt2'));
    }
    public function lt4()
    {
        $lt4 = lt4::all();
        return view('dashboard.indikator-mutu.perawat.lt4', compact('lt4'));
    }
    public function lt5()
    {
        $lt5 = lt5::all();
        return view('dashboard.indikator-mutu.perawat.lt5', compact('lt5'));
    }
    public function lt6()
    {
        $lt6 = lt6::all();
        return view('dashboard.indikator-mutu.perawat.lt6', compact('lt6'));
    }
    public function perina()
    {
        $perina = perina::all();
        return view('dashboard.indikator-mutu.perawat.perina', compact('perina'));
    }
    public function rajal()
    {
        $rajal = rajal::all();
        return view('dashboard.indikator-mutu.perawat.rajal', compact('rajal'));
    }

    //Penunjang Medis
    public function casemix()
    {
        $casemix = casemix::all();
        return view('dashboard.indikator-mutu.penunjang-medis.casemix', compact('casemix'));
    }
    public function farmasi()
    {
        $farmasi = farmasi::all();
        return view('dashboard.indikator-mutu.penunjang-medis.farmasi', compact('farmasi'));
    }
    public function gizi()
    {
        $gizi = gizi::all();
        return view('dashboard.indikator-mutu.penunjang-medis.gizi', compact('gizi'));
    }
    public function lab()
    {
        $lab = lab::all();
        return view('dashboard.indikator-mutu.penunjang-medis.lab', compact('lab'));
    }
    public function radiologi()
    {
        $radiologi = radiologi::all();
        return view('dashboard.indikator-mutu.penunjang-medis.radiologi', compact('radiologi'));
    }
    public function rehab()
    {
        $rehab = rehab::all();
        return view('dashboard.indikator-mutu.penunjang-medis.rehab', compact('rehab'));
    }
    public function rm()
    {
        $rm = rm::all();
        return view('dashboard.indikator-mutu.penunjang-medis.rm', compact('rm'));
    }
    public function surveilans()
    {
        $surveilans = surveilans::all();
        return view('dashboard.indikator-mutu.ppi.surveilans', compact('surveilans'));
    }
    public function audit()
    {
        $audit = audit::all();
        return view('dashboard.indikator-mutu.ppi.audit', compact('audit'));
    }
    public function hand()
    {
        $hand = hand::all();
        return view('dashboard.indikator-mutu.ppi.hand', compact('hand'));
    }
    public function surveilansok()
    {
        $surveilansok = surveilansok::all();
        return view('dashboard.indikator-mutu.ppi.surveilansok', compact('surveilansok'));
    }
    public function supervisi()
    {
        $supervisi = supervisi::all();
        return view('dashboard.indikator-mutu.ppi.supervisi', compact('supervisi'));
    }
    

    
}
