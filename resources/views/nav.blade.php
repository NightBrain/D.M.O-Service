<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img class="mx-3" src="{{ asset('/public/assets01/images/logo.png') }}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/"><i class='bx bx-home-heart bx-tada' style='color:#ffffff' ></i> HOME</a></li>
                        <li><a href="/working"><i class='bx bxs-briefcase bx-tada' style='color:#ffffff' ></i> WORKING</a></li>
                        <li><a href="/ourteam"><i class='bx bxs-user bx-tada' style='color:#ffffff' ></i> OURTEAM</a></li>
                        <li><a href="/contact"><i class='bx bxs-map bx-tada' style='color:#ffffff' ></i> CONTACT</a></li>
                        @if (Route::has('login'))
                            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <li><a href="{{ url('/home') }}"
                                        type="button" class="btn radius-5" style="background-color: #53c1fc;">DASHBOARD</a>
                                    </li>
                                @else
                                    <!-- Button trigger modal -->
                                    <li><a type="button" class="btn radius-5" style="background-color: #53c1fc;" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        LOG IN
                                    </a></li>

                                @endauth
                            </div>
                        @endif
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4" style="background-color: #18191bf1; border-radius: 30px;">
        <div class="modal-body">
            <div class="text-end">
                <a type="button" class="fs-1" data-bs-dismiss="modal" aria-label="Close"
                    style="color: #CCD0D2;"><i class='bx bx-x'></i></a><br>
                <img class="rounded mx-auto d-block" src="{{ asset('/public/assets01/images/favicon.png') }}"
                    style="width: 100px" alt="">
                <h1 class="fs-4 text-center mt-4">ล็อกอินบัญชี</h1>

                <main class="form-signin w-100 m-auto mt-5" data-bs-theme="dark">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control rounded-4" id="floatingInput"
                                    placeholder="name@example.com" required autocomplete="username">
                                <label for="floatingInput" style="color: #CCD0D2">ชื่อผู้ใช้/อีเมล์</label>
                                <div class="mx-4 mt-4" style="color: #ff0000">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                            <div class="form-floating mt-4">
                                <input type="password" name="password" class="form-control rounded-4" id="floatingPassword"
                                    placeholder="Password" required autocomplete="current-password">
                                <label for="floatingPassword" style="color: #CCD0D2">รหัสผ่าน</label>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="form-floating">
                                <x-primary-button class="btn w-100 py-2 mt-5 rounded-4 form-control" type="submit"
                                    style="background-color: #556AD0;">{{ __('Log in') }}</x-primary-button>
                            </div>
                        </div>
                        <div class="mx-2 mt-3 d-flex justify-content-between">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">ลืมรหัสผ่าน</a>
                            @endif
                            <a href="{{ route('register') }}">ลงทะเบียน</a>
                        </div>
                        <p class="mt-5 mb-3 text-body-secondary text-center">Copyright ©2024 D.M.O Service All
                            Rights Reserved</p>
                    </form>
                </main>

            </div>

        </div>
    </div>
</div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p style='color: #fff'>Copyright ©2024 D.M.O Service All rights reserved Developed by <a
                    href="https://github.com/NightBrain" target="_blank" style='color: #0040ff'>@NightBrain</a> & <a
                    href="https://www.facebook.com/chamali04" target="_blank" style='color: #0040ff'>@Chamali</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('/public/assets01/js/isotope.min.js') }}"></script>
    <script src="{{ asset('/public/assets01/js/owl-carousel.js') }}"></script>

    <script src="{{ asset('/public/assets01/js/tabs.js') }}"></script>
    <script src="{{ asset('/public/assets01/js/popup.js') }}"></script>
    <script src="{{ asset('/public/assets01/js/custom.js') }}"></script>