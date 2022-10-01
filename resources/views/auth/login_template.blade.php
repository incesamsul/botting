@include('auth.template.login_header')
@include('auth.template.login_navbar')
        @yield('content')
@include('auth.template.login_footer')
<script src="{{ asset('js/script.js') }}"></script>
@yield('script')
