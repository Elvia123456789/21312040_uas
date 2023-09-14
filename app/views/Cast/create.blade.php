@extends('layout.master')

@section('judul')
Tambah Mahasiswa
@endsection

@section('content')
<form method="post" action="/cast">
    @csrf
    <div class="form-group">
        <label>Npm</label>
        <input type="text" name="npm" value="" class="form-control">
    </div>
    @error('npm')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="number" name="nama" value="" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror

    <div class="form-group">
        <label>alamat</label>
        <textarea class="form-control" name="alamat"></textarea>
    </div>
    @error('alamat')
    <div class="alert alert-danger">{{ $message}}</div>
    @enderror

<button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection