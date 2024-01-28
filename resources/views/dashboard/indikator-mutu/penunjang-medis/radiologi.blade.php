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
                      <h2>Radiologi</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1K2oGHlWxowjQkj7sfToBwdYmjF0MA5sfqkwTIGmKeCo/edit#gid=0">
                              Kepatuhan Ketepatan Pengecekan / Persiapan Alat Foto Rontgen 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1K2oGHlWxowjQkj7sfToBwdYmjF0MA5sfqkwTIGmKeCo/edit#gid=1982633072">
                              Waktu Tunggu USG Cyto Pada Layanan Intern Dokter Radiologi < 6 Jam                     </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
