{{-- petisi untuk belum daftar akun --}}

@extends('layout.guest')
<title>Petisi Saya</title>

@section('content')
<link rel="stylesheet" href="css/buatpetisi.css">
<style>
    .footer-bottom{
        position: fixed;
    }
    .container{
        margin-top: 200px;
    }
</style>
<div class="container text-center">
    <h3 class="asd">Anda belum daftar akun</h3>
    <p>Silahkan terlebih dahulu daftar akun</p>
    <a class="btn btn-success btn-small mb-4" href="/buatakun" role="button">Buat akun</a>
</div>
@endsection
