@extends('admin.template')

@section('title', 'Daftar Produk')

@section('content')

<style>
    .produk-container {
        background: #fff0f6;  
        border-radius: 18px;
        padding: 25px;
        margin-top: 20px;
        box-shadow: 0 5px 20px rgba(128, 0, 32, 0.12); 
        border-left: 10px solid #800020; 
    }
    .produk-table thead {
        background: #800020; 
        color: #ffe6f0; 
        font-weight: 600;
    }
    .produk-table tbody tr:hover {
        background: #ffc7d9; 
        transition: 0.3s;
    }
    .produk-img {
        border-radius: 12px;
        width: 70px;
        height: 70px;
        object-fit: cover;
        border: 3px solid #c94a6e; 
        margin-bottom: 3px;
    }
    .btn-primary {
        background: linear-gradient(135deg, #ff85b3, #800020); 
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: bold;
        box-shadow: 0 4px 12px rgba(255, 133, 179, 0.5);
        transition: background 0.3s ease;
        color: white;
    }
    .btn-primary:hover {
        background: #800020; 
        color: white;
    }
</style>

<h2 class="mb-4">Daftar Produk</h2>

<div class="mb-3">
    <a href="{{ route('admin.produk.create') }}" class="btn btn-primary">
        + Tambah Produk
    </a>
</div>

<div class="produk-container">
    <table class="table table-hover table-bordered produk-table align-middle">
        <thead>
            <tr class="text-center">
                <th style="width: 50px">No</th>
                <th style="width: 100px">Gambar</th>
                <th>Nama Produk</th>
                <th style="width: 150px">Harga</th>
                <th style="width: 100px">Stok</th>
                <th style="width: 180px">Toko</th>
            </tr>
        </thead>

        <tbody class="text-center">
            @foreach($produk as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if($p->gambars && $p->gambars->isNotEmpty())
                            @foreach($p->gambars as $gambar)
                                <img 
                                    src="{{ asset('storage/produk/' . $gambar->nama_gambar) }}" 
                                    class="produk-img" 
                                    alt="Gambar Produk {{ $p->nama_produk }}"
                                >
                            @endforeach
                        @else
                            <img src="https://via.placeholder.com/70" class="produk-img" alt="Placeholder">
                        @endif
                    </td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>{{ $p->toko->nama_toko ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
