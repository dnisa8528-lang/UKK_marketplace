<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function memberIndex()
    {
        $produks = [
            ['nama' => 'Nasi Goreng Spesial', 'harga' => 20000],
            ['nama' => 'Kopi Susu', 'harga' => 15000],
            ['nama' => 'Mie Ayam', 'harga' => 18000],
        ];

        return view('member.produk.index', compact('produks'));
    }

    public function memberCreate()
    {
        return view('member.produk.create');
    }

    public function memberStore(Request $request)
    {
        return redirect()->route('member.produk.index');
    }

    public function memberEdit($id)
    {
        $produk = ['id' => $id, 'nama' => 'Nasi Goreng', 'harga' => 20000];
        return view('member.produk.edit', compact('produk'));
    }

    public function memberUpdate(Request $request, $id)
    {
        return redirect()->route('member.produk.index');
    }

    public function memberDestroy($id)
    {
        return redirect()->route('member.produk.index');
    }
}
