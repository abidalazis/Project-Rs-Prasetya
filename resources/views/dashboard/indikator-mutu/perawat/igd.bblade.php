@extends('dashboard.layouts.main')
@section('content')
    @include('dashboard.layouts.pesan')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Indikator Mutu</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Indikator Mutu</li>
        </ol>
        <div class="card mb-5">
            <div class="card-body">
              <div class="container">
                <div class="row align">
                      <h2></h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1gFrT7hdgk3l0gCJoCExmlW5WxXrwH-nXz7UQgWnR_JI/edit#gid=972932605">
                              Respon Time Triage IGD < 5 menit 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1gFrT7hdgk3l0gCJoCExmlW5WxXrwH-nXz7UQgWnR_JI/edit#gid=0">
                              Pemberi Pelayanan Kegawatdaruratan Yang Bersertifikat BCLS/PPGD/ALS     </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1gFrT7hdgk3l0gCJoCExmlW5WxXrwH-nXz7UQgWnR_JI/edit#gid=1834174020">
                              Kelengkapan Asesmen Awal IGD Untuk Pasien Baru               </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1gFrT7hdgk3l0gCJoCExmlW5WxXrwH-nXz7UQgWnR_JI/edit#gid=450709394">
                              Pemberian Obat Fibrinolitik pada Pasien Dengan Serangan Jantung (IMA) Kurang dari 24 Jam          </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
