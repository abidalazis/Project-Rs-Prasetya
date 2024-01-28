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
                      <h2>Perinatlogi</h2>
                        <div class="col">
                          <ul>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1IO8zld6Lqzkt1FheZZ4mRWOewRbkARn6-INGj7FUbZs/edit#gid=773967425">
                                Pelayanan IMD Pada Pasien Partus Normal Pada Bayi Sehat
                              </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1IO8zld6Lqzkt1FheZZ4mRWOewRbkARn6-INGj7FUbZs/edit#gid=81082114">
                              Kepatuhan Identifikasi Pasien               </a>
                            </li>
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="https://docs.google.com/spreadsheets/d/1IO8zld6Lqzkt1FheZZ4mRWOewRbkARn6-INGj7FUbZs/edit#gid=914875794">
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
