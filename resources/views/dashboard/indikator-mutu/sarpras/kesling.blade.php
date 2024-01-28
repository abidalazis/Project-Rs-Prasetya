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
                      <h2>KESEHATAN LINGKUNGAN</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/19OYrORkBHlKKNY5qDuf9udn9a8qOQef8gX0jKVJPgXs/edit#gid=0">
                                Kesesuaian Hasil Pemeriksaan Uji Swab Unit Gizi Dengan Nilai Baku Mutu
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/19OYrORkBHlKKNY5qDuf9udn9a8qOQef8gX0jKVJPgXs/edit#gid=395488354">
                                Kesesuaian Hasil Pemeriksaan Limbah Cair Dengan Nilai Baku Mutu
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/19OYrORkBHlKKNY5qDuf9udn9a8qOQef8gX0jKVJPgXs/edit#gid=8924164">
                               Laporan Kesesuaian Hasil Pemeriksaan Uji Swab Unit Gizi Dengan Nilai Baku Mutu
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
