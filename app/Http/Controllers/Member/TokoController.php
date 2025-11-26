<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function memberIndex()
    {
        $tokos = Toko::where('id_user', auth()->id())->get();
        return view('member.toko.index', compact('tokos'));
    }

    public function memberCreate()
    {
        return view('member.toko.create');
    }

    public function memberStore(Request $request)
    {
        $request->validate([
            'nama_toko' => 'required',
            'alamat' => 'required',
        ]);

        Toko::create([
            'id_user' => auth()->id(),
            'nama_toko' => $request->nama_toko,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('member.toko.index')->with('success', 'Toko berhasil dibuat');
    }
}
