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
                      <h2>HUMAS MARKETING</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1seYmwsfzrZwUdvE94Y2G6QRdwXmLTHkvno8DIZnG7vQ/edit#gid=1271780149">
                                Kecepatan Respon Pada Komplain
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1seYmwsfzrZwUdvE94Y2G6QRdwXmLTHkvno8DIZnG7vQ/edit#gid=1544732967">
                                Angka Kepuasan Pasien dan Keluarga                             </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1seYmwsfzrZwUdvE94Y2G6QRdwXmLTHkvno8DIZnG7vQ/edit#gid=866342788">
                                Kelengkapan General Concerne Setelah Mendapatkan Informasi Yang Jelas                               </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
