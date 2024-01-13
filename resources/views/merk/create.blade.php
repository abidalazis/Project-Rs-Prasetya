@extends('layouts.main')

@section('container')
<!-- START FORM -->
<form action='{{ url('tambah-merk') }}' method='post'>
    @csrf

   
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label class="font-weight-bold">Nama Ruangan</label>
                        <select class="form-select" name="id_ruangan">
                            @foreach ($data_ruangan as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
                            @endforeach
                          </select>
        </div>
        <div class="mb-3 row">
            <label for="nama_merk" class="col-sm-2 col-form-label">Nama Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_merk'value="{{ Session::get('nama_merk') }}" id="nama_merk">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jenis'value="{{ Session::get('jenis') }}" id="jenis">
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
