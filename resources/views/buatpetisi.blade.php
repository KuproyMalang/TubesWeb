@extends('layout.guest')
<title>Buat Petisi</title>



@section('content')

<div class="container" style="text-align: center">
    <h1 style="color: red"><b>Membuat Petisi</b></h1>
</div>
<br>
<br>
<div class="container" style="text-align: center">
    <h3 style="color:gray">Hal hal yang harus anda inginkan ketika membuat petisi</h3>
</div>
<br>
<div class="container" style="text-align:left">
    <h4>Isu apa yang ada ingin buat?</h4>
    <h4>Mengapa anda membuat petisi tersebut?</h4>
    <h4>Kemanakah Tujuan anda membuat?</h4>
    <h4>Apakah anda akan bertanggung jawab dengan petisi ini?</h4>
    <h4>Jika siap, silahkan klik tombol di bawah ini</h4>
</div>
<br>
<div style="text-align: center">
    <a href="/buatpetisi2" type="button" class="btn btn-success"> Mari Buat Petisi</a>
</div>







@endsection
