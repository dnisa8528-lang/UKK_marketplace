@extends('admin.template')

@section('title', 'Edit Kategori')

@section('content')

<h2>Edit Kategori</h2>

<form action="{{ route('admin.kategori.update', $kategori->id_kategori) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}" required>
    </div>

    <button type="submit" class="btn-save">Simpan Perubahan</button>
</form>

<br>

<form action="{{ route('admin.kategori.destroy', $kategori->id_kategori) }}"
      method="POST"
      onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn-delete">Hapus Kategori</button>
</form>

@endsection
