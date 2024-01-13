@extends('layouts.main')

@section('container')
<!-- START FORM -->
<form action="/tambah-merk/ {{$merk->id}}" method='post'>
    @csrf

   @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        
        <div class="mb-3 row">
            <label for="nama_merk" class="col-sm-2 col-form-label">Nama Merk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama_merk'value="{{ $merk->nama_merk }}" id="nama_merk">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="font-weight-bold">Nama Ruangan</label>
                        <select class="form-select" name="id_ruangan">
                            @foreach ($data_ruangan as $item)
                            <option value="{{ $item->id }}" @if($item->id==$merk->id_ruangan) selected @endif>{{ $item->nama_ruangan }}</option>
                            @endforeach
                          </select>
        </div>
        <div class="mb-3 row">
            <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jenis'value="{{ $merk->jenis }}" id="jenis">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='keterangan'value="{{ $merk->keterangan }}" id="keterangan">
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
