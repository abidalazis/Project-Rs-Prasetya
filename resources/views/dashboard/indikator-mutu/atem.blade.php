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
                      <h2>Judul Form Indikator Mutu</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1nr0V5XZEZoNGR1xnGAgrLaqYutW11h8mPCzVqlrliXc/edit#gid=0">
                                KETEPATAN WAKTU TUNGGU PERBAIKAN ALAT MEDIS OLEH PIHAK KE TIGA
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1nr0V5XZEZoNGR1xnGAgrLaqYutW11h8mPCzVqlrliXc/edit#gid=1499967359">
                                KETEPATAN WAKTU PENGECEKAN ALAT–ALAT MEDIS YANG TERENCANAKAN
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1nr0V5XZEZoNGR1xnGAgrLaqYutW11h8mPCzVqlrliXc/edit#gid=2057030540">
                                KETEPATAN WAKTU TUNGGU PERBAIKAN ALAT MEDIS OLEH PIHAK KE TIGA
                              </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
