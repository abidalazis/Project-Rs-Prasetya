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
                      <h2>CSSD</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1bTfkNUOQDI7_UAx8vzU_P4jEUVvzvK7XvERS80tYwQc/edit#gid=0">
                                KESESUAIAN HASIL PEMERIKSAAN UJI SWAB ALAT INSTRUMEN MAUPUN LINEN STERIL DENGAN NILAI BAKU MUTU 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1bTfkNUOQDI7_UAx8vzU_P4jEUVvzvK7XvERS80tYwQc/edit#gid=1194884618">
                                Tidak Adanya Instrumen Yang Kadaluarsa Masa Sterilisasinya                            </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1bTfkNUOQDI7_UAx8vzU_P4jEUVvzvK7XvERS80tYwQc/edit#gid=446861841">
                                ANGKA KEJADIAN INDIKATOR STERIL EKSTERNAL BERUBAH WARNA                               </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
