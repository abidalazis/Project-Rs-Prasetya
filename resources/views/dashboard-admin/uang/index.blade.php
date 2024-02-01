@extends('dashboard-admin.layouts.main')
@section('content')
@include('dashboard.layouts.pesan')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $tittle }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">{{ $tittle }}</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <a href="{{ route('tambah-uang.create') }}" class="btn btn-primary">Tambah</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Form</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_form }}</td>
                            <td>{{ $item->link }}</td>
                            <td>
                                <a href="/tambah-uang/ {{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <form onsubmit="return confirm('YAKIN AKAN MENGHAPUS?')" class="d-inline"
                                    action="/tambah-uang/ {{ $item->id }}" method="post">
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

