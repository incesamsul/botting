@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Pilih Tema Sesuai selera anda</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tema as $row)
                <div class="col-sm-4">
                    <a href="{{ URL::to('/pelanggan/pilih_tema/' . $row->id_tema) }}" class="text-decoration-none">
                        <div
                            class="card {{ getTemaUser(auth()->user()->id)->id_tema == $row->id_tema ? 'active-card' : '' }} theme-card border-0">
                            <img src="{{ asset('data/tema/' . $row->thumbnail_tema) }}" alt="">
                            <div class="caption d-flex flex-row justify-content-between p-4 align-items-center">
                                <h4>{{ $row->nama_tema }}</h4>
                                <i class="fas fa-paper-plane "></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#liTema').addClass('active');
    </script>
@endsection
