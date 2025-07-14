<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('/public/assets01/images/favicon.png') }}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/templatemoe.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>
        body {
            background-image: url('{{ asset('/public/assets01/images/banner-bg.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            padding-top: 25px;
            padding-bottom: 240px;
            height: 1100px;
            background-color: #2a2a2a;
        }
        :root::-webkit-scrollbar {
            display: none;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>
    @extends('navs')
    <!-- Modal -->
    <div class="container ">
        <div class="container" style="margin-top: 70px">
            <div class="modal-content p-5" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-center">
                        <a href="/">
                            <img class="rounded mx-auto d-block" src="{{ asset('/public/assets01/images/logo.png') }}"
                                style="width: 300px" alt="">
                        </a>
                        <h1 class="fs-4 text-center mt-3">Register</h1>

                        <main class="form-signin w-100 m-auto mt-2" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                                @csrf
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mt-4 d-none">
                                                <input type="text" name="usertype" class="form-control rounded-4"
                                                    id="usertype" placeholder="Password" required
                                                    autocomplete="current-password" value="user">
                                                <label for="usertype" style="color: #CCD0D2">usertype</label>
                                                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                                            </div>
                                            <div class="form-floating mt-4">
                                                <input type="text" name="firstname" class="form-control rounded-4"
                                                    id="firstname" placeholder="Password" required
                                                    autocomplete="current-password">
                                                <label for="firstname" style="color: #CCD0D2">Firstname</label>
                                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="text" name="lastname" class="form-control rounded-4"
                                                    id="lastname" placeholder="Password" required
                                                    autocomplete="current-password">
                                                <label for="lastname" style="color: #CCD0D2">Lastmane</label>
                                                <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="text" name="nickname" class="form-control rounded-4"
                                                    id="nickname" placeholder="Password" required
                                                    autocomplete="current-password">
                                                <label for="nickname" style="color: #CCD0D2">Nickname</label>
                                                <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="number" name="phonenumber" class="form-control rounded-4"
                                                    id="phonenumber" placeholder="Password" required
                                                    autocomplete="current-password" maxlength="10">
                                                <label for="phonenumber" style="color: #CCD0D2">Phonenumber</label>
                                                <x-input-error :messages="$errors->get('phonenumber ')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="email" name="email" class="form-control rounded-4"
                                                    id="email" placeholder="name@example.com" required
                                                    autocomplete="username">
                                                <label for="email" style="color: #CCD0D2">Email</label>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="password" name="password" class="form-control rounded-4"
                                                    id="Password" placeholder="Password" required
                                                    autocomplete="current-password">
                                                <label for="Password" style="color: #CCD0D2">Password</label>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="password" name="password_confirmation"
                                                    class="form-control rounded-4" id="conPassword"
                                                    placeholder="Password" required autocomplete="current-password">
                                                <label for="conPassword"
                                                    style="color: #CCD0D2">ConfirmPassword</label>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-4">
                                                <div class="mt-4">
                                                    <label for="formFileLg" class="form-label"
                                                        style="color: #fff;">Image</label>
                                                    <input class="form-control form-control-lg" id="formFileLg"
                                                        type="file" name="image" placeholder="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <x-primary-button class="btn w-100 py-2 mt-5 rounded-4 form-control"
                                            type="submit"
                                            style="background-color: #556AD0;">{{ __('Register') }}</x-primary-button>
                                    </div>
                                </div>
                                <div class="mx-2 mt-3">
                                    <a href="{{ route('login') }}">Already registered?</a>
                                </div>
                            </form>
                        </main>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ url('assets01/js/isotope.min.js') }}"></script>
    <script src="{{ url('assets01/js/owl-carousel.js') }}"></script>

    <script src="{{ url('assets01/js/tabs.js') }}"></script>
    <script src="{{ url('assets01/js/popup.js') }}"></script>
    <script src="{{ url('assets01/js/custom.js') }}"></script>

</body>

</html>
