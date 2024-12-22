<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="og:title" content="Web Of Procedures Text">
    <meta name="og:description" content="This Web is a platform to find so many tutorial, complete with step by step">

    <!-- Link to CSS -->
    <link rel="stylesheet" href="/css/base.css">
    <link rel="stylesheet" href="/css/keyframes.css">

    <!-- Link to JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Link to Font Awasome -->
    <script src="https://kit.fontawesome.com/ef4cce5f3f.js" crossorigin="anonymous"></script>

    <title>Kelompok 3</title>
</head>

<body>
    <header>
        <nav class="navbar @if ($current == 'home') navbar-top @endif" id="nav">
            <div class="navbar-container">
                <h1 onclick="window.location.href='/'">Kelompok 3</h1>
                <ul class="navigation" role="list">
                    <li aria-current="page"><a class="@if ($current == 'home') highlight @endif" href="/">Home</a></li>
                    <li><a class="@if ($current == 'procedures') highlight @endif" href="/procedures">Procedure</a></li>
                    <li><a class="@if ($current == 'about') highlight @endif" href="/about">About</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container" id="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="footer-left">
            <div class="title">
                <h3 class="title-text">Teks<span>Prosedur</span></h3>
                <img src="/logo/skaju.png" alt="logo" class="title-img">
            </div>
            <p class="footer-links">
                <a href="#" class="link-1">Home</a>
                <a href="#">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Faq</a>
                <a href="#">Contact</a>
            </p>
            <p class="footer-group-name">Gruop III © 2023</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <a href="https://maps.app.goo.gl/ajBfvTES3TxB6Myp6" target="_blank"><span>SMKN 7, Jalan Belian</span> Kota Batam, Kepulauan Riau</a>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <a>+62 890-1324-5768</a>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <a href="mailto:support@group.com" class="footer-email">support@group.com</a>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-group-about">
                <span>About the group</span>
                Kami dari grup 3 membuat sebuah teks prosedur berbasis web yang dibangun dengan HTML, CSS, dan JS. Website Ini adalah projek ujian akhir semester untuk melatih dan menguji keterampilan kami.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>