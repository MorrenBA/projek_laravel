<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController1 extends Controller
{
    public function index()
    {
        // Mengambil semua data siswa
        $siswa = Siswa::all();

        // Mengirim data ke view
        return view('siswa.index', ['siswa' => $siswa]);
    }
}