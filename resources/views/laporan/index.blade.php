@extends('layouts.main')

@section('container')
<h1>IISIII</h1>

<main class="container">
    
     <!-- START DATA -->
     <div class="my-3 p-3 bg-body rounded shadow-sm">
             <!-- FORM PENCARIAN -->
             <div class="pb-3">
               <form class="d-flex" action="/laporan-service" method="get">
                   <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                   <button class="btn btn-secondary" type="submit">Cari</button>
               </form>
             </div>
             
             <!-- TOMBOL TAMBAH DATA -->
             <div class="pb-3">
               <a href='/laporan-service/create' class="btn btn-primary">+ Tambah Data</a>
             </div>
       
             <table class="table table-striped">
                 <thead>
                     <tr>
                         <th class="col-md-1">No</th>
                         <th class="col-md-2">tanggal</th>
                         <th class="col-md-2">ruangan</th>
                         <th class="col-md-2">merk</th>
                         <th class="col-md-2">status</th>
                         <th class="col-md-2">keterangan</th>
                         <th class="col-md-4">Aksi</th>
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
@endsection
