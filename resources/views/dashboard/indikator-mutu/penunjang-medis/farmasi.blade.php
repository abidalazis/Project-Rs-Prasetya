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
                      <h2>Farmasi</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=899598027">
                              Waktu Tunggu Pelayanan Obat  Jadi < 30 Menit
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=0">
                              Waktu Tunggu Pelayanan Obat  Racikan < 60 Menit  </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=724827419">
                              Kepatuhan Penggunaan Fornas        </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=1989308335">
                              Kepatuhan Pelaksanaan Antrian Obat Online Sesuai Peraturan BPJS
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=2105180210">
                              Angka Kelengkapan Obat Untuk Pasien Kronis                   </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=271601253">
                              Obat High Alert Berlabel                     </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1zhlC8vClFXQMkzp79ZL5t7nzyoxHgy_BCOy9HjOfGhM/edit#gid=22218573">
                              Angka Kelengkapan Pengkajian Apoteker dalam 2 X 24 Jam Untuk Pasien Baru, Identifikasi Masalah dan Keamanan Penggunaan Obat dalam Lembar Catatan Perkembangan Pasien CPPT		          </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
