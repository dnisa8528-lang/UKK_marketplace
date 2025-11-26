@extends('admin.template')

@section('title', 'Data User')

@section('content')
<div style="
    padding:20px; 
    background:#fff0f6; /* pink sangat muda */
    border-radius:10px; 
    box-shadow:0 3px 6px rgba(128,0,32,0.12); /* bayangan marun lembut */
    border-left: 8px solid #800020; /* garis samping marun gelap */
">
    <h2 style="color:#800020; margin-bottom: 15px;">Daftar User</h2>

    <a href="{{ route('admin.user.create') }}" 
       style="
        background: linear-gradient(135deg, #c94a6e, #800020);
        color:white;
        padding:8px 16px;
        border-radius:6px;
        text-decoration:none;
        font-weight:600;
        display: inline-block;
        margin-bottom: 15px;
        ">
        + Tambah User
    </a>
    
    <table border="1" cellpadding="10" cellspacing="0" 
        style="
            margin-top:15px;
            width:100%;
            border-collapse:collapse;
            border-color: #c94a6e;
        ">
        <thead>
            <tr style="background:#800020; color:#fff;">
                <th>ID</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr style="border-bottom: 1px solid #ffc7e3;">
                <td>{{ $user->id }}</td>
                <td style="color:#800020; font-weight:600;">{{ $user->name }}</td>
                <td style="color:#c94a6e;">{{ $user->username }}</td>
                <td>
                    <a href="{{ route('admin.user.edit', $user->id) }}" 
                       style="color:#c94a6e; font-weight:600; margin-right: 10px;">
                       Edit
                    </a>
                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                onclick="return confirm('Yakin hapus?')" 
                                style="
                                    background:none; 
                                    border:none; 
                                    color:#800020; 
                                    cursor:pointer; 
                                    font-weight:600;
                                    padding:0;
                                ">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align:center; color:#800020;">Tidak ada data user</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
