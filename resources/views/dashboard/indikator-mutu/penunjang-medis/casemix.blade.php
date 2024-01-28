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
                      <h2>Casemix</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1lt40NsqJvfr4Z0IuUDLMA9SFs4EPhEu77qdDP225E1M/edit#gid=0">
                              KEKURANGAN /KETIDAK LENGKAPAN DATA BERKAS UNTUK KLAIM BPJS
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1lt40NsqJvfr4Z0IuUDLMA9SFs4EPhEu77qdDP225E1M/edit#gid=311820740">
                              KETEPATAN JADWAL PENGIRIMAN BERKAS KLAIM KE KANTOR BPJS KESEHATAN SETIAP TGL 5         </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1lt40NsqJvfr4Z0IuUDLMA9SFs4EPhEu77qdDP225E1M/edit#gid=1046642320">
                              KETEPATAN WAKTU KLARIFIKASI PENDING CLAIM < 3 BULAN        </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
