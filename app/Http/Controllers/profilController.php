<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index()
    {
        $biodata = [
            'nis' => '12345',
            'nama' => 'Abiyasa Fadli Akbar',
            'tempat_lahir' => 'Tegal',
            'tanggal_lahir' => '24 Februari 2005',
            'hobi' => 'Pencak Silat'
        ];

        return view('profil', compact('biodata'));
    }
}
