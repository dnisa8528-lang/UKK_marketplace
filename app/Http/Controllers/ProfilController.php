<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('member.profil.index');
    }

    public function edit()
    {
        return view('member.profil.edit');
    }
}
