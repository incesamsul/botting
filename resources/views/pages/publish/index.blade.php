@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Input domain anda</h4>
                    </div>
                    <div class="card-body">
                        <form class="formDomain" action="{{ URL::to('/pelanggan/simpan_domain') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input value="{{ $domain ? $domain->domain : '' }}" type="text" class="form-control"
                                    name="domain">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-simpan bg-main text-white"> Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @if ($domain)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex  justify-content-between">
                            <h4>Lihat situs saya</h4>
                        </div>
                        <div class="card-body">
                            <a href="{{ URL::to('/' . $domain->domain) }}">Lihat</a>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
@section('script')
    <script>

        $('.btn-simpan').on('click',function(e){
            e.preventDefault();
            let parentHTML = $(this).parent();
            let img = $('.loader img').attr('src');
            let button = '<button type="submit" class="btn bg-main text-white btn-simpan"> <img src="'+img+'" width="30"></button>'
            parentHTML.html(button);
            $('.formDomain').submit();
        })
        $('#liPublish').addClass('active');
    </script>
@endsection
