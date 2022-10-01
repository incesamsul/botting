@extends('auth.login_template')

@section('content')

<section id="login" class="mt-45">
    <div class="ilustration-wrapper">
        <img src="{{ asset('images/wedding.svg') }}" alt="" width="600">
    </div>
    <div class="login-wrapper">
        <form action="{{ URL::to('/postlogin') }}" method="post">
            @csrf
        <div class="login-box">
            <h4>Login</h4>
            @if (session('fail'))
                <p class="text-small">{{ session('fail') }}</p>
                @endif
            <div class="form-group">
                <input placeholder="email" type="text" class="form-input" name="email">
            </div>
            <div class="form-group">
                <input placeholder="password" type="password" class="form-input" name="password">
            </div>
            <div class="form-group mt-25">
                <button type="submit" class="btn">Login</button>
            </div>
        </form>
        </div>
    </div>
</section>

@endsection
