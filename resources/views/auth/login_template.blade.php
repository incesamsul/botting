<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  {{-- <link rel="icon" href="images/favicon.png" type="image/gif" /> --}}
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Botting</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.css') }}" />
  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('bostorek/css/style.css') }}" rel="stylesheet" />
  {{-- home css --}}
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <!-- responsive style -->
  <link href="{{ asset('bostorek/css/responsive.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  {{-- csrf token  --}}
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  {{-- sweetalert --}}
  <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
</head>

<body>

    @if (session('message'))
    {{ sweetAlert(session('message'), 'success') }}
    @endif
    @if (session('error'))
    {{ sweetAlert(session('error'), 'warning') }}
    @endif
  <div class="hero_area">
    <!-- header section strats -->

    <header class="header_section " style="background: linear-gradient(to right, #fffbeb, #ebeeff);">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pr-4 " style="background: linear-gradient(to right, #fffbeb, #ebeeff);">
          <a class="navbar-brand ml-5" href="{{ URL::to('/') }}">
            <img src="{{ asset('images/botting_samping.png') }}" alt="" width="200">
            {{-- <span>
              Botting
            </span> --}}
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="{{ URL::to('/') }}">Beranda <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/#tema') }}"> Tema</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/#portfolio') }}"> Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('/#tentangkami') }}">Tentang kami</a>
              </li>

            </ul>
            <from class="search_form mr-3">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <a class="nav-link my-btn-nav bg-second text-white" href="{{ URL::to('/login') }}">Login</a>
          </div>
        </nav>
            <!-- bulet bulet -->
    <div class="bulet bulet1"></div>
    <div class="bulet bulet2"></div>
    <div class="bulet bulet3"></div>
    <div class="bulet bulet4"></div>
    <div class="bulet bulet5"></div>
    <div class="bulet bulet6"></div>
    <div class="bulet bulet7"></div>
    <div class="bulet bulet8"></div>

      </div>
    </header>
    <!-- end header section -->
    @yield('content')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    {{-- sweet alert --}}
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('js/home.js') }}"></script>


  @yield('script')

</body>

</html>

