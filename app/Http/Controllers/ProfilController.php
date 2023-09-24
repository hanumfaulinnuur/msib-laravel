<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $namaLengkap        = 'Hanum Faulinnuur';
        $asal               = 'Banyuwangi, Jawa Timur';
        $namaPanggil        = 'Hanum';
        $perguruanTinggi    = 'Politeknik Negeri Banyuwangi';
        $jurusan            = 'Bisnis dan Informatika';
        $prodi              = 'Teknologi Rekayasa Perangkat Lunak';
        $semester           = '5 (lima)';
        $hobi               = 'mengambar asal';

        $data['namaLengkap'] = $namaLengkap;
        $data['asal']        = $asal;
        $data['namaPanggil'] = $namaPanggil;
        $data['perguruanTinggi'] = $perguruanTinggi;
        $data['jurusan'] = $jurusan;
        $data['prodi'] = $prodi;
        $data['semester'] = $semester;
        $data['hobi'] = $hobi;

        return view('profil/biodata', $data);
    }


    public function info() {

        $namaKampus    = 'Politeknik Negeri Banyuwangi';
        $detail        = 'Politeknik Negeri Banyuwangi atau disingkat Poliwangi adalah sebuah perguruan 
                        tinggi negeri politeknik yang terletak di Labanasem, Banyuwangi, Jawa Timur, Indonesia.';
        $alamat        = 'Jalan Raya Jember No.KM13, Kawang, Labanasem, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461';
        $berdiri       = '22 Februari 2013';
        $telepon       = '(0333) 636780';

        $kampus['namaKampus'] = $namaKampus;
        $kampus['detail']     = $detail;
        $kampus['alamat']     = $alamat;
        $kampus['berdiri']    = $berdiri;
        $kampus['telepon']    = $telepon;
        return view('profil/kampus', $kampus);
    }
}
