<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{ asset('turnjs/extras/jquery.min.1.7.js') }}"></script>
    <script type="text/javascript" src="{{ asset('turnjs/extras/jquery-ui-1.8.20.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('turnjs/extras/jquery.mousewheel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('turnjs/extras/modernizr.2.5.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('turnjs/lib/hash.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('turnjs/invitation/css/invitation.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('turnjs/invitation/css/bottom-nav.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>




    <audio autoplay controls id="backsound" hidden>
        <source src="{{ asset('turnjs/audio/backsound.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>

    <audio controls id="soundEffect" hidden>
        <source src="{{ asset('turnjs/audio/paperslide.wav') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>


        <header class="header" id="header">
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="{{ URL::to('/#choose_theme') }}" class="nav__link active-link">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#page/5" class="nav__link btn-volume">
                            <i class='bx bx-music nav__icon'></i>
                            <span class="nav__name">Music</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#page/5" class="nav__link">
                            <i class='bx bx-book-alt nav__icon'></i>
                            <span class="nav__name">Daftar isi</span>
                        </a>
                    </li>

                    <li class="nav__item" hidden>
                        <a href="#page/4" class="nav__link" id="sampul">
                            <i class='bx bx-book-alt nav__icon'></i>
                            <span class="nav__name">sampul</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#page/5" class="nav__link" data-bs-toggle="modal" data-bs-target="#giftModal">
                            <i class='bx bx-gift nav__icon'></i>
                            <span class="nav__name">hadiah</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#page/5" class="nav__link" data-bs-toggle="modal" data-bs-target="#commentModal">
                            <i class='bx bx-message-square-detail nav__icon'></i>
                            <span class="nav__name">Komentar</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>

        <nav class="floating-menu">
            <ul class="main-menu">
                <li>
                    <a href="{{ URL::to('/#choose_theme') }}" class="ripple">
                        <i class="fas fa-home fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="ripple btn-volume-desktop">
                        <i class="fas fa-volume-off fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="ripple">
                        <i class="fas fa-book fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a href="#page/4" class="ripple" data-bs-toggle="modal" data-bs-target="#giftModal">
                        <i class="fas fa-gift fa-lg"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="ripple" data-bs-toggle="modal" data-bs-target="#commentModal">
                        <i class="fas fa-comment fa-lg"></i>
                    </a>
                </li>
            </ul>
            <div class="menu-bg"></div>
        </nav>

	<div id="canvas">
        <div id="book-zoom">
            <div class="sj-book">
                <div depth="5" class="hard">
                    <div class="side"></div>
                    <div class="sampul" style="position: absolute;">
                        <div class="cover-effect-right"></div>
                        <div class="cover-effect-left"></div>
                        <div class="overlay-effect text-{{ $nama_tema }}">
                            <span>HARI PERNIKAHAN</span>
                            <h3>Eren & Mikasa</h3>
                            <span>10 * 20 * 2022</span>
                        </div>
                        <img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema .'/bg2.png') }}" alt="">
                    </div>
                </div>
                <div depth="5" class="hard front-side">
                    <div class="depth"></div>
                </div>
                <div class="own-size">
                    <div class="sampul" style="position: absolute;">
                        <div class="cover-effect-right"></div>
                        <div class="cover-effect-left"></div>
                        <div class="overlay-effect text-{{ $nama_tema }}">
                            <span>HARI PERNIKAHAN</span>
                            <h3>Eren & Mikasa</h3>
                            <span>10 * 20 * 2022</span>
                        </div>
                        <img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema .'/bg2.png') }}" alt="">
                    </div>
                </div>
                <div class="own-size even">
                    <div class="sampul" style="position: absolute;">
                        <div class="cover-effect-right"></div>
                        <div class="cover-effect-left"></div>
                        <div class="overlay-effect text-{{ $nama_tema }}">
                            <span>HARI PERNIKAHAN</span>
                            <h3>Eren & Mikasa</h3>
                            <span>10 * 20 * 2022</span>
                        </div>
                        <img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema .'/bg2.png') }}" alt="">
                    </div>
                </div>
                <div class="hard fixed back-side p21">
                    <div class="depth"></div>
                </div>
                <div class="hard p22">
                    <div class="sampul" style="position: absolute;">
                        <div class="cover-effect-right"></div>
                        <div class="cover-effect-left"></div>
                        <div class="overlay-effect text-{{ $nama_tema }}">
                            <span>HARI PERNIKAHAN</span>
                            <h3>Eren & Mikasa</h3>
                            <span>10 * 20 * 2022</span>
                        </div>
                        <img src="{{ asset('turnjs/invitation/pics/bg/' . $nama_tema .'/bg2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-bar" class="turnjs-slider">
            <div id="slider"></div>
        </div>

        {{-- MODAL HERE --}}

  <!-- Comment  Modal -->
  <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Komentar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
              <div class="card-body">
                  <div class="user-comment d-flex align-items-start">
                      <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="rounded mx-2" width="30">
                        <p>Lorem - 20-oct-2020</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis eaque, nobis quia illum delectus?</p>
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-body">
                  <div class="user-comment d-flex align-items-start">
                      <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="rounded mx-2" width="30">
                        <p>Lorem - 20-oct-2020</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis eaque, nobis quia illum delectus?</p>
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-body">
                  <div class="user-comment d-flex align-items-start">
                      <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="rounded mx-2" width="30">
                        <p>Lorem - 20-oct-2020</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis eaque, nobis quia illum delectus?</p>
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-body">
                  <div class="user-comment d-flex align-items-start">
                      <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="rounded mx-2" width="30">
                        <p>Lorem - 20-oct-2020</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis eaque, nobis quia illum delectus?</p>
              </div>
          </div>
          <div class="card mt-3">
              <div class="card-body">
                  <div class="user-comment d-flex align-items-start">
                      <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="rounded mx-2" width="30">
                        <p>Lorem - 20-oct-2020</p>
                  </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea debitis eaque, nobis quia illum delectus?</p>
              </div>
          </div>
        </div>
        <div class="modal-footer">
            <textarea class="form-control" name="komentar" id="komentar" cols="30" rows="4"></textarea>
          <button type="button" class="btn btn-secondary">Kirim</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Gift  Modal -->
  <div class="modal fade" id="giftModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Beri hadiah</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>

        {{-- END OF MODAL HERE --}}


    </div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).on("click", "#sampul", function(){
            let link = $(this).attr('href');
            document.location.href = link;
        });



        var playing = false;

        $('.btn-volume').on('click',function(e){
            e.preventDefault();
            $(this).toggleClass("down");
            var backsoundEl = document.getElementById("backsound");
            backsoundEl.pause();
            if (playing == false) {
                backsoundEl.play();
                playing = true;
                let pauseHTML = '<i class="bx bx-music nav__icon"></i><span class="nav__name">Music</span>';
                $(this).html(pauseHTML);

            } else {
                backsoundEl.pause();
                playing = false;
                let pauseHTML = '<i class="bx bx-volume-mute nav__icon"></i><span class="nav__name">Music</span>';
                $(this).html(pauseHTML);
            }
        })

        $('.btn-volume-desktop').on('click',function(e){
            e.preventDefault();
            $(this).toggleClass("down");
            var backsoundEl = document.getElementById("backsound");
            backsoundEl.pause();
            if (playing == false) {
                backsoundEl.play();
                playing = true;
                let pauseHTML = '<i class="fas fa-volume-off fa-lg"></i>';
                $(this).html(pauseHTML);

            } else {
                backsoundEl.pause();
                playing = false;
                let pauseHTML = '<i class="fas fa-volume-xmark fa-lg"></i>';
                $(this).html(pauseHTML);
            }

        })



        function loadApp() {



            var flipbook = $('.sj-book');

            // Check if the CSS was already loaded

            if (flipbook.width() == 0 || flipbook.height() == 0) {
                setTimeout(loadApp, 10);
                return;
            }



            // Mousewheel

            $('#book-zoom').mousewheel(function(event, delta, deltaX, deltaY) {

                var data = $(this).data(),
                    step = 30,
                    flipbook = $('.sj-book'),
                    actualPos = $('#slider').slider('value') * step;

                if (typeof(data.scrollX) === 'undefined') {
                    data.scrollX = actualPos;
                    data.scrollPage = flipbook.turn('page');
                }

                data.scrollX = Math.min($("#slider").slider('option', 'max') * step,
                    Math.max(0, data.scrollX + deltaX));

                var actualView = Math.round(data.scrollX / step),
                    page = Math.min(flipbook.turn('pages'), Math.max(1, actualView * 2 - 2));

                if ($.inArray(data.scrollPage, flipbook.turn('view', page)) == -1) {
                    data.scrollPage = page;
                    flipbook.turn('page', page);
                }

                if (data.scrollTimer)
                    clearInterval(data.scrollTimer);

                data.scrollTimer = setTimeout(function() {
                    data.scrollX = undefined;
                    data.scrollPage = undefined;
                    data.scrollTimer = undefined;
                }, 1000);

            });

            // Slider

            $("#slider").slider({
                min: 1,
                max: 100,

                start: function(event, ui) {

                    if (!window._thumbPreview) {
                        _thumbPreview = $('<div />', {
                            'class': 'thumbnail'
                        }).html('<div></div>');
                        setPreview(ui.value);
                        _thumbPreview.appendTo($(ui.handle));
                    } else
                        setPreview(ui.value);

                    moveBar(false);

                },

                slide: function(event, ui) {

                    setPreview(ui.value);

                },

                stop: function() {

                    if (window._thumbPreview)
                        _thumbPreview.removeClass('show');

                    $('.sj-book').turn('page', Math.max(1, $(this).slider('value') * 2 - 2));

                }
            });


            // URIs

            Hash.on('^page\/([0-9]*)$', {
                yep: function(path, parts) {

                    var page = parts[1];

                    if (page !== undefined) {
                        if ($('.sj-book').turn('is'))
                            $('.sj-book').turn('page', page);
                    }

                },
                nop: function(path) {

                    if ($('.sj-book').turn('is'))
                        $('.sj-book').turn('page', 1);
                }
            });

            // Arrows

            let touchstartX = 0
            let touchendX = 0

            function checkDirection() {
                if (touchendX < touchstartX) {
                    // alert('swiped left!')
                    $('.sj-book').turn('next');

                }
                if (touchendX > touchstartX) {
                    // alert('swiped right!')
                    $('.sj-book').turn('previous');
                }
            }

            document.addEventListener('touchstart', e => {
                touchstartX = e.changedTouches[0].screenX
            })

            document.addEventListener('touchend', e => {
                touchendX = e.changedTouches[0].screenX
                checkDirection()
            })

            $(document).keydown(function(e) {

                var previous = 37,
                    next = 39;

                switch (e.keyCode) {
                    case previous:

                        $('.sj-book').turn('previous');

                        break;
                    case next:

                        $('.sj-book').turn('next');

                        break;
                }

            });


            // Flipbook

            flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);

            function detectMob() {
                const toMatch = [
                    /Android/i,
                    /webOS/i,
                    /iPhone/i,
                    /iPad/i,
                    /iPod/i,
                    /BlackBerry/i,
                    /Windows Phone/i
                ];

                return toMatch.some((toMatchItem) => {
                    return navigator.userAgent.match(toMatchItem);
                });
            }

            let display = '';

            if (detectMob()) {
                display = 'single';
                $(document).ready(function(){
                    $("#sampul").trigger("click");
                });
            } else {
                display = 'double';
            }

            flipbook.turn({
                display: display,
                elevation: 50,
                acceleration: !isChrome(),
                autoCenter: true,
                gradients: true,
                duration: 1000,
                pages: 22,
                when: {
                    turning: function(e, page, view) {


                        $('.book-content').addClass('hidden');
                        setTimeout(() => {
                            $('.book-content').removeClass('hidden');
                        }, 1800);

                        var audio = document.getElementById("soundEffect");
                        audio.play();

                        var book = $(this),
                            currentPage = book.turn('page'),
                            pages = book.turn('pages');

                        if (currentPage > 3 && currentPage < pages - 3) {

                            if (page == 1) {
                                book.turn('page', 2).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            } else if (page == pages) {
                                book.turn('page', pages - 1).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            }
                        } else if (page > 3 && page < pages - 3) {
                            if (currentPage == 1) {
                                book.turn('page', 2).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            } else if (currentPage == pages) {
                                book.turn('page', pages - 1).turn('stop').turn('page', page);
                                e.preventDefault();
                                return;
                            }
                        }

                        updateDepth(book, page);

                        if (page >= 2)
                            $('.sj-book .p2').addClass('fixed');
                        else
                            $('.sj-book .p2').removeClass('fixed');

                        if (page < book.turn('pages'))
                            $('.sj-book .p21').addClass('fixed');
                        else
                            $('.sj-book .p21').removeClass('fixed');

                        Hash.go('page/' + page).update();

                    },

                    turned: function(e, page, view) {

                        $('.book-content').addClass('animate__animated');
                        $('.book-content').addClass('animate__fadeIn');
                        $('.book-content').addClass('animate__delay-1s');


                        setTimeout(() => {
                            $('.book-content').removeClass('animate__animated');
                            $('.book-content').removeClass('animate__fadeIn');
                            $('.book-content').removeClass('animate__delay-1s');
                        }, 1000);


                        var book = $(this);

                        if (page == 2 || page == 3) {
                            book.turn('peel', 'br');
                        }

                        updateDepth(book);

                        $('#slider').slider('value', getViewNumber(book, page));

                        book.turn('center');

                    },

                    start: function(e, pageObj) {

                        moveBar(true);

                    },

                    end: function(e, pageObj) {

                        var book = $(this);

                        updateDepth(book);

                        setTimeout(function() {

                            $('#slider').slider('value', getViewNumber(book));

                        }, 1);

                        moveBar(false);

                    },

                    missing: function(e, pages) {

                        for (var i = 0; i < pages.length; i++) {
                            addPage(pages[i], $(this));
                        }

                    }
                }
            });


            $('#slider').slider('option', 'max', numberOfViews(flipbook));

            flipbook.addClass('animated');

            // Show canvas

            $('#canvas').css({
                visibility: ''
            });
        }

        // Hide canvas

        $('#canvas').css({
            visibility: 'hidden'
        });

        // Load turn.js
        let tema = '{{ $nama_tema }}';
        yepnope({
            test: Modernizr.csstransforms,
            yep: ['{{ asset("turnjs/lib/turn.js") }}'],
            nope: ['{{ asset("turnjs/lib/turn.html4.min.js") }}', '{{ asset("turnjs/invitation/css/jquery.ui.html4.css") }}', '{{ asset("turnjs/invitation/css/books-html4.css") }}'],
            both: ['{{ asset("turnjs/invitation/js/books.js") }}', '{{ asset("turnjs/invitation/css/jquery.ui.css") }}', '{{ asset("turnjs/invitation/css/books.css") }}'],
            complete: loadApp
        });
    </script>

</body>
</html>
