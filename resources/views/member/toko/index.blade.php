@extends('member.template')

@section('content')

<h2>Toko Saya</h2>

<a href="{{ route('member.toko.create') }}" class="btn btn-primary mb-3">+ Tambah Toko</a>

<table class="table table-bordered">
    <tr>
        <th>Nama Toko</th>
        <th>Alamat</th>
    </tr>

    @foreach($tokos as $t)
        <tr>
            <td>{{ $t->nama_toko }}</td>
            <td>{{ $t->alamat }}</td>
        </tr>
    @endforeach
</table>

@endsection
