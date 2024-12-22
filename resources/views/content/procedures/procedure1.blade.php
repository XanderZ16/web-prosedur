@extends('layout.base')

@section('content')
    <link rel="stylesheet" href="/css/procedure.css">

    <div class="wrapper">
        <article class="content">
            <h1 class="title">Cara Membuat Akun Instagram</h1>
            <p class="orientation">
                Instagram adalah platform media sosial yang sangat populer, yang fokus pada berbagi foto dan video.
                Instagram memungkinkan pengguna untuk mengunggah konten visual mereka, memberikan sentuhan
                pribadi melalui filter dan efek kreatif, serta berinteraksi dengan pengguna lain. Dengan kemampuannya untuk
                menciptakan komunitas online yang dinamis, Instagram telah menjadi
                tempat bagi individu, selebriti, dan merek untuk membangun dan membagikan identitas mereka, gaya hidup, dan
                cerita melalui gambar dan video yang menarik, menciptakan ikatan yang erat antara pengguna di seluruh dunia.
                <br>
                <span>
                    Berikut adalah langkah-langkah tentang cara untuk membuat akun instagram Anda.
                </span>
            </p>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Unduh Aplikasi Instagram</h2>
                    <div class="step-info">
                        <p>
                            Pertama, unduh dan instal aplikasi Instagram dari toko aplikasi yang sesuai dengan perangkat
                            Anda,
                            seperti App Store untuk pengguna iOS atau Google Play Store untuk pengguna Android.
                        </p>
                        <img id="popuped" src="/procedures-img/instagram/1.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Buka Aplikasi Instagram</h2>
                    <div class="step-info">
                        <p>
                            Selanjutnya, buka aplikasi Instagram setelah selesai diunduh dan diinstal pada perangkat Anda.
                            Lalu Pilih Opsi Daftar
                        </p>
                        <img src="/procedures-img/instagram/2.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title"> Isi Informasi Akun Anda</h2>
                    <div class="step-info">
                        <p>
                            Alamat Email atau Nomor Ponsel: Masukkan alamat email atau nomor ponsel yang ingin Anda gunakan
                            untuk akun Instagram Anda.
                            <br>
                            Nama Pengguna: Pilih nama pengguna yang unik dan belum digunakan oleh pengguna lain.
                            <br>
                            Setelah mengisi informasi akun, pilih opsi "Lanjutkan" atau "Selanjutnya" untuk melanjutkan ke
                            langkah berikutnya.
                        </p>
                        <img src="/procedures-img/instagram/3.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Lengkapi Profil Anda</h2>
                    <div class="step-info">
                        <p>
                            Setelah itu Anda bisa melengkapi profil Anda dengan menambahkan foto profil Anda dan juga info
                            umum tentang Anda. Info ini bersifat opsional, Anda bisa memilih untuk tidak menambahkannya.
                        </p>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="progres">
                    <b class="dot">⚫</b>
                    <div class="line"></div>
                </div>
                <div class="step-content">
                    <h2 class="step-title">Ikuti Akun Yang Disarankan</h2>
                    <div class="step-info">
                        <p>
                            Pilih Akun yang disarankan untuk Anda ikuti, Anda juga bisa melewati untuk tidak memilih
                            mengikuti akun yang disarankan
                        </p>
                        <img src="/procedures-img/instagram/4.jpg" alt="Instagram App">
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
                            Sekarang, akun Instagram Anda telah berhasil dibuat. Anda dapat mulai mengunggah foto, mengikuti
                            akun, dan menjelajahi konten di Instagram.
                            <br>
                            Pastikan untuk selalu mematuhi kebijakan privasi dan aturan penggunaan Instagram saat
                            menggunakan platform ini. Selamat menggunakan akun Instagram Anda!
                        </p>
                        <img src="/procedures-img/instagram/5.jpg" alt="Instagram App">
                    </div>
                </div>
            </div>

            <h2>Video Tutorial</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/GXH1h6e8Uv8?si=2dY35TLx-gQHkUcy"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </article>

        @include('layout.sidebar')
    </div>

    <script src="/js/procedure.js"></script>
@endsection
