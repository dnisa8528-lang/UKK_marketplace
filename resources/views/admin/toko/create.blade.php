@extends('admin.template')

@section('title', 'Tambah Toko')

@section('content')

<style>
    .form-container {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: 20px auto;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 6px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background: #2ca3ce;
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
    }

    .error {
        color: red;
        margin-bottom: 10px;
    }
</style>

<div class="form-container">

    <h1>Tambah Toko Baru</h1>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.toko.store') }}" method="POST">
        @csrf

        <label for="nama_toko">Nama Toko</label>
        <input type="text" name="nama_toko" id="nama_toko" value="{{ old('nama_toko') }}" required>

        <label for="owner_name">Nama Pemilik</label>
        <input type="text" name="owner_name" id="owner_name" value="{{ old('owner_name') }}" required>

        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" rows="3">{{ old('alamat') }}</textarea>

        <label for="telp">Telepon</label>
        <input type="text" name="telp" id="telp" value="{{ old('telp') }}">

        <button type="submit">Simpan</button>
    </form>

</div>

@endsection
