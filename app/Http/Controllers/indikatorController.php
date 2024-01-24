<?php

namespace App\Http\Controllers;

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
        return view('dashboard.indikator-mutu.atem');
    }

    
}
