
<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tl.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content">

    <div class="mempelai-wrapper text-center text-{{ $nama_tema }} ">
        <span class="mempelai ">Akad nikah</span>
        <i class="icon fa-regular fa-calendar-check"></i>
        <span class="text-main mt-5">{{ date('l, d F Y', strtotime($informasi->tgl_akad)) }}</span>
        <span class="text-main mt-5">{{ $informasi->jam_akad }} - Selesai</span>
        <i class="fa-solid fa-mountain-city icon mt-5"></i>
        <span class="text-main mt-5">Lokasi akad</span>
        <span class="text-main mt-5">{{ $informasi->lokasi_akad }}</span>
    </div>

</div>
<span class="page-number">8</span>
