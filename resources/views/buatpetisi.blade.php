@extends('layout.guest')
<title>Buat Petisi</title>



@section('content')
<link rel="stylesheet" href="css/buatpetisi.css">

<div class="jumbotron">
    <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Membuat Petisi</h1>
    <hr class="my-4">
    <h3 class="font-weight-bold">Hal hal yang harus anda perhatikan ketika membuat</h3>
    <div style="width: 100%;display:inline-block;" class="text-center">
        <div class="card font-weight-bold text-center" style="width:50%; margin:30px auto;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Isu apa yang anda inginkan?</li>
              <li class="list-group-item">Mengapa anda membuat petisi tersebut?</li>
              <li class="list-group-item">Kemanakah Tujuan anda membuat?</li>
              <li class="list-group-item">Apakah anda akan bertanggung jawab dengan petisi ini?</li>
              <li class="list-group-item">Jika siap, silahkan klik tombol di bawah ini</li>
            </ul>
          </div>
    </div>
        <p class="lead">
        <a class="btn btn-success btn-lg" href="/buatpetisi2" role="button">Buat Petisi</a>
      </p>

    </div>
  </div>





@endsection
