<!doctype html>
<html lang="en">
@extends('admin.popper')
<head>
    <title>SuperAdmin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/public/pass/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{ asset('/public/assets01/images/favicon.png') }}">

</head>

<body class="img js-fullheight" style="background-image: url('{{ asset('/public/assets01/images/banner-bg.jpg') }}');">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section" style="font-size: 100px;"><i class='bx bxs-lock'></i></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center" style="font-weight: bold;">Password</h3>
                        <div class="form-group">
                            <input id="myText" type="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button id="myBtn" onclick="myFunction()"
                                class="form-control btn btn-primary submit px-3">Enter</button>
                        </div>

                    </div>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="{{ asset('/public/pass/js/popper.js') }}"></script>
            <script src="{{ asset('/public/pass/js/jquery.min.js') }}"></script>
            <script src="{{ asset('/public/pass/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('/public/pass/js/popper.main.js') }}"></script>
            <script src="{{ asset('/public/pass/js/main.js') }}"></script>
            
            <script>
                var input = document.getElementById("myText");
                input.addEventListener("keypress", function(event) {
                    if (event.key === "Enter") {
                        event.preventDefault();
                        document.getElementById("myBtn").click();
                    }
                });
                
                function myFunction() {
                    var x = document.getElementById("myText").value;
                
                    if (x === popper) {
                        window.location = "/admin/ioeiropesdfk;m,cvxc.zvmxc.v,mfk;ssejkpofksefsk;fsk;dszxm.c,mx,cxmzc.mzfmcvemfpowekfpw39rw349-23432r5iwefmcvx,vm.vm.cx,vmx.v,mxc.,vmk";
                
                
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "(SuperAdmin เท่านั้นที่มีสิทธิเข้าถึง!)",
                            timer: 5000,
                            timerProgressBar: true
                        });
                    }
                
                }
            </script>
        </div>
    </section>
</body>

</html>
