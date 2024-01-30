@extends('dashboard.layouts.main')
@section('content')
@include('dashboard.layouts.pesan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Merk</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Merk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <a href="{{ route('tambah-merk.create') }}" class="btn btn-primary">Tambah</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Merk</th>
                        <th>Nama Ruangan</th>
                        <th>Jenis</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_merk }}</td>
                            <td>{{ optional($item->ruangan)->nama_ruangan }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <a href="/tambah-merk/ {{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('YAKIN AKAN MENGHAPUS?')" class="d-inline"
                                    action="/tambah-merk/ {{ $item->id }}" method="post">
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

