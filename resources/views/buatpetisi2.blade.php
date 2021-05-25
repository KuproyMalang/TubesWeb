@extends('layout.guest')
<title>Buat Petisi</title>


@section('content')
<div class="container mb-4">
<form action="">
    <h2><label for="exampleFormControlInput2" class="form-label">Judul Petisi</label></h1>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apa yang ingin anda raih?">
  </div>
  <div class="container mb-4">
    <label for="exampleFormControlTextarea1" class="form-label">Deskripsikan yang ingin anda katakan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
  </div>
  <div class="container mb-4">
    <label for="formFile" class="form-label">Upload foto yang ingin anda buktikan</label>
    <input class="form-control" type="file" id="formFile">
  </div>
  <div class="container mb-4">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection
