@extends('dashboard.layouts.main')
@section('container')
<!-- START FORM -->
<form action='{{ url('laporan-service') }}' method='post'>
    @csrf

   
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal' value="{{ Session::get('tanggal') }}" id="tanggal">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Ruangan</label>
            <div class="col-sm-10">

                <select class="form-select" name="id_ruangan" id="id_ruangan" data-placeholder="Pilih Ruangan">
                    <option></option>
                    @foreach ($data_ruangan as $item)
                    <option value="{{ $item->id }}" >{{ $item->nama_ruangan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="merk" class="col-sm-2 col-form-label">merk</label>
            
              <div class="col-sm-10">
                <input type="hidden" value="" readonly id="id_merk" name="id_merk">
                <input type="text" value="" readonly id="nama_merk" name="" class="form-control">

            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='status'value="{{ Session::get('status') }}" id="status">
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