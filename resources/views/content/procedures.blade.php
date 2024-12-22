@extends('layout.base')

@section('content')

<link rel="stylesheet" href="css/procedures.css">

<div class="title">
    <h1>Procedure List</h1>
</div>
<section class="procedure-box">
    <div class="procedure">
        <img src="procedures-img/instagram/thumbnail.png" alt="">
        <div class="info">
            <p class="title">Cara Membuat Akun Instagram</p>
            <a href="/procedure/1">Read More...</a>
        </div>
    </div>
    <div class="procedure">
        <img src="procedures-img/facebook/thumbnail.jpg" alt="">
        <div class="info">
            <p class="title">Cara Membuat Akun Facebook</p>
            <a href="/procedure/2">Read More...</a>
        </div>
    </div>
    <div class="procedure">
        <img src="procedures-img/tiktok/thumbnail.jpg" alt="">
        <div class="info">
            <p class="title">Cara Membuat Akun Tiktok</p>
            <a href="/procedure/3">Read More...</a>
        </div>
    </div>
    <div class="procedure">
        <img src="procedures-img/twitter/thumbnail.webp" alt="">
        <div class="info">
            <p class="title">Cara Membuat Akun Twitter</p>
            <a href="/procedure/4">Read More...</a>
        </div>
    </div>
    <div class="procedure">
        <img src="procedures-img/discord/thumbnail.jpeg" alt="">
        <div class="info">
            <p class="title">Cara Membuat Akun Discord</p>
            <a href="/procedure/5">Read More...</a>
        </div>
    </div>
</section>

@endsection