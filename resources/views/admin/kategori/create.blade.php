@extends('admin.template')

@section('title', 'Tambah Kategori')

@section('content')
<div style="
    padding:20px; 
    background:#ffe6f0;
    border-radius:10px; 
    box-shadow:0 4px 10px rgba(128,0,32,0.15);
    border-left: 8px solid #800020;">
    
    <h2 style="color:#800020; margin-bottom: 15px; font-weight: 700;">
        Tambah Kategori
    </h2>

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf

        <label style="font-weight:600; color:#800020;">Nama Kategori</label>
        <input type="text" name="nama_kategori"
               style="width:100%; padding:10px; border:1px solid #ff85b3; border-radius:8px; margin-bottom:15px;"
               placeholder="Masukkan nama kategori">

        <button type="submit"
                style="background:#800020; color:white; padding:10px 18px; border-radius:8px;">
            Simpan
        </button>

        <a href="{{ route('admin.kategori.index') }}"
           style="margin-left:10px; color:#800020;">
            Batal
        </a>
    </form>
</div>
@endsection
