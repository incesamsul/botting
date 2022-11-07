
<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tr.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content">

    <div class="mempelai-wrapper">
        <img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/bingkai.png?p') }}" class="mempelai-img-frame">
        <img src="{{ asset('data/informasi/' . $informasi->foto_mempelai_pria) }}" class="mempelai-img">
        <span class="mempelai text-{{ $nama_tema }}">{{ getNickName($informasi->nama_mempelai_pria) }} </span>
        <span class="text-secondary">Anak dari</span>
        <span class="text-secondary mt-2">{{ $informasi->nama_ayah_mempelai_pria }}</span>
        <span class="text-secondary">&</span>
        <span class="text-secondary">{{ $informasi->nama_ibu_mempelai_pria }}</span>
    </div>

</div>
<span class="page-number">7</span>
