<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tema 1</title>
    <link rel="stylesheet" href="{{ asset('tema/aesthetic/style.css') }}">
    <link rel="stylesheet" href="{{ asset('tema/reset.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    ">
</head>

<body>
    <section id="hero">
        <img class="top-left" src="{{ asset('tema/aesthetic/top_left.svg')  }}" alt="">
        <img class="top-right" src="{{ asset('tema/aesthetic/top_right.svg')  }}" alt="">
        <img class="bottom-right" src="{{ asset('tema/aesthetic/bottom-right.svg')  }}" alt="">
        <img class="bottom-left" src="{{ asset('tema/aesthetic/bottom-left.svg')  }}" alt="">
        <p>the Wedding of </p>
        <h1>Sam & Tam</h1>
    </section>
    <section id="pembuka" class="mt-15">
        <div class="title">
            <img src="./assets/dedaunan.svg" alt="" width="300">
            <h1>We are getting married</h1>
        </div>
        <div class="couples mt-50">
            <div class="couple">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="couple-image circle">
                <p class="nama mt-15">Ince samsul</p>
                <p>@incesamsul</p>
            </div>
            <h1>&</h1>
            <div class="couple">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="couple-image circle">
                <p class="nama mt-15">Dwi utami</p>
                <p>@_dwi16_tami_part3</p>
            </div>
        </div>
        <img src="./assets/dedaunan.svg" alt="" width="300">
        </div>
    </section>
    <section id="love_story">
        <div class="title">
            <img src="./assets/kembangckt.svg" alt="" width="100">
            <h1>Our Love Story</h1>
            <p class="text-center">We first crossed paths during a competitive game of trivia at the local tavern. </p>
        </div>
        <div class="container">
            <div class="row first d-flex align-items-center">
                <div class="col-sm-6 text-end">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum incidunt, enim, omnis quaerat,
                    blanditiis id ipsa delectus ullam autem dicta aspernatur similique. Voluptas consequatur obcaecati
                    necessitatibus aperiam voluptates ea odio.
                </div>
                <div class="col-sm-6 text-center">
                    <img src="{{ asset('img/default/nopict.jpg') }}" alt="" width="300">
                </div>
            </div>
            <div class="row second d-flex align-items-center">
                <div class="col-sm-6 text-center">
                    <img src="{{ asset('img/default/nopict.jpg') }}" alt="" width="300">
                </div>
                <div class="col-sm-6 text-end">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum incidunt, enim, omnis quaerat,
                    blanditiis id ipsa delectus ullam autem dicta aspernatur similique. Voluptas consequatur obcaecati
                    necessitatibus aperiam voluptates ea odio.
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container-fluid">
            <div class="gallery-images">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
                <img src="{{ asset('img/default/nopict.jpg') }}" alt="" class="gallery-image">
            </div>
        </div>
    </section>
    <section id="tgl_acara">
        <img src="./assets/daunpink.svg" alt="" class="bottom-right">
        <img src="./assets/daunpink.svg" alt="" class="bottom-left">
        <div class="couple-initials">
            <h1>S</h1>
            <h1 class="text-indah">&</h1>
            <h1>T</h1>
        </div>
        <p>SAVE THE DATE</p>
        <h3>The Wedding</h3>
        <div class="couple-date">
            <p>Oktober</p>
            <h1 class="text-date">10</h1>
            <P>2023</P>
        </div>
        <div class="countdown">
            <div class="days">
                <h1>0</h1>
                <p>Days</p>
            </div>
            <div class="hours">
                <h1>0</h1>
                <p>Hours</p>
            </div>
            <div class="minutes">
                <h1>0</h1>
                <p>Minutes</p>
            </div>
            <div class="seconds">
                <h1>0</h1>
                <p>Seconds</p>
            </div>
        </div>
    </section>
</body>

</html>