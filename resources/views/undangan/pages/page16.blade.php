<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/bl.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content" style=" position: relative; z-index:2;">

    <h1  >Pertama ketemu</h1>

    <h2>{{ $informasi->lokasi_pertama_ketemu }}</h2>

    <p class="capital">
        {{ $informasi->cerita_pertama_ketemu }}
    </p>

    <p class="center-pic">
        <div class="polaroid rotate-right" style="margin-left:150px;">
            <img src="{{ asset('data/informasi/' . $informasi->gambar_pertama_ketemu) }}" style="width:190px; height:170px;">
        </div>
    </p>

    </div>
    <span class="page-number">16</span>
