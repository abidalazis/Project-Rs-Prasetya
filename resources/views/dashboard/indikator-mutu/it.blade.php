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
                      <h2>IT</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1Hbk7Id9sjkfu-05Q_NpDjwGg-gxh2Xu4VU-bfeeNCOc/edit#gid=0">
                                KETEPATAN WAKTU PERBAIKAN SOFWARE DAN HADWARE YANG TERENCANAKAN 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1Hbk7Id9sjkfu-05Q_NpDjwGg-gxh2Xu4VU-bfeeNCOc/edit#gid=8169519">
                                KEPATUHAN PENGUNAAN APLIKASI SIMRS  
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1Hbk7Id9sjkfu-05Q_NpDjwGg-gxh2Xu4VU-bfeeNCOc/edit#gid=1925125261">
                                LAPORAN KETEPATAN WAKTU PERBAIKAN SOFWARE DAN HADWARE YANG TERENCANAKAN 
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
