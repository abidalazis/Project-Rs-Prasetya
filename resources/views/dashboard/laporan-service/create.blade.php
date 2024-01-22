@extends('dashboard.layouts.main')
@push('select2')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
@endpush
@section('content')
    <div class="container-fluid px-4">
        <h1 class="h2">Tambah Laporan</h1>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action='{{ url('laporan-service') }}' method='post'>
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
                                    <label class="col-sm-2 col-form-label">Nama Ruangan</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="id_ruangan" id="id_ruangan"
                                            >
                                            <option value="">Pilih Ruangan</option>
                                            @foreach ($data_ruangan as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_ruangan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="merk" class="col-sm-2 col-form-label">merk</label>

                                    <div class="col-sm-10">
                                        <input type="hidden" value="" readonly id="id_merk" name="id_merk">
                                        <input type="text" value="" readonly id="nama_merk" name=""
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-2 col-form-label">status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='status'value="{{ Session::get('status') }}" id="status">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="keterangan" class="col-sm-2 col-form-label">keterangan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='keterangan'value="{{ Session::get('keterangan') }}" id="keterangan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="merk" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10"><button type="submit" class="btn btn-primary"
                                            name="submit">SIMPAN</button></div>
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
            $('#id_ruangan').select2({
            });

            $('#id_ruangan').change(function() {
                var category_id = $(this).val();

                $.ajax({
                    url: '/merk/' + category_id,
                    type: 'GET',
                    success: function(data) {
                        $('#nama_merk').val(data[0].nama_merk);
                        $('#id_merk').val(data[0].id);
                        console.log(data[0])
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });

            });
        });
    </script>
@endpush
