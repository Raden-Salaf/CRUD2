<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = "XII RPL";
        $namasiswa = ["Abiyasa", "Prabu", "Umar", "Ruhi", "Rian", "Aufa"];
        return view("kelas", ['namakelas' => $kelas, 'namasiswa' => $namasiswa]);
    }
}
