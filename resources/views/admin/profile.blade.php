<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <title>Profile | Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/templatemoe.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('/public/assets01/images/favicon.png') }}">
    <style>
        body {
            background-image: url('{{ asset('/public/assets01/images/banner-bg.jpg') }}');
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            padding-top: 30px;
            padding-bottom: 240px;
            height: 1600px;
            background-color: #2a2a2a;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        .gd {
            font-size: 40px;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, #6366F1, #A855F7, #EC4899);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            font-weight: bold
        }
    </style>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body>
    @extends('admin.nav')
    <!-- Modal -->
    <div class="container">
        <div class="container" style="margin-top: 70px">
            <div class="modal-content p-5" style="background-color: #18191bf1; border-radius: 30px;">
                <div class="modal-body">
                    <div class="text-center">
                        <a href="/home">
                            <img class="rounded mx-auto d-block" src="{{ asset('/public/assets01/images/logo.png') }}"
                                style="width: 300px" alt="">
                        </a>
                        <h1 class="fs-4 text-center mt-4">Registrant information</h1>

                        <main class="form-signin w-100 m-auto mt-3" data-bs-theme="dark">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.updatepa', ['user' => $user]) }}">
                                @csrf
                                @method('put')
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mt-4 d-none">
                                                <input type="text" name="usertype" class="form-control rounded-4"
                                                    id="usertype" placeholder="Password" required
                                                    autocomplete="current-password" value="{{ $user->usertype }}">
                                                <label for="usertype" style="color: #CCD0D2">usertype</label>
                                                <x-input-error :messages="$errors->get('usertype')" class="mt-2" />
                                            </div>
                                            <div class="form-floating mt-4">
                                                <input type="text" name="firstname" class="form-control rounded-4"
                                                    id="firstname" placeholder="Password" required
                                                    autocomplete="current-password" value="{{ $user->firstname }}">
                                                <label for="firstname" style="color: #CCD0D2">Firstname</label>
                                                <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="text" name="lastname" class="form-control rounded-4"
                                                    id="lastname" placeholder="Password" required
                                                    autocomplete="current-password" value="{{ $user->lastname }}">
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
                                                    autocomplete="current-password" value="{{ $user->nickname }}">
                                                <label for="nickname" style="color: #CCD0D2">Nickname</label>
                                                <x-input-error :messages="$errors->get('nickname')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mt-4">
                                                <input type="number" name="phonenumber" class="form-control rounded-4"
                                                    id="phonenumber" placeholder="Password" required
                                                    autocomplete="current-password" maxlength="10"
                                                    value="{{ $user->phonenumber }}">
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
                                                    autocomplete="username" value="{{ $user->email }}">
                                                <label for="email" style="color: #CCD0D2">Email</label>
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mt-4">
                                                <div class="mt-4">
                                                    <label for="formFileLg" class="form-label"
                                                        style="color: #fff;">Image</label><br>
                                                    <img src="{{ asset($user->image) }}"
                                                        class="rounded-circle float-center mb-3"
                                                        style="max-width: 50px" height="50px" alt="">
                                                    <input class="form-control form-control-lg" id="formFileLg"
                                                        type="file" name="image" placeholder="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <button class="btn w-100 py-2 mt-5 rounded-4 form-control" type="submit"
                                            style="background-color: #556AD0;">Edit</button>
                                    </div>
                                </div>

                            </form>
                        </main>

                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="container mt-4">
                    <div class="modal-content p-5" style="background-color: #18191bf1; border-radius: 30px;">
                        <div class="modal-body">
                            <div class="text-center">
                                <h1 class="fs-4 text-center">Update Password</h1>
                                <p>Ensure your account is using a long, random password to stay secure.</p>

                                <main class="form-signin w-100 m-auto mt-3" data-bs-theme="dark">
                                    <x-auth-session-status class="mb-4" :status="session('status')" />
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ route('password.update') }}">
                                        @csrf
                                        @method('put')
                                        <div class="text-center">
                                            <div class="col">
                                                <div class="form-floating mt-4">
                                                    <input type="password" name="current_password"
                                                        class="form-control rounded-4" id="firstname"
                                                        placeholder="Password" required
                                                        autocomplete="current-password">
                                                    <label for="firstname" style="color: #CCD0D2">Current
                                                        Password</label>
                                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mt-4">
                                                    <input type="password" name="password"
                                                        class="form-control rounded-4" id="lastname"
                                                        placeholder="Password" required
                                                        autocomplete="current-password">
                                                    <label for="lastname" style="color: #CCD0D2">New Password</label>
                                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mt-4">
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control rounded-4" id="lastname"
                                                        placeholder="Password" required
                                                        autocomplete="current-password">
                                                    <label for="lastname" style="color: #CCD0D2">Comfirm
                                                        Password</label>
                                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <x-primary-button class="btn w-100 py-2 mt-5 rounded-4 form-control"
                                                    style="background-color: #556AD0;">{{ __('Save') }}</x-primary-button>

                                                @if (session('status') === 'password-updated')
                                                    <p x-data="{ show: true }" x-show="show" x-transition
                                                        x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
                                                        {{ __('Saved.') }}</p>
                                                @endif
                                            </div>
                                        </div>

                                    </form>
                                </main>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container mt-4">
                    <div class="modal-content p-5" style="background-color: #18191bf1; border-radius: 30px;">
                        <div class="modal-body my-5">
                            <div class="text-center my-4">
                                <h1 class="fs-4 text-center mt-5">Delete Account</h1>
                                <p>Once your account is deleted, all of its resources and data will be permanently
                                    deleted. Before deleting your account, please download any data or information that
                                    you wish to retain.</p>

                                <main class="form-signin w-100 m-auto mt-3" data-bs-theme="dark">
                                    <div class="text-center">
                                        <div class="form-floating">
                                            <button class="btn w-100 py-2 mt-5 rounded-4 form-control"
                                                style="background-color: #DC2626; font-weight: bold;"
                                                data-bs-toggle="modal" data-bs-target="#staticBackdrop">DELETE
                                                ACCOUNT</button>
                                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" style="color: #DC2626;"/>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
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
                                                        <img class="rounded mx-auto d-block"
                                                            src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExNWtwNmtydXN5bzk3OWhyajA5NzcxNmJkdjlleTVqdG1rN2Z3ZXg2ciZlcD12MV9zdGlja2Vyc19zZWFyY2gmY3Q9cw/AsL3dRShYSDSRArGhW/giphy.gif"
                                                            style="width: 100px" alt="">

                                                        <h1 class="fs-4 text-center mt-4 gd">Are you sure ? <br>
                                                            you want to delete your account</h1>
                                                        <p class="mt-2 text-center">Once your account is deleted, all
                                                            of its resources and data
                                                            will be permanently deleted. Please enter your password to
                                                            confirm you would like to permanently delete your account.
                                                        </p>

                                                        <main class="form-signin w-100 m-auto mt-5"
                                                            data-bs-theme="dark">
                                                            <form method="POST"
                                                                action="{{ route('profile.destroy') }}">
                                                                @csrf
                                                                @method('delete')
                                                                <div class="text-center">
                                                                    <div class="form-floating mt-3">
                                                                        <input type="password" name="password"
                                                                            class="form-control rounded-4"
                                                                            id="floatingPassword"
                                                                            placeholder="Password" required
                                                                            autocomplete="current-password">
                                                                        <label for="floatingPassword"
                                                                            style="color: #CCD0D2">Password</label>
                                                                    </div>
                                                                    <div class="form-floating">
                                                                        <x-danger-button
                                                                            class="btn w-100 py-2 mt-4 rounded-4 form-control"
                                                                            type="submit"
                                                                            style="background-color: #DC2626;">
                                                                            {{ __('Delete Account') }}
                                                                        </x-danger-button>
                                                                    </div>
                                                                </div>
                                                                <p class="mt-5 mb-3 text-body-secondary text-center">
                                                                    Copyright ©2024 D.M.O Service All
                                                                    Rights Reserved</p>
                                                            </form>
                                                        </main>

                                                    </div>

                                                </div>
                                            </div>
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
    </div>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ url('/public/assets01/js/isotope.min.js') }}"></script>
    <script src="{{ url('/public/assets01/js/owl-carousel.js') }}"></script>

    <script src="{{ url('/public/assets01/js/tabs.js') }}"></script>
    <script src="{{ url('/public/assets01/js/popup.js') }}"></script>
    <script src="{{ url('/public/assets01/js/custom.js') }}"></script>

</body>

</html>
