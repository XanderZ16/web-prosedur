@extends('layout.base')

@section('content')
    <link rel="stylesheet" href="/css/procedure.css">

    <div class="wrapper">
        <article class="content">
            <h1 class="title">Cara Membuat Akun TIKTOK</h1>
            <p class="orientation">
                TikTok adalah salah satu aplikasi media sosial dan platform video musik yang populer di kalangan
                masyarakat. Aplikasi ini memungkinkan pengguna untuk membuat, mengedit, dan membagikan video
                pendeknya yang disertai dengan filter dan musik pengiringnya.

                Berbagai konten video bisa ditemukan dengan mudah di aplikasi ini, ada konten yang bersifat
                hiburan, informasi, hingga yang bersifat edukatif juga ada. Sejak dirilis tahun 2016, aplikasi
                TikTok mengalami perkembangan yang sangat pesat dalam hal fitur dan performa.
                <br>
                <span>
                    Berikut adalah langkah-langkah tentang cara untuk membuat akun tiktok Anda.
                </span>
            </p>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Buka Tiktok</h2>
                    <div class="step-info">
                        <p>
                            Yang pertama pastinya kita harus Download aplikasi atau lewat web, dan ada pilihan <i>Sign
                                Up/Login</i>, karena kita akan membuat akun kita pilih yang register.
                        </p>
                        <img src="/procedures-img/tiktok/1.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Sign Up</h2>
                    <div class="step-info">
                        <p>
                            Setelah kita masuk ke Sign Up kita di beri pilihan login menggunakan apa yang kita mau, di sini
                            saya pilih melalui Email, Dan kita diminta mengisi data diri seperti tanggal lahir, Email, dan
                            password email kita dan kita akan dikirimkan kode verifikasi dari gmail jika sudah kita akan di
                            suruh membuat Username TIKTOK kita.
                        </p>
                        <img src="/procedures-img/tiktok/2.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Selesai</h2>
                    <div class="step-info">
                        <p>
                            Akhirnya akun tiktok sudah selesai dibuat, dan Anda sudah bisa memulai untuk berinteraksi dengan
                            pengguna lainnya.
                        </p>
                        <img src="/procedures-img/tiktok/3.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>

            <h2>Video Tutorial</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/KqGw8S0w9So?si=RaxB9bB6-aw365Oa"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </article>

        @include('layout.sidebar')
    </div>

    <script src="/js/procedure.js"></script>
@endsection
