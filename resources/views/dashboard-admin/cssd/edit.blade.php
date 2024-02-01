@extends('dashboard-admin.layouts.main')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="h2">{{ $tittle }}</h1>

    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/tambah-cssd/ {{ $cssd->id }}" method='post'>
                            @csrf

                            @method('PUT')
                            <div class="my-3 p-3 bg-body rounded shadow-sm">

                                <div class="mb-3 row">
                                    <label for="nama_form" class="col-sm-2 col-form-label">Nama form</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                            name='nama_form'value="{{ $cssd->nama_form }}" id="nama_form">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="link" class="col-sm-2 col-form-label">link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name='link'value="{{ $cssd->link }}"
                                            id="link">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="cssd" class="col-sm-2 col-form-label"></label>
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

    {{-- <div class="col-lg-8">
  <form method="post" action="/dashboard/subkategori">
    <div class="mb-3">
      <label for="nama_subkategori" class="form-label">subKategori</label>
      <input type="text" class="form-control" id="nama_subkategori"  name="nama_subkategori" >
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
