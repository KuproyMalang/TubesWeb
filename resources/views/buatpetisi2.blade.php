@extends('layout.guest')
<title>Buat Petisi2</title>


@section('content')
<link rel="stylesheet" href="css/buatpetisi.css">
<style>
    .footer-bottom{
        position: fixed;
    }
</style>

<div class="back">
        <div class="container mb-4">
            <h2><label for="exampleFormControlInput2" class="form-label">Judul Petisi</label></h1>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Apa yang ingin anda raih?">
        </div>
        <div class="container mb-4">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsikan yang ingin anda katakan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
        </div>
        <div class="container mb-4">
            <label for="">Upload Foto</label>
            <input type="file" class="form-control-file">
        </div>
        <div class="container mb-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
@endsection
