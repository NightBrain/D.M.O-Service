<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Ourteam</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('assets01/images/favicon.png') }}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/templatemo-liberty-market.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
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

    <div class="page-heading normal-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>OURTEAM</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="item-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2>Executive <em>D.M.O Service.</em></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="left-image">
                                    <img src="{{ asset('/public/assets01/images/dumex.jpg') }}" alt=""
                                        style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;">
                                </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                                <h2>CEO</h2> <br>
                                <h5>KRITSANAI DEENU</h5>
                                <h6>DUMEX</h6> <br>

                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#1DA7FC"><i
                                            class='bx bxl-facebook-circle'></i> : </div>
                                    <div style="color: #fff">Kritsanai Deenu</div>
                                </div>
                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#26c040"><i
                                            class='bx bxs-message-rounded-dots'></i> : </div>
                                    <div style="color: #fff"> @D.M.O_01</div>
                                </div>
                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#e42b62"><i
                                            class='bx bxl-instagram-alt'></i> :</div>
                                    <div style="color: #fff"> _mex_Kritsanai</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="left-image">
                                    <img src="{{ asset('/public/assets01/images/ohm.jpg') }}" alt=""
                                        style="border-radius: 67% 33% 34% 66% / 44% 20% 80% 56% ;">
                                </div>
                            </div>
                            <div class="col-lg-5 align-self-center">
                                <h2>COO</h2> <br>
                                <h5 style="font-size: 16px">TEERAPONG THUMMASUNTRA</h5>
                                <h6>OHM</h6> <br>

                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#1DA7FC"><i
                                            class='bx bxl-facebook-circle'></i> : </div>
                                    <div style="color: #fff">Teerapong Thummasuntra</div>
                                </div>
                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#26c040"><i
                                            class='bx bxs-message-rounded-dots'></i> : </div>
                                    <div style="color: #fff"> @D.M.O_02</div>
                                </div>
                                <div class="d-flex" style="font-size: 17px">
                                    <div style="margin-right:5px;  font-weight: bold; color:#e42b62"><i
                                            class='bx bxl-instagram-alt'></i> :</div>
                                    <div style="color: #fff"> ohmozxco47</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="current-bid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mini-heading">
                                    <h4>Team D.M.O Service.</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">

                            </div>
                            @foreach ($user as $item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="item">
                                        <div class="left-img">
                                            <img src="{{ asset($item->image) }}" />
                                        </div>
                                        <div class="right-content">
                                            <h4>{{ $item->firstname }} {{ $item->lastname }}</h4>
                                            <p>{{ $item->nickname }}</p>
                                            <div class="line-dec"></div>
                                            <h6>Starting Work</h6>
                                            <span class="date" style="color: #1DA7FC">{{ $item->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
