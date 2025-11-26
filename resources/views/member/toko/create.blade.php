@extends('member.template')

@section('content')

<h2>Tambah Toko</h2>

<form action="{{ route('member.toko.store') }}" method="POST">
    @csrf

    <label>Nama Toko</label>
    <input type="text" name="nama_toko" class="form-control" required>

    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required></textarea>

    <button class="btn btn-success mt-3">Simpan</button>
</form>

@endsection
