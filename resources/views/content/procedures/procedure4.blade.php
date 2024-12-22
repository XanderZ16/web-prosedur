@extends('layout.base')

@section('content')
    <link rel="stylesheet" href="/css/procedure.css">

    <div class="wrapper">
        <article class="content">
            <h1 class="title">Cara Membuat Akun Twitter</h1>
            <p class="orientation">
                Twitter merupakan layanan jejaring sosial dan mikroblogging dengan fasilitas mengirim teks
                info pada akun pengguna dengan panjang maksimum 140 karakter melalui SMS, pesan instan atau surat
                elektronik.

                Twitter,yang berganti nama menjadi X sejak juli 2023 yang dioperasikan oleh perusahaan
                Amerika Serikat, X corp, penerus Twitter,inc. Di Twitter, pengguna terdaftar dapat memposting
                teks, gambar, dan video. Pengguna juga dapat memposting (tweet), suka(like), posting ulang (retweet),
                memberi komentar dan mengutip posting(quote posts), hingga mengirim pesan langsung(DM) ke pengguna
                terdaftar lainnya.
                <br>
                <span>
                    Berikut adalah langkah-langkah tentang cara untuk membuat akun twitter Anda.
                </span>
            </p>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Buka Twitter</h2>
                    <div class="step-info">
                        <p>
                            Yang pertama pastinya kita harus Download aplikasi atau lewat web, dan ada pilihan <i>Sign
                                Up/Login</i>, karena kita akan membuat akun kita pilih yang buat akun.
                        </p>
                        <img src="/procedures-img/twitter/1.jpg" alt="Twitter App">
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
                            Setelah kita masuk ke Sign Up kita akan mengisi data diri kita seperti Nama, Email, dan Tanggal
                            lahir.
                        </p>
                        <img src="/procedures-img/twitter/2.jpg" alt="Twitter App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Mengauntentikasi Akun</h2>
                    <div class="step-info">
                        <p>
                            Setelah melewati sign up, kita akan mengauntentikasi akun untuk memastikan bahwa kita adalah
                            orang sungguhan dan bukan bot.
                        </p>
                        <img src="/procedures-img/twitter/3.jpg" alt="Twitter App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Masukkan Kode</h2>
                    <div class="step-info">
                        <p>
                            Setelah mengauntentkasi akun, kita akan menunggu kode yang dikirim melalui Email.
                            Jika sudah terkirim masukkan kode tersebut.
                        </p>
                        <img src="/procedures-img/twitter/4.jpg" alt="Twitter App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Foto Profil</h2>
                    <div class="step-info">
                        <p>
                            Pilih foto yang menurut kalian bagus untuk diunggah atau bisa di lewati jika tidak ingin
                            diunggah.
                        </p>
                        <img src="/procedures-img/twitter/5.jpg" alt="Twitter App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Buat Nama Panggilan Anda</h2>
                    <div class="step-info">
                        <p>
                            Langkah terkahir adalah Anda bisa membuat nama pengguna unik Anda, yang nanti digunakan sebagai
                            nama bagaimana orang lain memanggil Anda di Twitter.
                        </p>
                        <img src="/procedures-img/twitter/6.jpg" alt="Twitter App">
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
                            Akhirnya akun Twitter sudah selesai dibuat, Anda bisa meimilih username dengan sesuka hati dan
                            Anda sudah bisa memulai untuk berinteraksi dengan
                            pengguna lainnya.
                        </p>
                        <img src="/procedures-img/twitter/7.jpg" alt="Twitter App">
                    </div>
                </div>
            </div>

            <h2>Video Tutorial</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/X0-l6GVnMM0?si=degi0AYH9PF7bE1v"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </article>

        @include('layout.sidebar')
    </div>

    <script src="/js/procedure.js"></script>
@endsection
