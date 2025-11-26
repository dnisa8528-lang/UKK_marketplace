<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Toko;

class ProdukController extends Controller
{
    public function memberIndex()
    {
        $produk = Produk::where('id_user', auth()->id())->get();
        return view('member.produk.index', compact('produk'));
    }

    public function memberCreate()
    {
        // Ambil toko user untuk pilihan
        $tokos = Toko::where('id_user', auth()->id())->get();

        return view('member.produk.create', compact('tokos'));
    }

    public function memberStore(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_toko' => 'required',
        ]);

        Produk::create([
            'id_user' => auth()->id(),
            'id_toko' => $request->id_toko,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('member.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }
}
