@extends('layouts.v_template')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex  justify-content-between">
                        <h4>Pilih paket sesuai kebutuhan anda</h4>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Pilih channel pembayaran</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($channels as $channel)
                                    <div class="col-sm-2 my-2">
                                        <div class="card border-0 hover-card">
                                            <form action="{{ URL::to('/pelanggan/transaksi') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id_cart" value="{{ $id_undangan }}">
                                                <input id="total_pembayaran" type="hidden" name="total_pembayaran" value="149000">
                                                <input type="hidden" name="method" value="{{ $channel->code }}">
                                                <button type="submit" class="card-body border-0 bg-transparent btn-request-transaksi">
                                                    <img src="{{ $channel->icon_url }}" alt="" width="100">
                                                    <p class="text-small mt-3">{{ $channel->name }}</p>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    @endforeach
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Transaksi saya</h3>
                    </div>
                    <div class="card-body">
                        @foreach ($transaksi as $row)
                            <span>{{  $row->reference }}</span><p>{!!$row->status == 'unpaid' ? '<span class="badge badge-danger"> unpaid</span>' : '<span class="badge badge-success"> paid</span>' !!} <a href="{{ URL::to('/pelanggan/detail_transaksi/' .$row->reference) }}" class="badge bg-main text-white">detail</a></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('#liRegistrasi').addClass('active');
    </script>
@endsection
