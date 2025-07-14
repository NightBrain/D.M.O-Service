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
            padding-top: 250px;
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
    <div class="container h-100 d-flex mb-5">
        <div class="modal-dialog modal-dialog-centered mb-5">
            <div class="modal-content p-4" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-center my-3">
                        <a href="/">
                            <img class="rounded mx-auto d-block" src="{{ asset('/public/assets01/images/favicon.png') }}"
                                style="width: 100px" alt="">
                        </a>
                        <div class="mx-4 mt-4" style="color: #fff">
                            ลืมรหัสผ่านหรือไม่? ไม่มีปัญหา. <br>เพียงแจ้งให้เราทราบที่อยู่อีเมลของคุณ <br>
                            แล้วเราจะส่งลิงก์รีเซ็ตรหัสผ่านให้คุณทางอีเมล <br> ซึ่งคุณสามารถเลือกรหัสผ่านใหม่ได้.
                        </div>
                        <div class="mx-4 mt-4" style="color: #fff">
                            <x-auth-session-status :status="session('status')" />
                        </div>


                        <main class="form-signin w-100 m-auto" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="text-center">
                                    <div class="form-floating">
                                        <input type="email" name="email" :value="old('email')"
                                            class="form-control rounded-4" id="floatingInput"
                                            placeholder="name@example.com" required autofocus>
                                        <label for="floatingInput" style="color: #CCD0D2">ชื่อผู้ใช้/อีเมล์</label>
                                        <div class="mx-4 mt-4" style="color: #fff">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>


                                    </div>
                                    <div class="form-floating">
                                        <x-primary-button type="submit"
                                            style="background-color: #556AD0; border-radius: 10px;">
                                            {{ __('Email Password Reset Link') }}
                                        </x-primary-button>

                                    </div>
                                    <div class="mx-2 mt-3">
                                        <a href="{{ route('login') }}">Back to Login</a>
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
