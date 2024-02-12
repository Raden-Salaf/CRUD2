<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PamongController extends Controller
{
    public function index()
    {
        $nama = "Diki Alfarabi Hadi";
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
        return view('daftarpamong', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}