@extends('layouts.main')

@section('container')
<!-- START FORM -->
<form action="/tambah-ruangan/ {{$datas->id}}" method='post'>
    @csrf

   @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        <div class="mb-3 row">
            <label for="nama_ruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_ruangan'value="{{ $datas->nama_ruangan }}" id="nama_ruangan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan'value="{{ $datas->keterangan }}" id="keterangan">
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
