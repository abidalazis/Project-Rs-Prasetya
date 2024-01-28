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
                      <h2>Laboratorium</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/14VLBey-okEPzcoDae7Vcu__kRiTsjV22E6SAFCynzSA/edit#gid=0">
                              Pelaporan Nilai Kritis Hasil Pemeriksaan Laboratorium < 30 Menit
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/14VLBey-okEPzcoDae7Vcu__kRiTsjV22E6SAFCynzSA/edit#gid=1010761211">
                              Tidak Adanya Kejadian Penundaan / Gagal Pemeriksaan Jaringan PA / Kultur Push Karena Sampel Hilang                    </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/14VLBey-okEPzcoDae7Vcu__kRiTsjV22E6SAFCynzSA/edit#gid=2058976793">
                              Kesesuain Identifikasi Produk Darah Denah Lembar Permintaan               </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
