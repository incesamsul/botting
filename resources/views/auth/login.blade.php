@extends('auth.login_template')

@section('content')

<section id="login" class="mt-45">
    <div class="ilustration-wrapper">
        <img src="{{ asset('images/wedding2.svg') }}" alt="" width="500">
    </div>
    <div class="login-wrapper">
        <form action="{{ URL::to('/postlogin') }}" method="post">
            @csrf
        <div class="login-box">
            <h5 class="pb-3">Login</h5>
            @if (session('fail'))
                <p class="text-small">{{ session('fail') }}</p>
                @endif
            <div class="form-group">
                <input placeholder="email" type="text" class="my-custom-form p-3 border-0 form-control bg-form" name="email">
            </div>
            <div class="form-group">
                <input placeholder="password" type="password" class=" my-custom-form p-3 border-0 form-control bg-form" name="password">
            </div>
            <div class="form-group mt-25">
                <button type="submit" class="my-custom-btn border-0 bg-second text-white form-control">Login</button>
            </div>
            <div class="caption text-center">
                <small>Belum punya akun ? </small>
                <small>
                    <a href="{{ URL::to('/register') }}">Registrasi</a>
                </small>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection
