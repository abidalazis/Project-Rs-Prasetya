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
                      <h2>Sumber Daya Manusia</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RmbCowD2mBSPFCb8AaQpTaYsvzC8NbMI6X2cjQ2CNa8/edit#gid=0">
                                Kepatuhan Penyusunan Laporan Kontrak Kerja Dan Kontrak Klinis Per Semester             
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RmbCowD2mBSPFCb8AaQpTaYsvzC8NbMI6X2cjQ2CNa8/edit#gid=85935057">
                                Kepatuhan Pelaksanaan In House Training Wajib Bagi Seluruh Karyawan Per Semester                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RmbCowD2mBSPFCb8AaQpTaYsvzC8NbMI6X2cjQ2CNa8/edit#gid=752680759">
                                Laporan                               </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
