@extends('layout.guest')
<title>Home</title>


@section('content')

<style>

</style>

<div id="carouselExampleCaptions" class="container carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/tiga.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>Petisi Kita</h5>
          <p>Ayo bersama sama membela kebenaran</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/satu.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>Petisi Kita</h5>
          <p>Ayo bersama sama membela kebenaran</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="image/dua.jpg" class="d-block w-100" alt="gambar">
        <div class="carousel-caption d-none d-md-block">
          <h5>Petisi Kita</h5>
          <p>Ayo bersama sama membela kebenaran</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div style="text-align: center">
    <h1 style="color:grey" >Selamat Datang di Petisi Kita</h1>
</div>
<br>
<div style="text-align: center">
    <a href="/buatpetisi" type="button" class="btn btn-success">Buat Petisi</a>
</div>
<br>







@endsection
