<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Working</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('/public/assets01/images/favicon.png') }}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/templatemo-liberty-market.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        .text {
            width: 250px;
            word-wrap: break-word;
            padding: 5px;
            text-align: center;
        }
    </style>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    @extends('nav')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h2>WORKING</h2>

                </div>
            </div>
        </div>
        <div class="featured-explore">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-features owl-carousel">
                            @foreach ($users as $item)
                                <div class="item">
                                    <div class="thumb">
                                        <img src="{{ asset($item->imagework) }}" alt=""
                                            style=" width: 410px; height: 300px; object-fit: cover; border-radius: 30px;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="discover-items">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2>Technician's <em>aptitude</em>.</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                </div>
                @foreach ($users as $item)
                    <div class="col-lg-3">
                        <div class="item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <span class="author">
                                        <img src="{{ asset($item->imageadmin) }}" alt=""
                                            style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                                    </span>
                                    <img src="{{ asset($item->imagework) }}" alt=""
                                        style=" width: 250px; height: 150px; object-fit: cover; border-radius: 30px;">
                                    <div class="line-dec"></div>
                                    <h4 class="text">{{ $item->title }}</h4>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
