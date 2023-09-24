<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DahboardController extends Controller
{
    public function home()  {
        $nama               = 'Hanum Faulinnuur';
        $deskripsi          = 'Saya Mahasiswa semester lima, Program Studi Teknologi Rekayasa Perangkat Lunak,
                                Saya dari kabupaten ujung timur pulau Jawa.';

        $data['nama']       = $nama;
        $data['deskripsi']  = $deskripsi;
        return view('dashboard', $data);
    }
}
