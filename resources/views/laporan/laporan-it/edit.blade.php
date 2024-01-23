@extends('laporan.layouts.main')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit barang</h1>
    
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="/laporan-it/ {{$datas->id}}" method='post'>
                        @csrf
                    
                       @method('PUT')
                        <div class="my-3 p-3 bg-body rounded shadow-sm">
                                <div class="mb-3 row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name='tanggal'
                                            value="{{ $datas->tanggal }}" id="tanggal">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='nama'value="{{ $datas->nama }}" id="nama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="unit" class="col-sm-2 col-form-label">unit</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='unit'value="{{ $datas->unit }}" id="unit">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='jenis'value="{{ $datas->jenis }}" id="jenis">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kerusakan" class="col-sm-2 col-form-label">kerusakan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='kerusakan'value="{{ $datas->kerusakan }}" id="kerusakan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jam_laporan" class="col-sm-2 col-form-label">jam laporan</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" 
                                            name="jam_laporan" value="{{ $datas->jam_laporan }}" id="jam_laporan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jam_selesai" class="col-sm-2 col-form-label">jam_selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control"
                                            name='jam_selesai'value="{{ $datas->jam_selesai }}" id="jam_selesai">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="selisih" class="col-sm-2 col-form-label">selisih</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='selisih'value="{{ $datas->selisih }}" id="selisih">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='keterangan'value="{{ $datas->keterangan }}" id="keterangan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="merk" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10"><button type="submit" class="btn btn-primary"
                                            name="submit">SIMPAN</button></div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="col-lg-8">
  <form method="post" action="/dashboard/barang">
    <div class="mb-3">
      <label for="nama_barang" class="form-label">barang</label>
      <input type="text" class="form-control" id="nama_barang"  name="nama_barang" >
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Gambar</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div> --}}
@endsection