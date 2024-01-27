<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan_it;

class dashboardController extends Controller
{
    public function dashboard_laporan()
    {
        //perunit
        $unitCounts = Laporan_it::selectRaw('COUNT(*) as total_unit, unit')
                    ->groupBy('unit')
                    ->get();
        $dataChart="";
        foreach ($unitCounts as $list) {
            $dataChart.="['".$list->unit."',".$list->total_unit."],";
        }
       $arr['dataChart']=rtrim($dataChart,",");

       //perjenis keluhan
        $jenisCounts = Laporan_it::selectRaw('COUNT(*) as total_jenis, jenis')
                    ->groupBy('jenis')
                    ->get();
        $jenisChart="";
        foreach ($jenisCounts as $list) {
            $jenisChart.="['".$list->jenis."',".$list->total_jenis."],";
        }
       $arrjenis['jenisChart']=rtrim($jenisChart,",");
        return view('laporan.index',$arr,$arrjenis);
    }
}
