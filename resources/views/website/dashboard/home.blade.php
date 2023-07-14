@extends('website.layouts.master')

@section('content')
    <!-- home  -->
    <section id="home">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active" id="uni-bg1">
                    <div id="home-content1">
                        <div class="uni-content">
                            <h1 class="animate__animated animate__fadeInRight animate__delay-2s">The Best University</h1>
                            <p class="animate__animated animate__fadeInRight animate__delay-3s">Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                            <button class="btn btn-success fs-5 mt-4 animate__animated animate__fadeInRight animate__delay-4s">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="uni-bg2">
                    <div id="home-content2">
                        <div class="uni-content">
                            <h1>Education For Better</h1>
                            <p>Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                            <button class="btn btn-success fs-5 mt-4">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="uni-bg3">
                    <div id="home-content3">
                        <div class="uni-content">
                            <h1>Achieving Knowledge</h1>
                            <p>Many colleges and universities have designated mottos that represent the culture of that institution identify themselves in a few words.</p>
                            <button class="btn btn-success fs-5 mt-4">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </section>


    <!-- about  -->
    <section id="about-us">
        <div class="container-lg">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5" id="about-text">
                    <h1>Welcome to our campus</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ducimus illo, praesentium eveniet voluptates laboriosam quas delectus, excepturi tempora, nemo repellendus sed voluptatem distinctio molestiae nulla quidem? Rem!</p>
                    <ul>
                        <li>Building our community</li>
                        <li>Book, library and store</li>
                    </ul>
                    <button class="btn btn-success mt-3 mb-3 px-3">Read More<i class="fa-solid fa-arrow-right ms-1"></i></button>
                </div>
                <div class="col-lg-7" id="about-image">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <img src="{{ asset('image/about-img1.jpg') }}" class="d-block w-100 rounded">
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <img src="{{ asset('image/about-img2.jpg') }}" class="d-block w-100 rounded">
                                </div>
                                <div class="col-md-12 mt-4">
                                    <img src="{{ asset('image/about-img3.jpg') }}" class="d-block w-100 rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- course  -->
    <section id="courses">
        <h1>Our Courses</h1>
        <div class="title-border text-center mb-3">
            <span class="lg"></span>
            <span class="md"></span>
            <span class="sm"></span>
        </div>

        <div class="container swiper">
            <div class="card-slider">
                <div class="swiper-wrapper pb-5">
                    <div class="swiper-slide">
                        <div class="card1 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course1.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Computer Science</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></label>
                                        <span>
                                            <p>20 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>65 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>8 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$180</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card2 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course2.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Marketing Business</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></label>
                                        <span>
                                            <p>30 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>70 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>8 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$160</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card3 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course3.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Architecture Design</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></label>
                                        <span>
                                            <p>18 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>55 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>7 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$190</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card4 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course4.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Medical Technology</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></label>
                                        <span>
                                            <p>25 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>85 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>6 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$110</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card5 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course5.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Performing Arts</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></label>
                                        <span>
                                            <p>15 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>100 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>5 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$150</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card6 border border-1 rounded" style="width: 18rem;">
                            <img src="{{ asset('image/course6.jpg') }}" class="card-img-top">
                            <div class="card-body px-2">
                                <h4 class="card-title py-3">Psychology</h4>
                                <div class="card-text">
                                    <div class="d-flex">
                                        <label class="text-warning me-5"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></label>
                                        <span>
                                            <p>14 Reviews</p>
                                        </span>
                                    </div>
                                </div>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi vel accusamus placeat aliquam aliquid cupiditate harum qui?</p>
                            </div>
                            <hr>
                            <div class="card-footer d-flex align-items-center justify-content-around">
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i class="fa-solid fa-headphones me-2"></i>90 lectures
                                    </li>
                                    <li class="">
                                        <i class="fa-solid fa-clock me-2"></i>7 hours
                                    </li>
                                </ul>
                                <h4 class="text-success fs-4">
                                    <span>$170</span>
                                </h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination text-center"></div>
            </div>
        </div>
    </section>


    <!-- event  -->
    <section id="events">
        <h1>Our Events</h1>
        <div class="title-border text-center mb-3">
            <span class="lg"></span>
            <span class="md"></span>
            <span class="sm"></span>
        </div>
        <div class="container-lg">
            <div class="row" >
                <div class="col-lg-6 mb-4" id="card7">
                    <div class="card bg-body-tertiary border border-1 rounded">
                        <div class="event-block">
                            <div class="event-img">
                                <img src="{{ asset('image/event1.jpg') }}" class="w-100">
                            </div>
                            <div class="card-body" id="card_body">
                                <h4 class="card-title">Business Conference</h4>
                                <span><i class="fa-solid fa-clock me-2"></i>01:30 PM - 04:30 PM</span>
                                <label class="pt-2 pb-2 text-dark-emphasis">Nemo enim ipsam voluptatem nisi voluptate quam odit saepe except aspernatur aut fugit.</label>
                                <span>Speaker : <span style="font-weight: 500;">John Sminth</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" id="card8">
                    <div class="card bg-body-tertiary border border-1 rounded">
                        <div class="event-block">
                            <div class="event-img">
                                <img src="{{ asset('image/event2.jpg') }}" class="w-100">
                            </div>
                            <div class="card-body" id="card_body">
                                <h4 class="card-title">Craft Workshops</h4>
                                <span><i class="fa-solid fa-clock me-2"></i>09:00 AM - 09:30 PM</span>
                                <label class="pt-2 pb-2 text-dark-emphasis">Nemo enim ipsam voluptatem nisi voluptate quam odit saepe except aspernatur aut fugit.</label>
                                <span>Speaker : <span style="font-weight: 500;">Alexa Zone</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" id="card9">
                    <div class="card bg-body-tertiary border border-1 rounded">
                        <div class="event-block">
                            <div class="event-img">
                                <img src="{{ asset('image/event3.jpg') }}" class="w-100">
                            </div>
                            <div class="card-body" id="card_body">
                                <h4 class="card-title">Mentorship Program</h4>
                                <span><i class="fa-solid fa-clock me-2"></i>09:20 AM - 12:00 AM</span>
                                <label class="pt-2 pb-2 text-dark-emphasis">Nemo enim ipsam voluptatem nisi voluptate quam odit saepe except aspernatur aut fugit.</label>
                                <span>Speaker : <span style="font-weight: 500;">Avil Mex</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4" id="card10">
                    <div class="card bg-body-tertiary border border-1 rounded">
                        <div class="event-block">
                            <div class="event-img">
                                <img src="{{ asset('image/event4.jpg') }}" class="w-100">
                            </div>
                            <div class="card-body" id="card_body">
                                <h4 class="card-title">Technical Events</h4>
                                <span><i class="fa-solid fa-clock me-2"></i>10:00 AM - 09:00 PM</span>
                                <label class="pt-2 pb-2 text-dark-emphasis">Nemo enim ipsam voluptatem nisi voluptate quam odit saepe except aspernatur aut fugit.</label>
                                <span>Speaker : <span style="font-weight: 500;">Venil Monts</span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- pages  -->
    <section id="teachers">
        <h1>Our Experience Advisor</h1>
        <div class="title-border text-center mb-4">
            <span class="lg"></span>
            <span class="md"></span>
            <span class="sm"></span>
        </div>
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div id="professor">
                        <img src="{{ asset('image/professor1.jpg') }}" class="w-100">
                        <div id="professor-socials">
                            <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-1 py-3 rounded-bottom bg-body-tertiary" id="test">
                        <h4>Steven Joe</h4>
                        <label class="text-muted">Professor</label>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div id="professor">
                        <img src="{{ asset('image/professor2.jpg') }}" class="w-100">
                        <div id="professor-socials">
                            <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-1 py-3 rounded-bottom bg-body-tertiary">
                        <h4>Genevi Peller</h4>
                        <label class="text-muted">Professor</label>
                    </div>
                </div>
                <div class="col-lg-4 mb-4" id="teacher3">
                    <div id="professor">
                        <img src="{{ asset('image/professor3.jpg') }}" class="w-100">
                        <div id="professor-socials">
                            <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                            <a href="javascript:void(0)"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="text-center border border-1 py-3 rounded-bottom bg-body-tertiary">
                        <h4>Kevin Tudor</h4>
                        <label class="text-muted">Professor</label>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- parents say  -->
    <section id="parents">
        <h1>What Parents Say</h1>
        <div class="title-border text-center mb-3">
            <span class="lg"></span>
            <span class="md"></span>
            <span class="sm"></span>
        </div>
        <div id="carouselExampleInterval" class="carousel slide container-lg" data-bs-ride="carousel">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="carousel-inner border border-1 rounded mx-auto py-4 px-5 bg-body-tertiary" id="parents-carousel">
                        <div class="carousel-item active text-center" data-bs-interval="3000" id="carousel-item">
                            <p>"Lorem1 ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur officia delectus consequatur veritatis dignissimos totam fugiat obcaecati mollitia velit nostrum qui, autem praesentium alias non earum omnis ipsam doloribus!</p>
                            <div class="d-flex d-block mx-auto mt-4" id="parents-detail">
                                <div class="mx-auto">
                                    <img src="{{ asset('image/networking.webp') }}" id="parents-img">
                                </div>
                                <div class="mx-auto">
                                    <h5>Alivin Coron</h5>
                                    <label>Networking</label>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center" data-bs-interval="3000" id="carousel-item">
                            <p>"Lorem2 ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur officia delectus consequatur veritatis dignissimos totam fugiat obcaecati mollitia velit nostrum qui, autem praesentium alias non earum omnis ipsam doloribus!</p>
                            <div class="d-flex d-block mx-auto mt-4" id="parents-detail">
                                <div class="mx-auto">
                                    <img src="{{ asset('image/developer.webp') }}" id="parents-img">
                                </div>
                                <div class="mx-auto">
                                    <h5>Johny Calen</h5>
                                    <label>Developer</label>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center" data-bs-interval="3000" id="carousel-item">
                            <p>"Lorem3 ipsum dolor sit amet consectetur adipisicing elit. Aut aspernatur officia delectus consequatur veritatis dignissimos totam fugiat obcaecati mollitia velit nostrum qui, autem praesentium alias non earum omnis ipsam doloribus!</p>
                            <div class="d-flex d-block mx-auto mt-4" id="parents-detail">
                                <div class="mx-auto">
                                    <img src="{{ asset('image/designer.webp') }}" id="parents-img">
                                </div>
                                <div class="mx-auto">
                                    <h5>Jame Stalen</h5>
                                    <label>Designer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- latest news  -->
    <section id="latest">
        <h1>Latest News</h1>
        <div class="title-border text-center mb-3">
            <span class="lg"></span>
            <span class="md"></span>
            <span class="sm"></span>
        </div>
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('image/latest1.jpg') }}" class="card-img-top">
                        <div class="card-body px-2" id="latest-body">
                            <h6 class="card-title py-1" style="color: #1fae51 ;">Education</h6>
                            <p class="card-text">15 days satisfaction seminar education</p>
                            <label>3 March, 2023 - by <span style="color: #1fae51;">Sminth</span> </label>
                        </div>
                    </div>
            </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('image/latest2.jpg') }}" class="card-img-top">
                        <div class="card-body px-2" id="latest-body">
                            <h6 class="card-title py-1" style="color: #1fae51 ;">Knowledge</h6>
                            <p class="card-text">Expand your confidence knowledge</p>
                            <label>25 February, 2023 - by <span style="color: #1fae51;">Jarle</span> </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card mx-auto" style="width: 18rem;">
                        <img src="{{ asset('image/latest3.jpg') }}" class="card-img-top">
                        <div class="card-body px-2" id="latest-body">
                            <h6 class="card-title py-1" style="color: #1fae51 ;">Students</h6>
                            <p class="card-text">How i use my planner as a student</p>
                            <label>20 February, 2023 - by <span style="color: #1fae51;">John</span> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
