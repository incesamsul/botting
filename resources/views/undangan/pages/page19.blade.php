<img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema . '/tr.png?p') }}" style="width:100%; height:100%;position: absolute; z-index: 1">
<div class="book-content" style=" position: relative; z-index:2;">

    <span class="mempelai text-right text-{{ $nama_tema }}" >---</span>
    <div class="gallery-wrapper">

        <div class="polaroid rotate-left" style="margin-left:20px; margin-top: 20px;">
            <img src="{{ asset('data/informasi/' . $informasi->gallery3) }}" style="width:170px; height:150px;">
        </div>
        <div class="polaroid rotate-right" style="margin-left:170px;">
            <img src="{{ asset('data/informasi/' . $informasi->gallery4) }}" style="width:170px; height:150px;">
        </div>
    </div>

    </div>
    <span class="page-number">19</span>
