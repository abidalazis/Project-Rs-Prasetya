@extends('layouts.main')

@section('container')
<!-- START FORM -->
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
      </form>
    </div>
    <!-- AKHIR FORM -->
@endsection
