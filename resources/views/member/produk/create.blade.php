@extends('member.template')

@section('content')

<h2>Tambah Produk</h2>

<form action="{{ route('member.produk.store') }}" method="POST">
    @csrf

    <label>Pilih Toko</label>
    <select name="id_toko" class="form-control" required>
        <option value="">-- Pilih --</option>
        @foreach($tokos as $t)
            <option value="{{ $t->id }}">{{ $t->nama_toko }}</option>
        @endforeach
    </select>

    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control">

    <label>Harga</label>
    <input type="number" name="harga" class="form-control">

    <label>Stok</label>
    <input type="number" name="stok" class="form-control">

    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"></textarea>

    <button class="btn btn-success mt-3">Simpan</button>
</form>

@endsection
