<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tr.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content">

    <div class="mempelai-wrapper text-center text-{{ $nama_tema }}">
        <span class="mempelai ">Resepsi</span>
        <i class="icon fa-regular fa-calendar-check"></i>
        <span class="text-main mt-2">{{ date('l, d F Y', strtotime($informasi->tgl_resepsi)) }}</span>
        <span class="text-main mt-2">{{ $informasi->jam_resepsi }} - Selesai</span>
        <i class="fa-solid fa-mountain-city icon mt-2"></i>
        <span class="text-main mt-2">Lokasi resepsi</span>
        <span class="text-main mt-2">{{ $informasi->lokasi_resepsi }}</span>
    </div>

</div>
<span class="page-number">9</span>
