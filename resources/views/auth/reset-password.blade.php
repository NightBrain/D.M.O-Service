<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>D.M.O Service</title>

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
            padding-top: 200px;
            padding-bottom: 240px;
            height: 970px;
            background-color: #2a2a2a;
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
    <div class="container mb-5">
        <div class="container mb-5" style="width: 480px">
            <div class="modal-content p-4" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-center mt-3">
                        <a href="/">
                            <img class="rounded mx-auto d-block" src="{{ asset('/public/assets01/images/favicon.png') }}"
                                style="width: 100px" alt="">
                        </a>
                        <h1 class="fs-4 text-center mt-4">ล็อกอินบัญชี</h1>

                        <main class="form-signin w-100 m-auto mt-5" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <div class="text-center">
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="form-floating">
                                        <input type="email" name="email"
                                            value="{{ $request->email }}"class="form-control rounded-4"
                                            id="floatingInput" placeholder="name@example.com" required autofocus
                                            autocomplete="username">
                                        <label for="floatingInput" style="color: #CCD0D2">ชื่อผู้ใช้/อีเมล์</label>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="form-floating mt-4">
                                        <input type="password" name="password" class="form-control rounded-4"
                                            id="floatingPassword" placeholder="Password" required
                                            autocomplete="new-password">
                                        <label for="floatingPassword" style="color: #CCD0D2">รหัสผ่าน</label>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-floating mt-4">
                                        <input type="password" name="password_confirmation"
                                            class="form-control rounded-4" id="floatingPasswordnew"
                                            placeholder="Password" required autocomplete="new-password">
                                        <label for="floatingPasswordnew" style="color: #CCD0D2">ยืนยันรหัสผ่าน</label>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <div class="form-floating">
                                        <x-primary-button class="btn w-100 py-2 mt-5 rounded-4 form-control"
                                            type="submit"
                                            style="background-color: #556AD0;">{{ __('Reset Password') }}</x-primary-button>
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
