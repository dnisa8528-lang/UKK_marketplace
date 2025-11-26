@extends('admin.template')

@section('title', 'Data Toko')

@section('content')

<style>
    .header-custom {
        background: #800020; /* marun gelap */
        padding: 20px;
        border-radius: 10px;
        color: #fff0f6; /* pink sangat muda */
        margin-bottom: 25px;
        text-align: center;
        box-shadow: 0 3px 6px rgba(128, 0, 32, 0.3);
    }

    .table-container {
        background: #fff0f6; /* pink sangat muda */
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(128, 0, 32, 0.1);
        border-left: 10px solid #800020; /* marun gelap */
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
    }

    thead {
        background: #800020; /* marun gelap */
        color: #ffe6f0; /* pink sangat muda */
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #c94a6e; 
        text-align: left;
    }

    tbody tr:hover {
        background: #ffc7d9; 
        transition: 0.2s;
    }

    .btn-add {
        background: linear-gradient(135deg, #ff85b3, #800020); 
        border: none;
        padding: 10px 20px;
        color: white;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        margin-bottom: 15px;
        display: inline-block;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(255, 133, 179, 0.5);
        transition: background 0.3s ease;
    }

    .btn-add:hover {
        background: #800020; 
        color: white;
    }

    .btn-edit {
        background: #800020; 
        color: #fff0f6; 
        padding: 6px 12px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-edit:hover {
        background: #c94a6e; 
    }

    .btn-delete {
        background: #d93030;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-delete:hover {
        background: #b82a2a;
    }
</style>

<div class="header-custom">
    <h1>Data Toko</h1>
</div>

<div class="table-container">

    <a href="{{ route('admin.toko.create') }}" class="btn-add">+ Tambah Toko</a>

    <table>
        <thead>
            <tr>
                <th>ID Toko</th>
                <th>Nama Toko</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kontak</th>
                <th>Alamat</th>
                <th>Nama Member</th>
            </tr>
        </thead>

        <tbody>
            @foreach($tokos as $toko)
            <tr>
                <td>{{ $toko->id ?? '-' }}</td>
                <td>{{ $toko->name ?? $toko->nama_toko ?? '-' }}</td>
                <td>{{ $toko->deskripsi ?? '-' }}</td>
                <td>{{ $toko->gambar ?? '-' }}</td>
                <td>{{ $toko->phone ?? $toko->kontak_toko ?? '-' }}</td>
                <td>{{ $toko->address ?? $toko->alamat ?? '-' }}</td>
                <td>{{ optional($toko->user)->nama ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection
