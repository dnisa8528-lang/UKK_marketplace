@extends('admin.template')

@section('title', 'Tambah Produk')

@section('content')

<style>
    .form-box {
        background: #fff;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: 20px auto;
    }

    .form-box h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-weight: 600;
        color: #444;
        display: block;
        margin-bottom: 6px;
    }

    .form-group input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        transition: 0.2s;
    }

    .form-group input:focus {
        border-color: #4e73df;
        box-shadow: 0 0 4px rgba(78,115,223,0.4);
    }

    .btn-submit {
        width: 100%;
        padding: 12px;
        background: #4e73df;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.2s;
        margin-top: 10px;
    }

    .btn-submit:hover {
        background: #2e59d9;
    }
</style>

<div class="form-box">
    <h2>Tambah Produk</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" placeholder="Masukkan nama produk" required>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" placeholder="Masukkan harga" required>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" placeholder="Masukkan stok" required>
        </div>

        <div class="form-group">
            <label>Foto Produk</label>
            <input type="file" name="foto" accept="image/*">
        </div>

        <button type="submit" class="btn-submit">Simpan Produk</button>
    </form>
</div>

@endsection
