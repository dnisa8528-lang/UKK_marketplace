@extends('admin.template')

@section('title', 'Kategori Produk')

@section('content')

<style>
.table-container {
    background: #fff0f6; /* pink sangat muda */
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(128, 0, 32, 0.15); /* bayangan marun lembut */
    border-left: 10px solid #800020; /* marun gelap */
    margin-top: 20px;
}

.btn-add {
    background: linear-gradient(135deg, #ff85b3, #800020); /* pink ke marun */
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
    background: #800020; /* marun gelap */
    text-decoration: none; 
    color: white; 
}

table { 
    width: 100%; 
    border-collapse: collapse; 
    margin-top: 15px; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border: 2px solid #ff85b3; /* border pink */
}

thead { 
    background: #800020; /* marun gelap */
    color: #ffe6f0; /* pink sangat muda */
    font-weight: 600;
}

th, td { 
    padding: 12px; 
    border-bottom: 1px solid #ffc7d9; /* pink lembut */
    text-align: left; 
}

tbody tr:hover { 
    background: #ffb6d1; 
    transition: 0.2s; 
}

.btn-edit { 
    background: #c94a6e; 
    color: white; 
    padding: 6px 12px; 
    border-radius: 6px; 
    border: none; 
    cursor: pointer; 
    margin-right: 5px;
    transition: background-color 0.3s ease;
}

.btn-edit:hover { 
    background: #800020; 
}

.btn-delete { 
    background: #800020; 
    color: white; 
    padding: 6px 12px; 
    border-radius: 6px; 
    border: none; 
    cursor: pointer; 
    transition: background-color 0.3s ease;
}

.btn-delete:hover { 
    background: #c94a6e; 
}
</style>

<div class="table-container">

    <a href="{{ route('admin.kategori.create') }}" class="btn-add">+ Tambah Kategori</a>

    <table>
        <thead>
            <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kategori as $kategori)
            <tr>
                <td>{{ $kategori->id_kategori }}</td>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                    <a href="{{ route('admin.kategori.edit', $kategori->id_kategori) }}">
                        <button class="btn-edit">Edit</button>
                    </a>

                    
                    <form action="{{ route('admin.kategori.destroy', $kategori->id_kategori) }}" 
                          method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete"
                                onclick="return confirm('Yakin ingin hapus kategori ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
