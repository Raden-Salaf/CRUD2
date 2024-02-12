<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = [
            'email' => 'radensalaf@example.com',
            'ig' => 'Raden_Salaf',
            'twitter' => '#',
            'fb' => 'Raden Salafy',
            'no_telp' => '087821694293'
        ];

        return view('kontak', compact('kontak'));
    }
}
