@extends('component.layout')
@section('title', 'Profil-Kampus')
@section('content')
<div class="container shadow-sm p-3 mb-5 bg-body rounded">
    <div class="row">
        <div class="col-6">
            <div class="card" style="width: 30rem;">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ ('../asset/kampus1.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ ('../asset/kampus2.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{ ('../asset/kampus3.jpg') }}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
                <div class="card-body">
                  <a href="{{ 'https://poliwangi.ac.id/' }}" class="btn btn-primary">Kunjungi Website</a>
                </div>
              </div>
        </div>

        <div class="col-6">
            <h1 class="fw-bold">{{ $namaKampus }}</h1><hr>
            <p class="fs-4 fw-light">{{ $detail }}</p><br>
            <p class="fs-5"><b>alamat : </b>{{ $alamat }}</p>
            <p class="fs-5"><b>Berdiri : </b>{{ $berdiri }}</p>
            <p class="fs-5"><b>Telepon : </b>{{ $telepon }}</p>
        </div>
    </div>
</div>
@endsection