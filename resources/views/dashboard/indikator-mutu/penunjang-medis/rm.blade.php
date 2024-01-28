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
                      <h2>RM</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1OweSl-2Nf2JWxsTKiUqqtevSBdsju2U2t6BgPVRQgzM/edit#gid=0">
                              Kelengkapan Pengisian Rekam Medik 24 Jam Setelah Selesai Pelayanan			
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1OweSl-2Nf2JWxsTKiUqqtevSBdsju2U2t6BgPVRQgzM/edit#gid=30710789">
                              Kelengkapan Pengisian Resume Pasien Pulang         </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
