<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tr.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content" style=" position: relative; z-index:2;">


    <p class="mt-15">
        <div class="polaroid rotate-left" style="">
            <img src="{{ asset('data/informasi/' . $informasi->gambar_lamaran) }}" style="width:190px; height:170px; ">
        </div>
    </p>
    <h1>Akhirnya lamaran</h1>

    <h2>{{ $informasi->lokasi_lamaran }}</h2>

    <p class="capital">
        {{ $informasi->cerita_lamaran }}
    </p>

    </div>
    <span class="page-number">17</span>
