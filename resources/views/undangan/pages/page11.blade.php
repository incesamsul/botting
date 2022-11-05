<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tr.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content">


    <div class="mempelai-wrapper  text-center text-{{ $nama_tema }}">
        <span class="mempelai ">Lokasi acara</span>
        <i class="fa-solid fa-compass icon mt-2"></i>
        <span class="text-main mt-2">Klik tombol untuk membuka peta</span>
        <a target="_blank" href="https://www.google.co.id/maps/place/{{ $informasi->lokasi_akad }}" class="mt-2 my-btn border-{{ $nama_tema }}">Buka</a>
    </div>

</div>
<span class="page-number">11</span>
