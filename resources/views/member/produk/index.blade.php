@extends('member.template')

@section('content')

<h2>Produk Saya</h2>

<a href="{{ route('member.produk.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

<table class="table table-bordered">
    <tr>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Stok</th>
    </tr>

    @foreach($produk as $p)
        <tr>
            <td>{{ $p->nama_produk }}</td>
            <td>{{ number_format($p->harga) }}</td>
            <td>{{ $p->stok }}</td>
        </tr>
    @endforeach
</table>

@endsection
