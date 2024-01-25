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
        return view('dashboard.indikator-mutu.atem');
    }
    public function driver()
    {
        return view('dashboard.indikator-mutu.driver');
    }
    public function it()
    {
        return view('dashboard.indikator-mutu.it');
    }
    public function kesling()
    {
        return view('dashboard.indikator-mutu.kesling');
    }
    public function security()
    {
        return view('dashboard.indikator-mutu.security');
    }
    public function upsrs()
    {
        return view('dashboard.indikator-mutu.upsrs');
    }
    public function dashboard_laporan()
    {
        // $data_laporan = laporan_it::get();
        // $data_unit =[];
        // foreach ($data_laporan as $dl) {
        //     $data[] = $dl->unit;
        // }
        // $unit = laporan_it::select(laporan_it::raw("select COUNT(*) as total unit, unit from laporan_its group by unit"));
        $unitCounts = Laporan_it::selectRaw('COUNT(*) as total_unit, unit')
                    ->groupBy('unit')
                    ->get();
        $dataChart="";
        foreach ($unitCounts as $list) {
            $dataChart.="['".$list->unit."',".$list->total_unit."],";
        }
       $arr['dataChart']=rtrim($dataChart,",");
        // dd($dataChart);
        
        // dd($data);
        return view('laporan.index',$arr);
    }

    
}
