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
                      <h2>UPSR</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1NyZtkh9xGACiAgsQU948jQkIeTVrxtrAopiMYQlQf_Q/edit#gid=0">
                                Ketepatan Waktu Pemeliharaan AC
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1NyZtkh9xGACiAgsQU948jQkIeTVrxtrAopiMYQlQf_Q/edit#gid=9452882">
                                Ketepatan Waktu Pengecekan APAR dan Hydrant Yang Terencanakan
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1NyZtkh9xGACiAgsQU948jQkIeTVrxtrAopiMYQlQf_Q/edit#gid=1630863249">
                                ketepatan waktu pemeliharaan AC
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
