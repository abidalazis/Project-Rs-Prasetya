@extends('laporan.layouts.main')
@push('select2')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
@endpush
@include('laporan.layouts.pesan')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="h2">Tambah Laporan</h1>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action='{{ url('laporan-it') }}' method='post'>
                            @csrf
                            <div class="my-3 p-3 bg-body rounded shadow-sm">
                                <div class="mb-3 row">
                                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name='tanggal'
                                            value="{{ Session::get('tanggal') }}" id="tanggal">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='nama'value="{{ Session::get('nama') }}" id="nama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="unit" class="col-sm-2 col-form-label">unit</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="unit" id="unit" data-placeholder="Pilih Unit">
                                            <option value=""></option>
                                            <option value="Lantai 2">Lantai 2</option>
                                            <option value="Lantai 3">Lantai 3</option>
                                            <option value="Lantai 4">Lantai 4</option>
                                            <option value="Lantai 5">Lantai 5</option>
                                            <option value="Lantai 6">Lantai 6</option>
                                            <option value="IGD">IGD</option>
                                            <option value="TPP RAJAL">TPP RAJAL</option>
                                            <option value="TPP RANAP">TPP RANAP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jenis" class="col-sm-2 col-form-label">jenis</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jenis" type="checkbox" id="inlineCheckbox1" value="Software">
                                        <label class="form-check-label" for="inlineCheckbox1">Software</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="jenis" type="checkbox" id="inlineCheckbox2" value="Hardware">
                                        <label class="form-check-label" for="inlineCheckbox2">Hardware</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="kerusakan" class="col-sm-2 col-form-label">kerusakan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='kerusakan'value="{{ Session::get('kerusakan') }}" id="kerusakan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jam_laporan" class="col-sm-2 col-form-label">jam laporan</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" 
                                            name="jam_laporan" value="{{ Session::get('jam_laporan') }}" id="jam_laporan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="jam_selesai" class="col-sm-2 col-form-label">jam_selesai</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control"
                                            name='jam_selesai'value="{{ Session::get('jam_selesai') }}" id="jam_selesai">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="selisih" class="col-sm-2 col-form-label">selisih</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='selisih'value="{{ Session::get('selisih') }}" id="selisih">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="keterangan" type="checkbox" id="inline1" value="Selesai">
                                            <label class="form-check-label" for="inline1">Selesai</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="keterangan" type="checkbox" id="inline2" value="Belum Selesai">
                                            <label class="form-check-label" for="inline2">Belum Selesai</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="merk" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10"><button type="submit" class="btn btn-primary"
                                            name="submit">SIMPAN</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('ajax')
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#unit').select2({
            });
            $('#jenis').select2({
            });

            // $('#id_ruangan').change(function() {
            //     var category_id = $(this).val();

            //     $.ajax({
            //         url: '/merk/' + category_id,
            //         type: 'GET',
            //         success: function(data) {
            //             $('#nama_merk').val(data[0].nama_merk);
            //             $('#id_merk').val(data[0].id);
            //             console.log(data[0])
            //         },
            //         error: function(error) {
            //             console.log('Error:', error);
            //         }
            //     });

            // });
        });
    </script>
@endpush
