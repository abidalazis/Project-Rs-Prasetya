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
                      <h2>ICU</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1kH3kHbSxajuM7G8pPKlZnJTL27_TpMv6uTn11drdoX8/edit#gid=42204670">
                              Kepatuhan Upaya Pencegahan Asesmen Resiko Jatuh Tinggi
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1kH3kHbSxajuM7G8pPKlZnJTL27_TpMv6uTn11drdoX8/edit#gid=604250722">
                              Kepatuhan Melakukan Visite Dokter (jam 6.00-14.00)              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1kH3kHbSxajuM7G8pPKlZnJTL27_TpMv6uTn11drdoX8/edit#gid=2147469093">
                              Ketepatan Pemindahan Pasien ICU Sesuai Kriteria Keluar Masuk                       </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1kH3kHbSxajuM7G8pPKlZnJTL27_TpMv6uTn11drdoX8/edit#gid=24315257">
                              Kepatuhan Identifikasi Pasien                        </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
