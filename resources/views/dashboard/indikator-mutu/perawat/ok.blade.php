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
                      <h2></h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1GOFhYbnmO0vrUg3spY6KPU-HMSwZCI8vhJZ8FqpHH28/edit#gid=0">
                              Kepatuhan Pengecekan / Persiapan Alat Anestesi Sebelum Dilakukan Tindakan Anestesi 
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1GOFhYbnmO0vrUg3spY6KPU-HMSwZCI8vhJZ8FqpHH28/edit#gid=252498528">
                              Kepatuhan Pemberian Penjelasan Secara Lisan Bagaimana Teknik Anestesi Yang Digunakan Pada Pasien Yang Menjalani Operasi di Ruang Persiapan               </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1GOFhYbnmO0vrUg3spY6KPU-HMSwZCI8vhJZ8FqpHH28/edit#gid=952683285">
                              Kepatuhan Pemberian Tanda Area Operasi Pada Lembar Rekam Medis Operasi       </a>
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
