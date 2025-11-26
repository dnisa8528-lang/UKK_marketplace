@extends('admin.template')

@section('title', 'Tambah User')

@section('content')

<style>
    .form-card {
        background: #fff0f6; 
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(128, 0, 32, 0.12);
        max-width: 600px;
        margin: auto;
        border-left: 10px solid #800020;
        animation: fadeIn 0.4s ease-in-out;
    }
    .form-label {
        font-weight: bold;
        color: #800020;
    }
    .btn-save {
        background: #c94a6e;
        color: white;
        font-weight: bold;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-save:hover {
        background: #800020;
    }
    .btn-back {
        background: #800020;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        border: none;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        transition: background-color 0.3s ease;
    }
    .btn-back:hover {
        background: #c94a6e;
    }
</style>

<div class="form-card">
    <h3 class="mb-4 text-center" style="color:#800020; font-weight:bold;">
        Tambah User
    </h3>

    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kontak</label>
            <input type="text" name="kontak" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Role</label>
            <select name="role" class="form-select" required>
                <option value="admin">Admin</option>
                <option value="member" selected>Member</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('admin.user.index') }}" class="btn-back">Kembali</a>
            <button type="submit" class="btn-save">Simpan</button>
        </div>
    </form>
</div>

@endsection
