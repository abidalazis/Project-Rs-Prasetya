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
                      <h2>Gizi</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/192k3V_Tv-jsUUIOsPzRoXAf9eGIVgiok0fZfy_8SyFY/edit#gid=1732712903">
                              Kepatuhan Identifikasi Pasien 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/192k3V_Tv-jsUUIOsPzRoXAf9eGIVgiok0fZfy_8SyFY/edit#gid=955481609">
                              ANGKA KELENGKAPAN PENGKAJIAN GIZI DALAM 2X24 JAM UNTUK PASIEN BARU                  </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
