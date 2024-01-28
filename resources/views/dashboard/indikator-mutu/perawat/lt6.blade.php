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
                      <h2>Lantai 6</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1cwhyXVyzQziiL0EVcWO03iSyxtl559jpspzCXXzicuA/edit#gid=2027596824">
                              Kepatuhan Prinsip Benar Obat Pada Pemberian Obat High Alert Insulin Untuk Pasien Diabetes Melitus
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1cwhyXVyzQziiL0EVcWO03iSyxtl559jpspzCXXzicuA/edit#gid=1679361648">
                              Kepatuhan Upaya Pencegahan Asesmen Resiko Jatuh Tinggi                </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1cwhyXVyzQziiL0EVcWO03iSyxtl559jpspzCXXzicuA/edit#gid=87079264">
                              Kepatuhan Identifikasi Pasien               </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1cwhyXVyzQziiL0EVcWO03iSyxtl559jpspzCXXzicuA/edit#gid=152790148">
                              Kepatuhan Melakukan Visite Dokter (jam 06.00-14.00)       </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
