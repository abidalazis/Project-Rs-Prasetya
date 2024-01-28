@extends('laporan.layouts.main')
@section('content')
@include('laporan.layouts.pesan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Service</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Service</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <a href="{{ route('laporan-service.create') }}" class="btn btn-primary">Tambah</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Ruangan</th>
                        <th>Merk</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ optional($item->ruangan)->nama_ruangan }}</td>
                        <td>{{ optional($item->merk)->nama_merk }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="/laporan-service/ {{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('YAKIN AKAN MENGHAPUS?')" class="d-inline" action="/laporan-service/ {{$item->id}}"
                                method="post">
                                @csrf
                                @method('DELETE')
                            <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>   
                    @endforeach
                 </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection

