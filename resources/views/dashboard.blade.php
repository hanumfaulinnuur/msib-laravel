@extends('component.layout')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-7">
            <h1 class="display-1">Hello, </h1>
            <h1 class="display-3"><b>Saya {{ $nama }}</b></h1>
            <p class="lead">{{ $deskripsi }}</p>
            <a class="btn btn-primary" href="{{ url('/Profil') }}" role="button">Lihat Profil <i class="bi bi-arrow-right-circle-fill"></i></a>
        </div>
        <div class="col-5">
            <img src="{{ ('../asset/dashboard.png') }}" class="img-thumbnail">
        </div>
    </div>
</div>
@endsection
    
