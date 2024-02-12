<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapelController extends Controller
{
    public function index()
    {
        $mapel = "Matematika";
        $pamong = ["Nyi Dwita", "Ki Angga", "Ki Sunarto", "Ki Fattahillah"];
        return view("mapel", ['mapel' => $mapel, 'pamong' => $pamong]);
    }
}
