@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Data Tema</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ URL::to('/admin/create_tema') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama_tema">Nama tema</label>
                                <input type="text" class="form-control" name="nama_tema" id="nama_tema">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail_tema">Thumbnail tema</label>
                                <input type="file" class="form-control" name="thumbnail_tema" id="thumbnail_tema">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn bg-main text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            @foreach ($tema as $row)
                <div class="col-sm-4">
                    <div class="card theme-card border-0">
                        <img src="{{ asset('data/tema/' . $row->thumbnail_tema) }}" alt="">
                        <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                            <h4>{{ $row->nama_tema }}</h4>
                            <i class="fas fa-paper-plane "></i>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script></script>
@endsection
