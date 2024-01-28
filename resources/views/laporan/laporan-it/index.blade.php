@extends('laporan.layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan IT</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan IT</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <a href="{{ route('laporan-it.create') }}" class="btn btn-primary">Tambah</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th>Unit</th>
                        <th>Jenis</th>
                        <th>Keluhan</th>
                        <th>Jam Laporan</th>
                        <th>Jam Selesai</th>
                        <th>Jenis Keluhan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->Keluhan }}</td>
                        <td>{{ $item->jam_laporan }}</td>
                        <td>{{ $item->jam_selesai }}</td>
                        <td>{{ $item->jenis_keluhan }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="/laporan-it/ {{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('YAKIN AKAN MENGHAPUS?')" class="d-inline" action="/laporan-it/ {{$item->id}}"
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

