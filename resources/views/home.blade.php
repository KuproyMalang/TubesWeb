@extends('layout.guest')
<title>Home</title>
<link rel="stylesheet" href="css/home.css">

@section('content')

    {{-- biarin aja --}}
    {{-- <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Selamat Datang Di Petisi Kita</h1>
            <p class="lead">Tempat dimana kita bersama sama untuk menyuarakan petisi kita</p>
            <hr class="my-4">
            <p class="">Jika ingin membuat petisi silahkan klik dibawah ini</p>
            <p class="lead">
            <a class="btn btn-success btn-lg" href="/buatpetisi" role="button">Buat Petisi</a>
            </p>
        </div>
    </div> --}}


  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/satu.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4 font-weight-bold">Selamat Datang Di Petisi Kita</h1>
        <p class="lead">Tempat dimana kita bersama sama untuk menyuarakan petisi kita</p>
        <hr class="my-4">
        <p class="">Jika ingin membuat petisi silahkan klik dibawah ini</p>
        <p class="lead">
        <a class="btn btn-success btn-lg" href="/buatpetisi" role="button">Buat Petisi</a>
        </p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="image/dua.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4 font-weight-bold">Selamat Datang Di Petisi Kita</h1>
            <p class="lead">Tempat dimana kita bersama sama untuk menyuarakan petisi kita</p>
            <hr class="my-4">
            <p class="">Jika ingin membuat petisi silahkan klik dibawah ini</p>
            <p class="lead">
            <a class="btn btn-success btn-lg" href="/buatpetisi" role="button">Buat Petisi</a>
            </p>
            </div>
      </div>

      <div class="carousel-item">
        <img src="image/tiga.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h1 class="display-4 font-weight-bold">Selamat Datang Di Petisi Kita</h1>
            <p class="lead">Tempat dimana kita bersama sama untuk menyuarakan petisi kita</p>
            <hr class="my-4">
            <p class="">Jika ingin membuat petisi silahkan klik dibawah ini</p>
            <p class="lead">
            <a class="btn btn-success btn-lg" href="/buatpetisi" role="button">Buat Petisi</a>
            </p>
            </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>





@endsection

