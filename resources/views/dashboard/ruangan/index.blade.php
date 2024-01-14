 @extends('dashboard.layouts.main')
@section('container')

<main class="container"> 

<div class="my-3 p-3 bg-body rounded shadow-sm">
<!-- FORM PENCARIAN -->
   <div class="pb-3">
    <form class="d-flex" action="/tambah-ruangan" method="get">
        <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
        <button class="btn btn-secondary" type="submit">Cari</button>
    </form>
  </div>
  
  <!-- TOMBOL TAMBAH DATA -->
  <div class="pb-3">
    <a href='/tambah-ruangan/create' class="btn btn-primary">+ Tambah Data</a>
  </div>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
          <th class="col-md-1">No</th>
          <th class="col-md-4">Nama Ruangan</th>
          <th class="col-md-4">Keterangan</th>
          <th class="col-md-1">Aksi</th>
      </tr>
  </thead>
  <tbody>
     
     @foreach ($data_ruangan as $item)
     <tr>
         <td>{{ $loop->iteration }}</td>
         <td>{{ $item->nama_ruangan }}</td>
         <td>{{ $item->keterangan }}</td>
         <td>
             <a href="/tambah-ruangan/ {{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
             <form onsubmit="return confirm('YAKIN AKAN MENGHAPUS?')" class="d-inline" action="/tambah-ruangan/ {{$item->id}}"
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