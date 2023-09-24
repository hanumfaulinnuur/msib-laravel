@extends('component.layout')
@section('title', 'Profil')
@section('content')
<link rel="stylesheet" href="{{ ('../asset/css/style.css') }}">
<div class="container card shadow-sm p-5 mb-5 bg-body rounded">
    <h1 class="text-center">Biodata Diri</h1><hr>
    <div class="row ">
        <div class="col-5">
            <img src="{{ ('../asset/profil1.png') }}" class="img-thumbnail" width="400px">
        </div>
        <div class="col-7">
            <table style="font-size: 22px; ">
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>{{ $namaLengkap }}</td>
            </tr>
            <tr>
                <td>Nama Panggilan</td>
                <td>:</td>
                <td>{{ $namaPanggil }}</td>
            </tr>
            <tr>
                <td>Asal</td>
                <td>:</td>
                <td>{{ $asal }}</td>
            </tr>
            <tr>
                <td>Asal Perguruan Tinggi</td>
                <td>:</td>
                <td>{{ $perguruanTinggi }}</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>{{ $jurusan }}</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>{{ $prodi }}</td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>{{ $semester}}</td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>{{ $hobi }}</td>
            </tr>
        </table>
        </div>

        <div class="row mt-5">
            <h1 class="text-center">Hasil Sketsa</h1>
            <i class="text-center m-3">masih perlu banyak belajar dan mencoba</i><hr>
            <div class="col-4">
                <img src="{{ ('../asset/proyek1.png') }}" class="img-thumbnail" alt="...">
            </div>
            <div class="col-4">
                <img src="{{ ('../asset/proyek2.png') }}" class="img-thumbnail" alt="...">
            </div>
            <div class="col-4">
                <img src="{{ ('../asset/proyek3.png') }}" class="img-thumbnail" alt="...">
            </div>
        </div>
    </div>
</div>
@endsection