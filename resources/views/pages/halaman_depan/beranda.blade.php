@extends('layouts.front.frontend')

@section('content')
<!-- slider section -->
<section class="slider_section ">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                  <h5>
                    Botting
                  </h5>
                  <h1 class="text-second">
                    Solusi <br>
                    Undangan Digital
                  </h1>
                  <p>
                    Solusi undangan pernikahan digital
                    praktis, hemat dan modern
                    hehehe hehehe hehehe heheh.
                  </p>
                  <a href="{{ URL::to('/#pricing') }}">
                    Lebih lanjut
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="{{ asset('images/wedding.svg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container ">
            <div class="row">
              <div class="col-md-6">
                <div class="detail-box">
                    <h5>
                        Botting
                      </h5>
                      <h1>
                        Solusi <br>
                        Undangan Digital
                      </h1>
                      <p>
                        Solusi undangan pernikahan digital
                        praktis, hemat dan modern
                        hehehe hehehe hehehe heheh.
                      </p>
                      <a href="{{ URL::to('/#pricing') }}">
                        Lebih lanjut
                      </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="img-box">
                  <img src="{{ asset('images/wedding.svg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn_box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>


<!-- catagory section -->


<section id="why_choose_us" class="d-flex align-items-start pb-5">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Mengapa memilih botting ?</h4>
            <p class="text-center text-secondary">Yah karena mau hehehe masa jomblo terus</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-3 hidden">
                <img src="{{ asset('images/wedding.svg') }}" alt="" width="300">
            </div>
            <div class="col-sm-9">
                <div class="row ">
                    <div class="col-sm-6">
                        <div class="card border-0 hidden">
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
                        <div class="card border-0 hidden">
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
                        <div class="card border-0 hidden">
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
                        <div class="card border-0 hidden">
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

<section id="features" class="d-flex align-items-start  pb-5 bg-odd">

    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Fitur Unggulan</h4>
            <p class="text-center text-secondary">Fitur unggulan yang siap digunakan</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="row ">
                    <div class="col-sm-4">
                        <div class="card soft-border text-center hidden">
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
                        <div class="card soft-border text-center hidden">
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
                        <div class="card soft-border text-center hidden">
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
                        <div class="card soft-border text-center hidden">
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
                        <div class="card soft-border text-center hidden">
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
                        <div class="card soft-border text-center hidden">
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

<section id="faq" class="d-flex align-items-start pb-5 hidden">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Apa kata mereka</h4>
            <p class="text-center text-secondary">Testimoni dari client kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 p-5">
                <h5 class="text-main">peter & parker </h4>
                <p class="small text-secondary">Untuk pembuatan undangan pernikahan online membutuhkan waktu sekitar 10 menit untuk mengisi data dan sudah bisa langsung disebar setelahnya</p>
            </div>
            <div class="col-sm-6 p-5">
                <h5 class="text-main">Super & man </h4>
                <p class="small text-secondary">Mohon maaf, untuk saat ini tema undangan tidak dapat di custom, tapi Kami akan selalu mengembangkan tema sesuai dengan masukan dari pengguna</p>
            </div>
        </div>

    </div>
</section>

<section id="how_to_make" class="d-flex align-items-start pb-5 bg-odd">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Bagaimana cara membuat undangan digital ?</h4>
            <p class="text-center text-secondary">Hanya butuh beberapa langkah dan menit saja hingga undangan Kamu
                siap digunakan</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6 hidden">
                <img src="{{ asset('images/how_to.svg') }}" alt="" width="500">
            </div>
            <div class="col-sm-6">
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card border-0 hidden">
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
                        <div class="card border-0 hidden">
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
                        <div class="card border-0 hidden">
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

<section id="choose_theme" class="d-flex align-items-start pb-5 ">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Pilih tema ?</h4>
            <p class="text-center text-secondary">Pilih berbagai tema menarik yang siap pakai</p>
            </div>
        </div>
        <div class="row mt-5">
        @foreach($tema as $row)
            <div class="col-sm-4">
                <div class="card theme-card border-0 hidden">
                    <img src="{{ asset('data/tema/' . $row->thumbnail_tema) }}" alt="">
                    <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                        <h4>{{ $row->nama_tema }}</h4>
                        <a href="{{ URL::to('/preview/' . spaceToUnderscore($row->nama_tema)) }}">
                        <i class="fas fa-paper-plane "></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <div class="row my-5">
            <div class="col-sm-12 text-center">
                <button class="my-button">Lihat desain lainnya </button>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="d-flex align-items-start pb-5 bg-odd ">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12">
                <h4 class="mt-5 text-center">Harga undangan</h4>
            <p class="text-center text-secondary">Pilih paket undangan sesuai dengan kebutuhanmu</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-4 mt-100">
                <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4 hidden">
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
                <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4 hidden">
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
                <div class="border-0 card pricing-card d-flex justify-content-center align-items-center p-4 hidden">
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

    <section id="faq" class="d-flex align-items-start pb-5 hidden">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <h4 class="mt-5 text-center">Faq</h4>
                <p class="text-center text-secondary">Pertanyaan yang sering di ajukan</p>
                </div>
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


<!-- end catagory section -->

@include('components.info')
<!-- end info section -->

@endsection
@section('script')
<script>

    $('#btn-search').on('click',function(){
        $('#form-pencarian').css('opacity','1');
        $('#form-pencarian').css('transform','translateY(-50px)');

        // title
        $('#pencarian-title').css('opacity','0');
        $('#pencarian-title').css('transform','translateY(100px)');
        $(this).css('display','none');
        $('#btn-close').css('display','block');
    })

    $('#btn-close').on('click',function(){
        $('#form-pencarian').css('opacity','0');
        $('#form-pencarian').css('transform','translateY(-110px)');

        // title
        $('#pencarian-title').css('opacity','1');
        $('#pencarian-title').css('transform','translateY(0px)');
        $(this).css('display','none');
        $('#btn-search').css('display','block');
    })

</script>
@endsection

