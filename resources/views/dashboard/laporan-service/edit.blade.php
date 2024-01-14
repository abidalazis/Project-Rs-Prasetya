@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit barang</h1>
    
  </div>
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
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