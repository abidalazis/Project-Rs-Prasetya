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
                                            <select class="form-select" name="unit" id="unit" data-placeholder="Pilih Unit">
                                                <option value=""></option>
                                                <option value="Lantai 2"@if('Lantai 2'==$datas->unit) selected @endif >Lantai 2</option>
                                                <option value="Lantai 3"@if('Lantai 3'==$datas->unit) selected @endif>Lantai 3</option>
                                                <option value="Lantai 4"@if('Lantai 4'==$datas->unit) selected @endif>Lantai 4</option>
                                                <option value="Lantai 5"@if('Lantai 5'==$datas->unit) selected @endif>Lantai 5</option>
                                                <option value="Lantai 6"@if('Lantai 6'==$datas->unit) selected @endif>Lantai 6</option>
                                                <option value="IGD"@if('IGD'==$datas->unit) selected @endif>IGD</option>
                                                <option value="Marketing"@if('Marketing'==$datas->unit) selected @endif>Marketing</option>
                                                <option value="Keuangan"@if('Keuangan'==$datas->unit) selected @endif>Keuangan</option>
                                                <option value="kasir"@if('kasir'==$datas->unit) selected @endif>kasir</option>
                                                <option value="Casemix"@if('Casemix'==$datas->unit) selected @endif>Casemix</option>
                                                <option value="Poli Urologi"@if('Poli Urologi'==$datas->unit) selected @endif>Poli Urologi</option>
                                                <option value="Poli Paru"@if('Poli Paru'==$datas->unit) selected @endif>Poli Paru</option>
                                                <option value="Poli Orthopedhi"@if('Poli Orthopedhi'==$datas->unit) selected @endif>Poli Orthopedhi</option>
                                                <option value="Poli Mata"@if('Poli Mata'==$datas->unit) selected @endif>Poli Mata</option>
                                                <option value="Poli Gigi"@if('Poli Gigi'==$datas->unit) selected @endif>Poli Gigi</option>
                                                <option value="Poli Bedah Mulut"@if('Poli Bedah Mulut'==$datas->unit) selected @endif>Poli Bedah Mulut</option>
                                                <option value="Poli Jantung"@if('Poli Jantung'==$datas->unit) selected @endif>Poli Jantung</option>
                                                <option value="Poli Saraf"@if('Poli Saraf'==$datas->unit) selected @endif>Poli Saraf</option>
                                                <option value="Poli Kulit"@if('Poli Kulit'==$datas->unit) selected @endif>Poli Kulit</option>
                                                <option value="Poli Bedah Plastik"@if('Poli Bedah Plastik'==$datas->unit) selected @endif>Poli Bedah Plastik</option>
                                                <option value="Poli Bedah"@if('Poli Bedah'==$datas->unit) selected @endif>Poli Bedah</option>
                                                <option value="Poli THT"@if('Poli THT'==$datas->unit) selected @endif>Poli THT</option>
                                                <option value="Poli Kandungan"@if('Poli Kandungan'==$datas->unit) selected @endif>Poli Kandungan</option>
                                                <option value="Poli anak"@if('Poli anak'==$datas->unit) selected @endif>Poli anak</option>
                                                <option value="Poli Dalam"@if('Poli Dalam'==$datas->unit) selected @endif>Poli Dalam</option>
                                                <option value="Nifas"@if('Nifas'==$datas->unit) selected @endif>Nifas</option>
                                                <option value="Kamar Bersalin"@if('Kamar Bersalin'==$datas->unit) selected @endif>Kamar Bersalin</option>
                                                <option value="Kantor PT"@if('Kantor PT'==$datas->unit) selected @endif>Kantor PT</option>
                                                <option value="Rehabilitasi Medik"@if('Rehabilitasi Medik'==$datas->unit) selected @endif>Rehabilitasi Medik</option>
                                                <option value="Pos Parkir"@if('Pos Parkir'==$datas->unit) selected @endif>Pos Parkir</option>
                                                <option value="Security"@if('Security'==$datas->unit) selected @endif>Security</option>
                                                <option value="Gizi"@if('Gizi'==$datas->unit) selected @endif>Gizi</option>
                                                <option value="Management"@if('Management'==$datas->unit) selected @endif>Management</option>
                                                <option value="Kamar Operasi (OK)"@if('Kamar Operasi (OK)'==$datas->unit) selected @endif>Kamar Operasi (OK)</option>
                                                <option value="CSSD"@if('CSSD'==$datas->unit) selected @endif>CSSD</option>
                                                <option value="Perinatologi"@if('Perinatologi'==$datas->unit) selected @endif>Perinatologi</option>
                                                <option value="Rekam Medis"@if('Rekam Medis'==$datas->unit) selected @endif>Rekam Medis</option>
                                                <option value="Farmasi"@if('Farmasi'==$datas->unit) selected @endif>Farmasi</option>
                                                <option value="Gudang Farmasi"@if('Gudang Farmasi'==$datas->unit) selected @endif>Gudang Farmasi</option>
                                                <option value="Laboratorium"@if('Laboratorium'==$datas->unit) selected @endif>Laboratorium</option>
                                                <option value="Radiologi"@if('Radiologi'==$datas->unit) selected @endif>Radiologi</option>
                                                <option value="ICU"@if('ICU'==$datas->unit) selected @endif>ICU</option>
                                                <option value="TPP RAJAL"@if('TPP RAJAL'==$datas->unit) selected @endif>TPP RAJAL</option>
                                                <option value="TPP RANAP"@if('PP RANAP'==$datas->unit) selected @endif>TPP RANAP</option>
                                                <option value="Tempat Baru|Ikut keterangan kerusakan"@if('Tempat Baru|Ikut keterangan kerusakan'==$datas->unit) selected @endif>Tempat Baru-ikut keterangan</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="jenis" type="checkbox" id="inlineCheckbox1" value="Software" @if('Software'==$datas->jenis) checked @endif>
                                            <label class="form-check-label" for="inlineCheckbox1">Software</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="jenis" type="checkbox" id="inlineCheckbox2" value="Hardware" @if('Hardware'==$datas->jenis) checked @endif>
                                            <label class="form-check-label" for="inlineCheckbox2">Hardware</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="jenis" type="checkbox" id="inlineCheckbox3" value="Jaringan" @if('Jaringan'==$datas->jenis) checked @endif>
                                            <label class="form-check-label" for="inlineCheckbox3">Jaringan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="Keluhan" class="col-sm-2 col-form-label">Keluhan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='Keluhan'value="{{ $datas->Keluhan }}" id="Keluhan">
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
                                    <label for="jam_selesai" class="col-sm-2 col-form-label">jam respon</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control"
                                            name='jam_selesai'value="{{ $datas->jam_selesai }}" id="jam_selesai">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis_keluhan" class="col-sm-2 col-form-label">jeniskeluhan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='jenis_keluhan'value="{{ $datas->jenis_keluhan }}" id="jenis_keluhan">
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