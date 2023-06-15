<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::get();
        return view('mahasiswa/index', ['mahasiswa' => $mahasiswa]);
    }
}
