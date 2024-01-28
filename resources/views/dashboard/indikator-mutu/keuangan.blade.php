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
                      <h2>Keuangan</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RbsNZp3i2fE4VPIuw4L_CJyVsXNy3VTvbnnVeZQ-kss/edit#gid=0">
                                Penanganan Secara Tepat Pada Pelanggan Umum Gagal Bayar, Deposit Awal Tidak Sesuai Kebijakan Dan Peralihan Jaminan                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RbsNZp3i2fE4VPIuw4L_CJyVsXNy3VTvbnnVeZQ-kss/edit#gid=1158469462">
                                Ketepatan waktu pemberian informasi tagihan kepada pasien umum                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1RbsNZp3i2fE4VPIuw4L_CJyVsXNy3VTvbnnVeZQ-kss/edit#gid=1884406251">
                                Laporan Penanganan Secara Tepat Pada Pelanggan Umum Gagal Bayar, Deposit Awal Tidak Sesuai Kebijakan Dan Peralihan Jaminan                              </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
