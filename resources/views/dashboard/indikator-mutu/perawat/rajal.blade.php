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
                      <h2>RAJAL</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1DzfeZEUmx0zQO54mEKmwJnfOuNmestAsNBCmx5GfO1o/edit#gid=0">
                                Waktu Tunggu Pasien Rawat Jalan < 60 Menit Yang Diobservasi 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href=https://docs.google.com/spreadsheets/d/1DzfeZEUmx0zQO54mEKmwJnfOuNmestAsNBCmx5GfO1o/edit#gid=1192729498">
                                Kepatuhan Pelaksanaan Antrian Online Sesuai Peraturan BPJS                    </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1DzfeZEUmx0zQO54mEKmwJnfOuNmestAsNBCmx5GfO1o/edit#gid=183439423">
                                Angka Pemberitahuan Secara Lisan/Tertulis Penundaan Parktek Dokter Spesialis yang Diberitahukan H-3 Sebelum Jadwal Poli                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1DzfeZEUmx0zQO54mEKmwJnfOuNmestAsNBCmx5GfO1o/edit#gid=1825497305">
                                Kepatuhan Dokter Spesialis Dalam Memberikan Inform Concent Tentang Operasi Elektif di Poli Bedah                      </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
