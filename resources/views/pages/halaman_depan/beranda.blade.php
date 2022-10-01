<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utami</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="left-nav">
            <ul>
                <li class="logo">
                    <img src="{{ asset('images/logonyamping.png') }}" alt="" width="100">
                </li>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Harga</a>
                </li>
                <li>
                    <a href="#">Tema</a>
                </li>
            </ul>
        </div>
        <div class="right-nav">
            <ul>
                <li>
                    <a href="{{ URL::to('/login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ URL::to('/register') }}" class="my-outline-button">Daftar</a>
                </li>
            </ul>
        </div>
    </nav>

    <section id="hero">
        <div class="image-ilustration">
            <img src="{{ asset('images/bottinglogo.png') }}" alt="" width="300">
        </div>
        <div class="slogan">
            <div class="slogan-content">
                <h1>Solusi </h1>
                <h1>Undangan</h1>
                <h1 class="text-main">Digital</h1>
                <p>Solusi undangan pernikahan digital<br> praktis, hemat dan modern<br> hehehe hehehe hehehe heheh.
                </p>
                <button class="my-button">Buat nanti</button>
            </div>
        </div>
    </section>

    <section id="why_choose_us" class="d-flex align-items-start">
        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Mengapa memilih botting ?</h4>
                <p class="text-center text-secondary">Yah karena mau hehehe masa jomblo terus</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-3">
                    <img src="{{ asset('images/wedding.svg') }}" alt="" width="300">
                </div>
                <div class="col-sm-9">
                    <div class="row ">
                        <div class="col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-regular fa-money-bill-1"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Harga Kompetitif</h5>
                                        <p class="small text-secondary">Buat undangan pernikahan tidak pernah semudah
                                            dan semurah ini
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-solid fa-truck-fast"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Proses cepat</h5>
                                        <p class="small text-secondary">Proses pembuatan undangan hanya memerlukan waktu
                                            5 menit </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-solid fa-clipboard-list"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Fitur lengkap</h5>
                                        <p class="small text-secondary">Fitur yang dapat diandalkan mulai dari proses
                                            pembuatan
                                            undangan hingga proses membagikan undangan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-solid fa-bell-concierge"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Support terbaik</h5>
                                        <p class="small text-secondary">Perlu bantuan ? tenang tim support Kami selalu
                                            bisa diandalkan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="d-flex align-items-start mb-5">

        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Fitur Unggulan</h4>
                <p class="text-center text-secondary">Fitur unggulan yang siap digunakan</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="row ">
                        <div class="col-sm-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-solid fa-people-group"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Nama tamu</h5>
                                        <p class="small text-secondary">Menampilkan nama tamu yang diundang agar terasa
                                            lebih dekat
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-solid fa-envelope-open-text"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Amplop digital</h5>
                                        <p class="small text-secondary">Tamu dapat memberikan amplop langsung secara
                                            digital</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-regular fa-address-book"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Buku tamu</h5>
                                        <p class="small text-secondary">Dapat menerima ucapan dan doa serta status
                                            kehadiran dari tamu undangan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-regular fa-compass"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Petunjuk Lokasi</h5>
                                        <p class="small text-secondary">Dapat menunjukkan dan mengarahkan tamu ke lokasi
                                            acara
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-brands fa-envira"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Gallery foto</h5>
                                        <p class="small text-secondary">Bagikan momen bahagia Kamu kepada tamu undangan
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-4">
                            <div class="card soft-border text-center">
                                <div class="card-body flex-column d-flex align-items-center">
                                    <div class="left mx-3 display-4 my-3">
                                        <i class="text-main-soft fa-solid fa-headphones-simple"></i>
                                    </div>
                                    <div class="right my-3">
                                        <h5 class="small">Background music</h5>
                                        <p class="small text-secondary">Hiasi undangan pernikahan online dengan musik
                                            kesukaanmu
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how_to_make" class="d-flex align-items-start">
        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Bagaimana cara membuat undangan digital ?</h4>
                <p class="text-center text-secondary">Hanya butuh beberapa langkah dan menit saja hingga undangan Kamu
                    siap digunakan</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-6">
                    <img src="{{ asset('images/step.svg') }}" alt="" width="500">
                </div>
                <div class="col-sm-6">
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-regular fa-address-card"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Registrasi</h5>
                                        <p class="small text-secondary">Buat akun baru dengan cara mengisikan email dan
                                            password atau daftar menggunakan akun Google.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-solid fa-circle-info"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Isi informasi</h5>
                                        <p class="small text-secondary">Isi informasi mengenai mempelai, lokasi dan
                                            waktu acara, pilih desain undangan dan upload foto ke galeri
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="card border-0">
                                <div class="card-body d-flex align-items-center">
                                    <div class="left mx-3 display-4">
                                        <i class="text-main-soft fa-regular fa-share-from-square"></i>
                                    </div>
                                    <div class="right">
                                        <h5 class="small">Bagikan dan pantau</h5>
                                        <p class="small text-secondary">Setelah undangan selesai dibuat, Kamu dapat
                                            langsung menyebarkan ke keluarga atau kerabat lalu pantau kehadiran serta
                                            ucapan dari tamu
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="choose_theme" class="d-flex align-items-start pb-5">
        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Pilih tema ?</h4>
                <p class="text-center text-secondary">Pilih berbagai tema menarik yang siap pakai</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/Aesthetic.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Aesthetic</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/elegant blue.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Elegeant blue</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/elegant cream.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Elegant cream</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/elegant navy gold.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Elegant navy gold</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/summer.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Summer</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('images/tema_thumnail/sweet purple.png') }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>Sweet purple</h4>
                            <i class="fa-regular fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-12 text-center">
                    <button class="my-button">Lihat desain lainnya </button>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="d-flex align-items-start pb-5">
        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Harga undangan</h4>
                <p class="text-center text-secondary">Pilih paket undangan sesuai dengan kebutuhanmu</p>
            </div>
            <div class="row mt-5">
                <div class="col-sm-4 mt-100">
                    <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4">
                        <h4 class="text-main">Gold</h4>
                        <h1 class="my-5">Rp. 49.000</h1>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Edit tanpa batas</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Amplop digital</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Hitung mundur</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">quotes</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Background musik</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Masa aktif 1 jam</p>
                        </div>
                        <button class="my-button my-3">Pilih paket</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4">
                        <h4 class="text-main">Diamond</h4>
                        <h1 class="my-5">Rp. 99.000</h1>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Edit tanpa batas</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Amplop digital</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Hitung mundur</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">quotes</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Background musik</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Masa aktif 1 jam</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Hitung mundur</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">quotes</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Background musik</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Masa aktif 1 jam</p>
                        </div>
                        <button class="my-button my-3">Pilih paket</button>
                    </div>
                </div>
                <div class="col-sm-4 mt-100">
                    <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4">
                        <h4 class="text-main">Silver</h4>
                        <h1 class="my-5">Rp. 149.000</h1>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Edit tanpa batas</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Amplop digital</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Hitung mundur</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">quotes</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Background musik</p>
                        </div>
                        <div class="pricing-item d-flex flex-row">
                            <i class="fas fa-check-circle mx-3 text-main"></i>
                            <p class="text-secondary">Masa aktif 1 jam</p>
                        </div>
                        <button class="my-button my-3">Pilih paket</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="d-flex align-items-start pb-5">
        <div class="container">
            <div class="row ">
                <h4 class="mt-5 text-center">Faq</h4>
                <p class="text-center text-secondary">Pertanyaan yang sering di ajukan</p>
            </div>
            <div class="row">
                <div class="col-sm-6 p-5">
                    <h5 class="text-main">Berapa lama proses pembuatannya ? </h4>
                    <p class="small text-secondary">Untuk pembuatan undangan pernikahan online membutuhkan waktu sekitar 10 menit untuk mengisi data dan sudah bisa langsung disebar setelahnya</p>
                </div>
                <div class="col-sm-6 p-5">
                    <h5 class="text-main">Apakah bisa custom tema ? </h4>
                    <p class="small text-secondary">Mohon maaf, untuk saat ini tema undangan tidak dapat di custom, tapi Kami akan selalu mengembangkan tema sesuai dengan masukan dari pengguna</p>
                </div>
            </div>

        </div>
    </section>

    <footer id="footer">
        <div class="row p-5">
            <div class="col-sm-12 text-center">
                <p>made with <i class="fas fa-heart text-danger"></i>  by tami</p>
                <p><i class="fas fa-copyright"></i> 2020 - 2090</p>
                <p>botting.com layanan untuk membuat undangan pernikahan secara online dengan mudah. Undangan yang dibuat akan berbentuk sebuah website yang dapat di akses dan dibagikan kapanpun.</p>
            </div>
        </div>
    </footer>

</body>

</html>
