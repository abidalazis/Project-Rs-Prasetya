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
                      <h2>Rehabilitasi Medik</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1DyIPRA4kE4_OUAskh8pmbWof8XU7TYbQPLBjiK-12V8/edit#gid=0">
                              Kejadian Drop Out Pasien Terhadap Pelayanan Rehabilitasi Medik Yang Direncanakan
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1DyIPRA4kE4_OUAskh8pmbWof8XU7TYbQPLBjiK-12V8/edit#gid=968076801">
                              Waktu Tunggu Pelayanan Rehabilitasi Medik di Rawat Jalan Maksimal 30 Menit           </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
