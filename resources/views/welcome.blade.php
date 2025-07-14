<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chewy&family=Itim&family=Kalam:wght@300&family=Kanit:wght@300&family=Lilita+One&display=swap"
        rel="stylesheet">

    <title>D.M.O Service</title>

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
        .font {
            font-family: 'Kanit', sans-serif;
        }

        .icon-container {
            width: 100px;
            height: 100px;
            position: relative;
        }

        .imgg {
            height: 100%;
            width: 100%;
            border-radius: 50%;
        }

        .status-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: grey;
            border: 2px solid white;
            bottom: 0;
            right: 0;
            position: absolute;
        }

        .status-circle-on {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: rgb(30, 255, 0);
            border: 2px solid white;
            bottom: 0;
            right: 0;
            position: absolute;
        }

        .text {
            width: 330px;
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


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="header-text">
                        <h2><i class='bx bxs-wrench bx-tada' style='color:#ffff'></i> D.M.O Service.</h2>
                        <h6 class="font">ยินดีต้องรับสู่เว็บไซต์ D.M.O Service.
                            เว็บไซต์ของเราให้บริการเกี่ยวกับ<br>การซ่อมบำรุ่งรักษา เช่น คอมพิวเตอร์, เครื่องปริ้น,
                            โน๊ตบุ๊ค, ฯลฯ</h6>
                        <div class="buttons">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                        <div class="main-button">
                                            <a type="button" href="{{ url('/home') }}">Repair Now!</a>
                                        </div>
                                    @else
                                        <div class="main-button">
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Repair
                                                Now!</a>
                                        </div>
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="owl-banner owl-carousel">
                        <div class="item">
                            <img src="{{ asset('/public/assets01/images/banner-03.gif') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/public/assets01/images/banner-01.gif') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('/public/assets01/images/banner-02.gif') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="categories-collections">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2>Steps and methods for sending <em>Repair</em> equipment</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bxs-user-plus bx-flashing fs-2 align-middle'
                                            style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Register</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bxs-message-rounded-error bx-tada fs-2 align-middle'
                                            style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Report a problem</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bxs-notification bx-tada fs-2 align-middle'
                                            style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Waiting for the technician to reply</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bxs-wrench bx-tada fs-2 align-middle' style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Send the machine for repair</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bx-repost bx-spin bx-rotate-180 fs-2 align-middle'
                                            style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Waiting for the technician to update</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="item">
                                    <div class="icon mb-3">
                                        <i class='bx bx-check bx-tada fs-2 align-middle' style='color:#53c1fc'></i>
                                    </div>
                                    <h4>Get the device back</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="collections">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <div class="line-dec"></div>
                                    <h2>Comments <em>Service users</em> D.M.O Service.</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 text-end mt-5">
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a class="p-3 fs-5" type='button' data-bs-toggle="modal"
                                                data-bs-target="#comment"
                                                style="background-color: #53c1fc; border-radius: 30px; color: #fff;font-weight: bold;">Comments</a>
                                        @else
                                            <!-- Button trigger modal -->
                                            <li><a type="button" class="p-3 fs-5"
                                                    style="background-color: #53c1fc; border-radius: 30px; color: #fff;font-weight: bold;"
                                                    data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                    Comment
                                                </a></li>

                                        @endauth
                                    </div>
                                @endif

                                <!-- Modal -->
                                <div class="modal fade" id="comment" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content p-4"
                                            style="background-color: #18191bf1; border-radius: 30px;">
                                            <div class="modal-body">
                                                <div class="text-end">
                                                    <a type="button" class="fs-1" data-bs-dismiss="modal"
                                                        aria-label="Close" style="color: #CCD0D2;"><i
                                                            class='bx bx-x'></i></a><br>

                                                    <h1 class="fs-1 text-center ">Comment</h1>

                                                    <main class="form-signin w-100 m-auto mt-4" data-bs-theme="dark">
                                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                                        <form method="post" enctype="multipart/form-data"
                                                            action="{{ route('user.comment') }}">
                                                            @csrf
                                                            @method('post')

                                                            <div class="text-center">

                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mt-4">
                                                                            <div class="mt-4">
                                                                                <label for="formFileLg"
                                                                                    class="form-label"
                                                                                    style="color: #fff;">Image
                                                                                    User</label><br>

                                                                                <input
                                                                                    class="form-control form-control-lg"
                                                                                    id="formFileLg" type="file"
                                                                                    name="imageuser"
                                                                                    placeholder="image">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-floating mt-4">
                                                                    <input type="text" name="nickname_c"
                                                                        class="form-control rounded-4" required
                                                                        autocomplete="username">
                                                                    <label for="floatingInput"
                                                                        style="color: #CCD0D2">ชื่อเล่น</label>
                                                                    <div class="mx-4 mt-4" style="color: #ff0000">
                                                                        <x-input-error :messages="$errors->get('nickname_c')"
                                                                            class="mt-2" />
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="mt-4">
                                                                            <div class="mt-4">
                                                                                <label for="formFileLg"
                                                                                    class="form-label"
                                                                                    style="color: #fff;">Image</label>
                                                                                <input
                                                                                    class="form-control form-control-lg"
                                                                                    id="formFileLg" type="file"
                                                                                    name="imagereview"
                                                                                    placeholder="image">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div>

                                                                    <textarea class="form-control rounded-4 mt-4" type="text" name="comment" placeholder="Comment" rows="3"></textarea>
                                                                </div>



                                                                <div class="mt-5 text-center mb-3">
                                                                    <button type="submit" class="p-3"
                                                                        style="background-color: #53c1fc; border-radius: 30px; color: #fff;font-weight: bold;">Comment</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </main>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="owl-collection owl-carousel">
                                    @foreach ($users as $items)
                                        <div class="item container">
                                            <div class="d-flex justify-content-center">
                                                <img style=" width: 410px; height: 300px; object-fit: cover;"
                                                    src="{{ asset($items->imagereview) }}" alt="">
                                            </div>
                                            <div class="down-content">
                                                <h4 class="d-flex">
                                                    <img src="{{ asset($items->imageuser) }}" alt=""
                                                        style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                                                    <div class="mx-3" style="margin-top: 10px">
                                                        {{ $items->nickname_c }}</div>
                                                </h4>
                                                <div class="text">
                                                    <p>
                                                        {{ $items->comment }}
                                                    </p>
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
        </div>
    </div>

    <div class="currently-market">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h2>Technician <em>working</em> at the moment</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="item d-flex justify-content-center">
                        @foreach ($user as $item)
                            <div class='icon-container mx-4'>
                                <img class="imgg" src="{{ asset($item->image) }}" />
                                @php
                                    $status = $item->activate;
                                @endphp
                                @if ($status == 1)
                                    <div class='status-circle-on'>
                                    </div>
                                @elseif ($status == 0)
                                    <div class='status-circle'>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>







</body>

</html>
