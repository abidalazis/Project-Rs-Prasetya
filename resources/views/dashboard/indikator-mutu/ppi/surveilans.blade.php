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
                      <h2>surveilans</h2>
                        <div class="col">
                          <ul>
                            @foreach ($surveilans as $item)
                            <li >
                              <a target="_blank" style="text-decoration: none;" href="{{ $item->link }}">
                                {{ $item->nama_form }}
                              </a>
                            </li>
                            @endforeach
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
