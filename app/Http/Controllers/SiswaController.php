<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller 
{
    public function index()
    {
        // DATA SISWA
        $siswa = [
            [
                'nama' => 'Prabowo',
                'kelas' => 'XI RPL 1',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama' => 'Cinta',
                'kelas' => 'XI RPL 2',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama' => 'Jokowi',
                'kelas' => 'XI RPL 3',
                'jurusan' => 'Rekayasa Perangkat Lunak'
            ]
        ];
        //mengirim data ke view
 return view('siswa.index', ['siswa' => $siswa]);    }
}