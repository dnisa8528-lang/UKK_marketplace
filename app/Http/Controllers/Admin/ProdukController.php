<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
   public function adminIndex()
{
    $produk = Produk::all();
    return view('admin.produk.index', compact('produk'));
}

    public function adminCreate()
    {
        return view('admin.produk.create');
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function adminEdit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function adminUpdate(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate!');
    }

    public function adminDestroy($id)
    {
        Produk::findOrFail($id)->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus!');
    }




    public function memberIndex()
    {
        $produk = Produk::all();
        return view('member.produk.index', compact('produk'));
    }

    public function memberCreate()
    {
        return view('member.produk.create');
    }

    public function memberStore(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());
        return redirect()->route('member.produk.index')->with('success','Produk berhasil ditambahkan!');
    }

    public function memberEdit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('member.produk.edit', compact('produk'));
    }

    public function memberUpdate(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($request->all());
        return redirect()->route('member.produk.index')->with('success','Produk berhasil diupdate!');
    }

    public function memberDestroy($id)
    {
        Produk::findOrFail($id)->delete();
        return redirect()->route('member.produk.index')->with('success','Produk berhasil dihapus!');
    }
}
