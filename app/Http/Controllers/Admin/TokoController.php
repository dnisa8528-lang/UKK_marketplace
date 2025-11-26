<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    // =======================
    // ADMIN
    // =======================

    public function index()
    {
        $tokos = Toko::all();
        return view('admin.toko.index', compact('tokos'));
    }

    public function create()
    {
        return view('admin.toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_toko'   => 'required|string|max:255',
            'owner_name'  => 'required|string|max:255',
            'alamat'      => 'nullable|string',
            'telp'        => 'nullable|string',
        ]);

        Toko::create([
            'id_user'    => null,  // karena admin yang buat, bukan member
            'name'       => $request->nama_toko,
            'owner_name' => $request->owner_name,
            'address'    => $request->alamat,
            'phone'      => $request->telp,
        ]);

        return redirect()->route('admin.toko.index')->with('success', 'Toko berhasil ditambahkan');
    }


    // =======================
    // MEMBER
    // =======================

    public function memberIndex()
    {
        $userId = auth()->id();

        // =======================
        // FIX: pakai id_user, BUKAN user_id
        // =======================
        $tokos = Toko::where('id_user', $userId)->get();

        return view('member.toko.index', compact('tokos'));
    }

    public function memberCreate()
    {
        return view('member.toko.create');
    }

    public function memberStore(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat'    => 'nullable|string',
            'telp'      => 'nullable|string',
        ]);

        Toko::create([
            'id_user' => auth()->id(),  // FIXED
            'name'    => $request->nama_toko,
            'address' => $request->alamat,
            'phone'   => $request->telp,
        ]);

        return redirect()->route('member.toko.index')->with('success', 'Toko berhasil ditambahkan');
    }

    public function memberEdit($id)
    {
        $toko = Toko::findOrFail($id);

        // FIXED: pakai id_user, bukan user_id
        if ($toko->id_user !== auth()->id()) {
            abort(403);
        }

        return view('member.toko.edit', compact('toko'));
    }

    public function memberUpdate(Request $request, $id)
    {
        $toko = Toko::findOrFail($id);

        if ($toko->id_user !== auth()->id()) {
            abort(403);
        }

        $request->validate([
            'nama_toko' => 'required|string|max:255',
            'alamat'    => 'nullable|string',
            'telp'      => 'nullable|string',
        ]);

        $toko->update([
            'name'    => $request->nama_toko,
            'address' => $request->alamat,
            'phone'   => $request->telp,
        ]);

        return redirect()->route('member.toko.index')->with('success', 'Toko berhasil diupdate');
    }
}

