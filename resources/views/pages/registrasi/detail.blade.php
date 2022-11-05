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
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Detail Transaksi</h2>
                    </div>
                    <div class="card-body">
                        <p>Ref No. #{{ $detail_transaksi->reference }}</p>
                        <h1>Total : Rp. {{ number_format($detail_transaksi->amount) }}</h1>
                        <p>{{ $detail_transaksi->customer_name }}</p>
                        <p>{{ $detail_transaksi->customer_email }}</p>
                        @if ($detail_transaksi->payment_name == 'QRIS')
                        <p><img src="{{ $detail_transaksi->qr_url }}" alt=""></p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Instruksi pembayaran</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            @foreach ($detail_transaksi->instructions as $instruksi)
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#what{{$loop->iteration}}" aria-expanded="true" aria-controls="what{{$loop->iteration}}">
                                    {{ $instruksi->title }}
                                    </button>
                                </h2>
                                </div>
                                <div id="what{{$loop->iteration}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul>
                                        @foreach ($instruksi->steps as $step)
                                            <li>{!! $step !!}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                </div>
                            </div>
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
