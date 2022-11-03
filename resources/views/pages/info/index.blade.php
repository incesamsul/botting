@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ URL::to('/pelanggan/info/mempelai_pria') }}" class="btn btn-secondary {{ $jenisInfo == 'mempelai_pria' ? 'active' : '' }}">Mempelai pria</a>
                        <a href="{{ URL::to('/pelanggan/info/mempelai_wanita') }}" class="btn btn-secondary {{ $jenisInfo == 'mempelai_wanita' ? 'active' : '' }}">Mempelai wanita</a>
                        <a href="{{ URL::to('/pelanggan/info/akad') }}" class="btn btn-secondary {{ $jenisInfo == 'akad' ? 'active' : '' }}">akad</a>
                        <a href="{{ URL::to('/pelanggan/info/resepsi') }}" class="btn btn-secondary {{ $jenisInfo == 'resepsi' ? 'active' : '' }}">resepsi</a>
                        <a href="{{ URL::to('/pelanggan/info/quotes') }}" class="btn btn-secondary {{ $jenisInfo == 'quotes' ? 'active' : '' }}">quotes</a>
                        <a href="{{ URL::to('/pelanggan/info/kisah_cinta') }}" class="btn btn-secondary {{ $jenisInfo == 'kisah_cinta' ? 'active' : '' }}">kisah_cinta</a>
                        <a href="{{ URL::to('/pelanggan/info/gallery') }}" class="btn btn-secondary {{ $jenisInfo == 'gallery' ? 'active' : '' }}">gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($jenisInfo == 'mempelai_pria')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Informasi mempelai pria</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="foto_mempelai_pria">Foto Mempelai pria</label>
                                <input type="file" class="form-control" name="foto_mempelai_pria" id="foto_mempelai_pria">
                            </div>
                            <div class="form-group">
                                <label for="nama_mempelai_pria">Nama Mempelai pria</label>
                                <input type="text" class="form-control" name="nama_mempelai_pria" id="nama_mempelai_pria">
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah_mempelai_pria">Nama Ayah Mempelai pria</label>
                                <input type="text" class="form-control" name="nama_ayah_mempelai_pria" id="nama_ayah_mempelai_pria">
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu_mempelai_pria">Nama Ibu Mempelai pria</label>
                                <input type="text" class="form-control" name="nama_ibu_mempelai_pria" id="nama_ibu_mempelai_pria">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @if ($jenisInfo == 'mempelai_wanita')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Informasi mempelai wanita</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="foto_mempelai_wanita">Foto Mempelai wanita</label>
                                <input type="file" class="form-control" name="foto_mempelai_wanita" id="foto_mempelai_wanita">
                            </div>
                            <div class="form-group">
                                <label for="nama_mempelai_wanita">Nama Mempelai wanita</label>
                                <input type="text" class="form-control" name="nama_mempelai_wanita" id="nama_mempelai_wanita">
                            </div>
                            <div class="form-group">
                                <label for="nama_ayah_mempelai_wanita">Nama Ayah Mempelai wanita</label>
                                <input type="text" class="form-control" name="nama_ayah_mempelai_wanita" id="nama_ayah_mempelai_wanita">
                            </div>
                            <div class="form-group">
                                <label for="nama_ibu_mempelai_wanita">Nama Ibu Mempelai wanita</label>
                                <input type="text" class="form-control" name="nama_ibu_mempelai_wanita" id="nama_ibu_mempelai_wanita">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            @if ($jenisInfo == 'akad')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Informasi Akad</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tgl_akad">Tgl akad</label>
                                <input type="date" class="form-control" name="tgl_akad" id="tgl_akad">
                            </div>
                            <div class="form-group">
                                <label for="jam_akad">jam akad</label>
                                <input type="time" class="form-control" name="jam_akad" id="jam_akad">
                            </div>
                            <div class="form-group">
                                <label for="lokasi_akad">lokasi akad</label>
                                <input type="text" class="form-control" name="lokasi_akad" id="lokasi_akad">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @if ($jenisInfo == 'resepsi')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Informasi resepsi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tgl_resepsi">Tgl resepsi</label>
                                <input type="date" class="form-control" name="tgl_resepsi" id="tgl_resepsi">
                            </div>
                            <div class="form-group">
                                <label for="jam_resepsi">jam resepsi</label>
                                <input type="time" class="form-control" name="jam_resepsi" id="jam_resepsi">
                            </div>
                            <div class="form-group">
                                <label for="lokasi_resepsi">lokasi resepsi</label>
                                <input type="text" class="form-control" name="lokasi_resepsi" id="lokasi_resepsi">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            @if ($jenisInfo == 'quotes')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>quotes</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="quotes">Quotes</label>
                                <textarea class="form-control" name="quotes" id="quotes" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            @if ($jenisInfo == 'kisah_cinta')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Kisah cinta</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="lokasi_pertama_ketemu">lokasi_pertama_ketemu</label>
                                <input type="text" class="form-control" name="lokasi_pertama_ketemu">
                            </div>
                            <div class="form-group">
                                <label for="gambar_pertama_ketemu">gambar_pertama_ketemu(optional)</label>
                                <input type="file" class="form-control" name="gambar_pertama_ketemu">
                            </div>
                            <div class="form-group">
                                <label for="pertama_ketemu">Cerita pertama ketemu (1 paragraf )</label>
                                <textarea class="form-control" name="pertama_ketemu" id="pertama_ketemu" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="lokasi_lamaran">lokasi_lamaran</label>
                                <input type="text" class="form-control" name="lokasi_lamaran">
                            </div>
                            <div class="form-group">
                                <label for="gambar_lamaran">gambar_lamaran(optional)</label>
                                <input type="file" class="form-control" name="gambar_lamaran">
                            </div>
                            <div class="form-group">
                                <label for="cerita_lamaran">Cerita lamaran (1 paragraf )</label>
                                <textarea class="form-control" name="cerita_lamaran" id="cerita_lamaran" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="row">
            @if ($jenisInfo == 'gallery')
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Gallery</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label for="gallery1">gallery1</label>
                                <input type="file" class="form-control" name="gallery1">
                            </div>
                            <div class="form-group">
                                <label for="gallery2">gallery2</label>
                                <input type="file" class="form-control" name="gallery2">
                            </div>
                            <div class="form-group">
                                <label for="gallery3">gallery3</label>
                                <input type="file" class="form-control" name="gallery3">
                            </div>
                            <div class="form-group">
                                <label for="gallery4">gallery4</label>
                                <input type="file" class="form-control" name="gallery4">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </section>
@endsection
@section('script')
    <script></script>
@endsection
