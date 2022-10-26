@extends('auth.login_template')

@section('content')
<section id="login" class="mt-45">
    <div class="ilustration-wrapper">
        <img src="{{ asset('images/wedding.svg') }}" alt="" width="600">
    </div>
    <div class="login-wrapper">
        <form id="formRegister" action="{{ URL::to('/post_register') }}" method="post">
            @csrf
        <div class="login-box">
            <h5 class="pb-3">Register</h5>
            @if (session('fail'))
                <p class="text-small">{{ session('fail') }}</p>
                @endif
                <p class="text-danger text-small" id="error"></p>
                <div class="form-group">
                    <input placeholder="nama " type="text" class="my-custom-form p-3 border-0 form-control bg-form" id="name" name="name">
                    <div class="text-small" id="errorMessage_name"></div>
                </div>
                <div class="form-group">
                    <input placeholder="email" type="text" class="my-custom-form p-3 border-0 form-control bg-form" id="email" name="email">
                    <div class="text-small" id="errorMessage_email"></div>
                </div>
                <div class="form-group">
                    <input placeholder="password" type="password" class="my-custom-form p-3 border-0 form-control bg-form" id="password" name="password">
                    <div class="text-small" id="errorMessage_password"></div>
                </div>
                <div class="form-group">
                    <input placeholder="konfirmasi password" type="password" class="my-custom-form p-3 border-0 form-control bg-form" id="konfirmasi_password" name="konfirmasi_password">
                    <div class="text-small" id="errorMessage_konfirmasi_password"></div>
                </div>
                <div class="form-group mt-25">
                    <button id="btn-register" type="button" class="my-custom-btn border-0 bg-second text-white form-control">Register</button>
                </div>
                <div class="caption text-center">
                    <small>Sudah punya akun ? </small>
                    <small>
                        <a href="{{ URL::to('/login') }}">Login</a>
                    </small>
                </div>
        </form>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>

    $('#btn-register').on('click',function(){
        let name = errorMessageDisplay('name');
        let password = errorMessageDisplay('password');
        let email = errorMessageDisplay('email');
        let konfirmasi_password = errorMessageDisplay('konfirmasi_password');
        let loading_path = $('body').data('asset_url');


        if(name == 1 && password == 1 && email == 1 && konfirmasi_password == 1){
            $(this).html('<img src="' + loading_path + '" width="20">');
            $(this).prop('disabled', true);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                , url: '/api/post_register'
                , method: 'post'
                // , dataType: 'json'
                , data: $('#formRegister').serialize()
                , success: function(data) {
                    Swal.fire('Berhasil', data.message, 'success').then((result) => {
                        location.reload();
                    });
                    // if (data == 1) {
                    //     Swal.fire('Berhasil', 'Data telah terhapus', 'success').then((result) => {
                    //         location.reload();
                    //     });
                    // }
                }
                , error: function(err){
                    $('#error').html(err.responseJSON.message);
                    $('#btn-register').html('Register');
                    $('#btn-register').prop('disabled', false);
                }
            })
        }
    })

</script>
@endsection
