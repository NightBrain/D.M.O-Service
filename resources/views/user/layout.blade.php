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

    <title>@yield ('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('/public/assets01/images/favicon.png') }}">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/templatemoe.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/assets01/css/button.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <style>
        .font {
            font-family: 'Kanit', sans-serif;
        }

        :root::-webkit-scrollbar {
            display: none;
        }
    </style>
    <!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
</head>

<body class="img">

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
    @extends('user.nav')

    <div class="ta"></div>
    <div class="container-fluid">
        <div class="container d-flex justify-content-between mt-4" style="max-width: 1600px;">
            <h1>@yield ('head')</h1> <div>@yield ('button')</div>
        </div>
        <div class="container p-5 mt-3 "
            style="background-color: #fff; border-radius: 30px; max-width: 1600px; height: 750px; overflow: auto;">
            @yield('content')
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
</body>

</html>
