<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONTARIO University and Education</title>

     <!-- bootstarp css  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <!-- font awesome  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animate  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

     <!-- swiper css  -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<!-- return to top  -->
<div id="return-to-top">
    <a href="#home"><i class="fa fa-angle-up"></i></a>
</div>

<!-- nav bar  -->
<nav class="navbar navbar-expand-lg p-0 bg-dark sticky-top shadow-lg">
    <div class="container-lg">
        <a class="navbar-brand" href="#">
            <div id="logo">
                <img src="{{ asset('image/uni-logo.png') }}">
                <h5>ONTARIO <br> <span>University</span></h5>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item col-3 col-lg-auto" id="nav-item" >
                    <a class="nav-link" aria-current="page" href="#home">HOME</a>
                </li>
                <li class="nav-item col-3 col-lg-auto">
                    <a class="nav-link" href="#about-us">ABOUT US</a>
                </li>
                <li class="nav-item col-3 col-lg-auto">
                    <a class="nav-link" href="#courses">COURSES</a>
                </li>
                <li class="nav-item col-3 col-lg-auto">
                    <a class="nav-link" href="#events">EVENTS</a>
                </li>
                <li class="nav-item col-3 col-lg-auto">
                    <a class="nav-link" href="#teachers">PROFESSOR</a>
                </li>
                <li class="nav-item col-4 col-lg-auto">
                    <a class="nav-link" href="{{ route('contact#homePage') }}">CONTACT US</a>
                </li>
                <li class="nav-item col-4 col-lg-auto">
                    <div class="dropdown d-inline">
                        <a href="" class="ml-3 text-white btn border border-1 dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user text-success me-2"></i> {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                            <a class="dropdown-item">
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button id="logoutButton" class="btn btn-danger text-white w-100" type="submit">
                                        <i class="fa-solid fa-right-from-bracket"></i>Logout
                                    </button>
                                </form>

                                <script>
                                    $(document).ready(function() {
                                        $('#logoutForm').submit(function() {
                                            $('#logoutButton').addClass('btn-disabled');
                                            $('#logoutButton').prop('disabled', true);
                                        });
                                    });
                                </script>

                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

    @yield('content')

<hr style="margin-top: 50px; margin-bottom: 50px;">

<!-- footer  -->
<section id="footer">
    <div class="container-fluid mt-5">
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="d-flex mb-2">
                    <img src="{{ asset('image/uni-logo.png') }}" class="w-25 d-block">
                    <h5>ONTARIO <br> <span>University</span></h5>
                </div>
                <p style="font-family: calibri; font-size: 13pt; color: rgb(98, 95, 95); margin-bottom :30px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, sequi debitis. Dolore, iste? Quam sint iste ea molestias aliquid, quo illum facilis maxime?</p>
                <div id="footer-social">
                    <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ps-4 mb-4">
                <div id="quick" class="container-lg">
                    <h4>Quick Links</h4>
                    <div class="mb-2">
                        <span class="lg"></span>
                        <span class="md"></span>
                        <span class="sm"></span>
                    </div>
                </div>
                <div class="container-md">
                    <div class="row" id="quick-links">
                        <div class="col-sm-6">
                            <ul>
                                <li><a>> About Us</a></li>
                                <li><a>> Courses Grid</a></li>
                                <li><a>> Course Details</a></li>
                                <li><a>> Events</a></li>
                                <li><a>> Event Details</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li><a>> Gallery</a></li>
                                <li><a>> Teachers</a></li>
                                <li><a>> FAQ</a></li>
                                <li><a>> Login</a></li>
                                <li><a>> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div id="quick" class="container-lg">
                    <h4>Get in Touch</h4>
                    <div class="mb-2">
                        <span class="lg"></span>
                        <span class="md"></span>
                        <span class="sm"></span>
                    </div>
                </div>
                <p style="font-family: calibri; font-size: 13pt; color: rgb(98, 95, 95); margin-bottom :30px; margin-left: 18px;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, sequi debitis. Dolore, iste?</p>
                <div class="container-md ms-2">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Subscribe With Us">
                        <button class="btn btn-success" type="button">Join</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="color: rgb(178, 175, 175); margin-top: 30px;">

    <div class="container-fluid mt-4">
        <div class="row text-center">
            <div class="col-lg-6 col-sm-6 mb-3" style="color: rgb(98, 95, 95);">
                <i class="fa-regular fa-copyright"></i> Copyright Ontario 2023. All Rights Reserved.
            </div>
            <div class="col-lg-6 col-sm-6" style="color: rgb(98, 95, 95);">
                Design and Developed By : HP ( William )
            </div>
        </div>
    </div>
</section>

</body>

{{-- jquery link  --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- swiper js  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- js link -->
<script src="{{ asset('js/script.js') }}"></script>

<!-- bootstrap js  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
