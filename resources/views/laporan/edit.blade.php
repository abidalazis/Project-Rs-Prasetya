@extends('layouts.main')

@section('container')
<!-- START FORM -->
<form action="/laporan-service/ {{$datas->id}}" method='post'>
    @csrf

   @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ $datas->tanggal }}" id="tanggal">
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
            <label class="font-weight-bold">Merk</label>
                        <select class="form-select" name="id_merk">
                            @foreach ($data_merk as $item)
                            <option value="{{ $item->id }}" @if($item->id==$merk->id_merk) selected @endif>{{ $item->nama_merk }}</option>
                            @endforeach
                          </select>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='status'value="{{ $datas->status }}" id="status">
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
