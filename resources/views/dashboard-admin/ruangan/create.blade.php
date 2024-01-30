@extends('dashboard.layouts.main')
@section('content')
<div class="container-fluid px-4">
    <h1 class="h2">Tambah Kategori</h1>
</div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action='{{ url('tambah-ruangan') }}' method='post'>
                        @csrf
                    
                       
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                            <div class="mb-3 row">
                                <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='nama_ruangan'value="{{ Session::get('nama_ruangan') }}" id="nama_ruangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name='keterangan'value="{{ Session::get('keterangan') }}" id="keterangan">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="merk" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection