<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


@if(session('notification'))
    <div class="alert alert-success">
        {{ session('notification') }}
    </div>
@endif


    <div class="container-xxl  p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark  px-4 px-lg-5 py-3 py-lg-0">

                <a href="" class="navbar-brand p-0 d-lg-none">
                    <img src="./assets/img/logo.png" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse d-lg-flex justify-content-lg-around" id="navbarCollapse">
                    <div class="navbar-nav   py-0 pe-4">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        {{-- <a href="{{route('menu')}}" class="nav-item nav-link">Menu</a> --}}
                        <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
                        <a href="{{route('about')}}" class="nav-item nav-link">About</a>


                        <a href="{{route('list')}}"class="nav-item nav-link ">Shop</a>
                        <a href="{{route('contact')}}" class="nav-item nav-link ">Contact</a>
                    </div>

                    <a href="" class="navbar-brand p-0 d-none d-lg-block">
                        <img src="./assets/img/logo.png" alt="">

                    </a>

                    <div class="d-flex">

                        <div class="input-group searchform ">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                        fill="none">
                                        <rect x="0.726562" width="30.5455" height="32" rx="15.2727" fill="#C6AA58"
                                            fill-opacity="0.25" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.4474 11.1818C14.1835 11.1818 12.9713 11.6839 12.0776 12.5776C11.1839 13.4713 10.6818 14.6835 10.6818 15.9474C10.6818 17.2113 11.1839 18.4234 12.0776 19.3171C12.9713 20.2108 14.1835 20.7129 15.4474 20.7129C16.7113 20.7129 17.9234 20.2108 18.8171 19.3171C19.7108 18.4234 20.2129 17.2113 20.2129 15.9474C20.2129 14.6835 19.7108 13.4713 18.8171 12.5776C17.9234 11.6839 16.7113 11.1818 15.4474 11.1818ZM10.5348 11.0348C11.8377 9.73195 13.6048 9 15.4474 9C17.2899 9 19.057 9.73195 20.3599 11.0348C21.6628 12.3377 22.3947 14.1048 22.3947 15.9474C22.3947 17.0011 22.1553 18.0301 21.7067 18.9618C21.3967 19.6055 21.4434 20.397 21.9481 20.9026L22.6832 21.639C23.1088 22.0654 23.1082 22.7562 22.6818 23.1818C22.2554 23.6075 21.5647 23.6068 21.139 23.1804L20.4084 22.4485C19.9026 21.9418 19.1091 21.8946 18.4643 22.2055C17.532 22.6549 16.502 22.8947 15.4474 22.8947C13.6048 22.8947 11.8377 22.1628 10.5348 20.8599C9.23195 19.557 8.5 17.7899 8.5 15.9474C8.5 14.1048 9.23195 12.3377 10.5348 11.0348Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-1">

                            <a href="" class="navbar-brand p-0 d-none d-lg-block">
                                <svg width="55" height="45" viewBox="0 0 30 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.380859" width="49" height="51.3333" rx="24.5" fill="#C6AA58"
                                        fill-opacity="0.25" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.7356 19.8944C15.11 19.5593 15.5948 19.374 16.0972 19.374H33.7809C34.2833 19.374 34.7681 19.5593 35.1425 19.8944C35.5169 20.2295 35.7546 20.6909 35.8101 21.1902L37.3656 35.1902C37.3973 35.4756 37.3685 35.7645 37.281 36.0379C37.1935 36.3114 37.0493 36.5634 36.8578 36.7773C36.6663 36.9913 36.4318 37.1624 36.1696 37.2796C35.9075 37.3968 35.6236 37.4574 35.3365 37.4574H14.5417C14.2545 37.4574 13.9706 37.3968 13.7085 37.2796C13.4463 37.1624 13.2119 36.9913 13.0204 36.7773C12.8289 36.5634 12.6847 36.3114 12.5971 36.0379C12.5096 35.7645 12.4808 35.4756 12.5125 35.1902L14.068 21.1902C14.1235 20.6909 14.3612 20.2295 14.7356 19.8944ZM16.3583 21.7074L14.8675 35.124H35.0106L33.5198 21.7074H16.3583Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0417 17.3333C24.1908 17.3333 23.3747 17.6714 22.773 18.273C22.1714 18.8747 21.8333 19.6908 21.8333 20.5417V24.0417C21.8333 24.686 21.311 25.2083 20.6667 25.2083C20.0223 25.2083 19.5 24.686 19.5 24.0417V20.5417C19.5 19.0719 20.0839 17.6624 21.1231 16.6231C22.1624 15.5839 23.5719 15 25.0417 15C26.5114 15 27.921 15.5839 28.9602 16.6231C29.9995 17.6624 30.5833 19.0719 30.5833 20.5417V24.0417C30.5833 24.686 30.061 25.2083 29.4167 25.2083C28.7723 25.2083 28.25 24.686 28.25 24.0417V20.5417C28.25 19.6908 27.912 18.8747 27.3103 18.273C26.7086 17.6714 25.8926 17.3333 25.0417 17.3333Z"
                                        fill="white" />
                                </svg>

                            </a>
                        </div>
                           <div id="translate">
                            <img src="./assets/img/global1.png" alt="">
                            <!-- <i class="fa-solid fa-globe"></i> -->
                        </div>

                    </div>
                    <!-- <a href="" class="btn btn-primary py-2 px-4">Book A Table</a> -->

                </div>



            </nav>

            <div class="container-xxl p-0 m-0 py-md-5 bg-dark hero-header mb-5">
               <a href="{{route('renew')}}">
                <div class="alert membershipcard mt-5" role="alert">
                    Your membership is expiring soon. Renew now and enjoy exclusive discounts up to 50% on our delectable menu. Don't miss out on the flavors!
                  </div>
               </a>
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 mt-3 text-center text-lg-start mainbannertext">
                            <h5 class="createlinebanner ff-secondary text-start  fw-normal">Its Quick & Amusing!</h5>
                            <h1 class="mainheafin animated slideInLeft"><span>Th</span>e Art of speed <br>
                                food Quality</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit.
                                Varius sed pharetra dictum neque massa congue</p>
                            <a href="{{route('menu')}}" class="createlinebannertwo btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">See Menu</a>
                        </div>
                        <div class="col-lg-6 mt-3 text-center text-lg-end">
                            <img class="img-fluid" src="./assets/img/mainbaner.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->




        <!--################> About Section Start <############## -->
        <div class="container-xxl   ">
            <div class="container my-5 py-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 mt-3 text-center text-lg-start mainbannertextsecond">
                        <h5 class="  ff-secondary text-start  fw-normal">About us</h5>
                        <h1 class="mainheafinsecond animated slideInLeft"><span>We Create</span> the best
                            foody product</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque bibendum
                            non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat pretium donec id
                            elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac dapibus sit eu velit in
                            consequat.
                        </p>

                        <div class="listright pb-3">
                            <div><svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.01 12.0033C6.84157 12.155 6.62291 12.2389 6.39621 12.2389C6.16951 12.2389 5.95085 12.155 5.78242 12.0033L0.881001 7.45772C0.761114 7.35024 0.665222 7.21871 0.599576 7.0717C0.533929 6.92469 0.5 6.7655 0.5 6.60451C0.5 6.44351 0.533929 6.28432 0.599576 6.13731C0.665222 5.9903 0.761114 5.85877 0.881001 5.75129L1.49479 5.18199C1.74727 4.95412 2.07533 4.82797 2.41547 4.82797C2.75561 4.82797 3.08366 4.95412 3.33615 5.18199L6.39621 8.01963L14.6638 0.354017C14.9163 0.126142 15.2444 0 15.5845 0C15.9247 0 16.2527 0.126142 16.5052 0.354017L17.119 0.923318C17.2389 1.0308 17.3348 1.16233 17.4004 1.30934C17.4661 1.45635 17.5 1.61554 17.5 1.77653C17.5 1.93753 17.4661 2.09672 17.4004 2.24372C17.3348 2.39073 17.2389 2.52226 17.119 2.62975L7.01 12.0033Z"
                                        fill="white" />
                                </svg>
                                <span> Lacus nisi, et ac dapibus sit eu velit in consequat.</span>
                            </div>
                        </div>
                        <div class="listright pb-3">
                            <div><svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.01 12.0033C6.84157 12.155 6.62291 12.2389 6.39621 12.2389C6.16951 12.2389 5.95085 12.155 5.78242 12.0033L0.881001 7.45772C0.761114 7.35024 0.665222 7.21871 0.599576 7.0717C0.533929 6.92469 0.5 6.7655 0.5 6.60451C0.5 6.44351 0.533929 6.28432 0.599576 6.13731C0.665222 5.9903 0.761114 5.85877 0.881001 5.75129L1.49479 5.18199C1.74727 4.95412 2.07533 4.82797 2.41547 4.82797C2.75561 4.82797 3.08366 4.95412 3.33615 5.18199L6.39621 8.01963L14.6638 0.354017C14.9163 0.126142 15.2444 0 15.5845 0C15.9247 0 16.2527 0.126142 16.5052 0.354017L17.119 0.923318C17.2389 1.0308 17.3348 1.16233 17.4004 1.30934C17.4661 1.45635 17.5 1.61554 17.5 1.77653C17.5 1.93753 17.4661 2.09672 17.4004 2.24372C17.3348 2.39073 17.2389 2.52226 17.119 2.62975L7.01 12.0033Z"
                                        fill="white" />
                                </svg>
                                <span> Lacus nisi, et ac dapibus sit eu velit in consequat.</span>
                            </div>
                        </div>
                        <div class="listright pb-5">
                            <div><svg width="18" height="13" viewBox="0 0 18 13" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.01 12.0033C6.84157 12.155 6.62291 12.2389 6.39621 12.2389C6.16951 12.2389 5.95085 12.155 5.78242 12.0033L0.881001 7.45772C0.761114 7.35024 0.665222 7.21871 0.599576 7.0717C0.533929 6.92469 0.5 6.7655 0.5 6.60451C0.5 6.44351 0.533929 6.28432 0.599576 6.13731C0.665222 5.9903 0.761114 5.85877 0.881001 5.75129L1.49479 5.18199C1.74727 4.95412 2.07533 4.82797 2.41547 4.82797C2.75561 4.82797 3.08366 4.95412 3.33615 5.18199L6.39621 8.01963L14.6638 0.354017C14.9163 0.126142 15.2444 0 15.5845 0C15.9247 0 16.2527 0.126142 16.5052 0.354017L17.119 0.923318C17.2389 1.0308 17.3348 1.16233 17.4004 1.30934C17.4661 1.45635 17.5 1.61554 17.5 1.77653C17.5 1.93753 17.4661 2.09672 17.4004 2.24372C17.3348 2.39073 17.2389 2.52226 17.119 2.62975L7.01 12.0033Z"
                                        fill="white" />
                                </svg>
                                <span> Lacus nisi, et ac dapibus sit eu velit in consequat.</span>
                            </div>
                        </div>

                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">See Menu</a>
                    </div>
                    <div class="col-lg-6 mt-3 text-center text-lg-end">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="./assets/img/about1 (1).png" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 mt-3">
                                <img src="./assets/img/about1 (2).png" alt="" class="w-100">
                            </div>
                            <div class="col-md-6 mt-3">
                                <img src="./assets/img/about1 (3).png" alt="" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--################> About Section End<############## -->



        <!--Food Category Start -->
        <div class="container-xxl pt-5 pb-3 position-relative">
            <div class="container  ">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" mainbannertextsecond">
                        <h5 class="  ff-secondary   fw-normal"> Food Category</h5>
                        <h1 class="mainheafinsecond animated slideInLeft"><span>Famous Food </span>Categories</h1>


                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="overflow-hidden m-4 position-relative ">
                                <img class="img-fluid" src="./assets/img/cat1.png" alt="">

                                <div class="cardoffer1">
                                    <p>Save 30%</p>

                                </div>
                                <div class="cardoffer2">
                                    <p>Fast Food Dish</p>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="overflow-hidden m-4 position-relative ">
                                <img class="img-fluid" src="./assets/img/cat2 (1).png" alt="">

                                <div class="cardoffer1">
                                    <p>Save 30%</p>

                                </div>
                                <div class="cardoffer2">
                                    <p>Fast Food Dish</p>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="overflow-hidden m-4 position-relative ">
                                <img class="img-fluid" src="./assets/img/cat2 (2).png" alt="">

                                <div class="cardoffer1">
                                    <p>Save 30%</p>

                                </div>
                                <div class="cardoffer2">
                                    <p>Fast Food Dish</p>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="overflow-hidden m-4 position-relative ">
                                <img class="img-fluid" src="./assets/img/cat2 (3).png" alt="">

                                <div class="cardoffer1">
                                    <p>Save 30%</p>

                                </div>
                                <div class="cardoffer2">
                                    <p>Fast Food Dish</p>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="leeeevimg">
                <img src="./assets/img/leeeve (2).png" class="w-25" alt="">
             </div>
        </div>

        <!-- Food Category End -->

    </div>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" mainbannertextsecond">
                        <h5 class="  ff-secondary   fw-normal">Choose & pick</h5>
                        <h1 class="mainheafinsecond animated slideInLeft"><span>From Our </span> Menu</h1>


                    </div>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center   mb-5">
                        <li class="nav-item">
                            <a class="d-flex justify-content-center slidertestimg text-start mx-3 ms-0 pb-3 active"
                                data-bs-toggle="pill" href="#tab-1">

                                <div class="ps-3">
                                    <small class=" ">Breakfast</small>

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex justify-content-center slidertestimg text-start mx-3 pb-3"
                                data-bs-toggle="pill" href="#tab-2">

                                <div class="ps-3">
                                    <small class=" ">Lunch</small>

                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex justify-content-center slidertestimg text-start mx-3 me-0 pb-3"
                                data-bs-toggle="pill" href="#tab-3">

                                <div class="ps-3">
                                    <small class=" ">Dinner</small>

                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row ">
                                <div class="col-md-5 hero-headersecond ">
                                    <img src="./assets/img/ser.png" alt="" class="w-100">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-1.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-2.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-3.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-4.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-5.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-6.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row ">
                                <div class="col-md-5 hero-headersecond ">
                                    <img src="./assets/img/ser.png" alt="" class="w-100">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-1.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-2.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-3.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-4.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-5.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-6.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row ">
                                <div class="col-md-5 hero-headersecond ">
                                    <img src="./assets/img/ser.png" alt="" class="w-100">
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-1.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-2.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-3.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-4.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-5.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-6.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mt-3">
                                            <div class="d-flex justify-content-center slidertestimg">
                                                <img class="flex-shrink-0 img-fluid rounded" src="assets/img/menu-7.jpg" alt=""
                                                    style="width: 80px;">
                                                <div class="w-100 d-flex flex-column text-start ps-md-4">
                                                    <h5 class="  pb-2">
                                                        <span>Chicken Burger</span>
                                                        <p class=" mb-0">Ipsum ipsum clita erat amet dolor justo diam
                                                        </p>
                                                        <p class="text-primary mb-0">$115</p>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    <!-- Menu End -->



    <!-- Whuy Choose Us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 mt-3">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <!-- <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"> -->
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="./assets/img/why1.png">
                        </div>
                        <div class="col-6 d-flex align-items-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="assets/img/why2.png">
                        </div>
                        <div class="col-4 ">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="assets/img/why3.png">
                        </div>
                        <div class="col-4  ">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="assets/img/why4.png">
                        </div>
                        <div class="col-4  ">
                            <div class="d-flex flex-column">

                                <div>
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                        src="assets/img/why5.png">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                        src="assets/img/why6.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">

                    <div class=" mainbannertextsecond">
                        <h5 class="  ff-secondary   fw-normal">Why Choose us</h5>
                        <h1 class="mainheafinsecond animated slideInLeft"><span>Extra ordinary </span> taste
                            And Experienced </h1>


                    </div>


                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                        bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat pretium donec
                        id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac dapibus sit eu velit in
                        consequat.</p>
                    <div class="row">
                        <div class="col-md-3 p-4 text-center">
                            <div class="whyicons p-3">
                                <svg width="57" height="56" viewBox="0 0 57 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11.1759 21C10.9148 20.9994 10.6572 20.9405 10.4219 20.8274C10.1866 20.7144 9.97951 20.5501 9.81591 20.3466C9.65232 20.1432 9.53631 19.9057 9.47639 19.6516C9.41648 19.3975 9.41418 19.1332 9.46966 18.8781C10.8697 12.1406 18.854 7 28.5009 7C38.1478 7 46.1322 12.1406 47.5322 18.8781C47.5876 19.1332 47.5853 19.3975 47.5254 19.6516C47.4655 19.9057 47.3495 20.1432 47.1859 20.3466C47.0223 20.5501 46.8152 20.7144 46.5799 20.8274C46.3446 20.9405 46.087 20.9994 45.8259 21H11.1759Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M46 36.75V40.25C46 42.1065 45.2625 43.887 43.9497 45.1997C42.637 46.5125 40.8565 47.25 39 47.25H18C16.1435 47.25 14.363 46.5125 13.0503 45.1997C11.7375 43.887 11 42.1065 11 40.25V36.75"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M6.625 38.5L15.375 35L24.125 38.5L32.875 35L41.625 38.5L50.375 35"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M5.75 28H51.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>





                            </div>
                            <p class="pt-2">Fast Food</p>
                        </div>
                        <div class="col-md-3 p-4 text-center">
                            <div class="whyicons p-3">
                                <svg width="57" height="56" viewBox="0 0 57 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M49.5007 27.8691C49.5211 30.6515 48.986 33.4101 47.9267 35.9831C46.8674 38.5561 45.3054 40.8918 43.332 42.8535C35.2601 50.9253 22.0476 51.0128 13.8663 43.0503C10.8648 40.1296 8.80521 36.3781 7.95207 32.2779C7.09892 28.1777 7.49125 23.916 9.07862 20.0404C10.666 16.1649 13.3759 12.8525 16.8602 10.5288C20.3445 8.20515 24.444 6.97636 28.632 7.00034C28.894 7.00421 29.1519 7.06615 29.3871 7.1817C29.6224 7.29726 29.829 7.46355 29.9922 7.6686C30.1554 7.87365 30.2711 8.11234 30.3309 8.36749C30.3908 8.62263 30.3933 8.88787 30.3382 9.14409C30.1103 10.1604 30.112 11.2148 30.3433 12.2303C30.5746 13.2459 31.0296 14.197 31.6751 15.0144C32.3206 15.8318 33.1404 16.4948 34.0747 16.9551C35.009 17.4155 36.0343 17.6615 37.0757 17.6753C37.5399 17.6753 37.985 17.8597 38.3132 18.1879C38.6414 18.5161 38.8257 18.9612 38.8257 19.4253C38.8395 20.4668 39.0856 21.4921 39.5459 22.4264C40.0063 23.3607 40.6693 24.1804 41.4867 24.826C42.3041 25.4715 43.2552 25.9265 44.2708 26.1578C45.2863 26.389 46.3407 26.3908 47.357 26.1628C47.6132 26.1078 47.8784 26.1103 48.1336 26.1701C48.3887 26.23 48.6274 26.3457 48.8325 26.5089C49.0375 26.6721 49.2038 26.8787 49.3194 27.1139C49.4349 27.3491 49.4969 27.6071 49.5007 27.8691V27.8691Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M34.625 40.25C36.0747 40.25 37.25 39.0747 37.25 37.625C37.25 36.1753 36.0747 35 34.625 35C33.1753 35 32 36.1753 32 37.625C32 39.0747 33.1753 40.25 34.625 40.25Z"
                                        fill="white" />
                                    <path
                                        d="M20.625 38.5C22.0747 38.5 23.25 37.3247 23.25 35.875C23.25 34.4253 22.0747 33.25 20.625 33.25C19.1753 33.25 18 34.4253 18 35.875C18 37.3247 19.1753 38.5 20.625 38.5Z"
                                        fill="white" />
                                    <path
                                        d="M18.875 26.25C20.3247 26.25 21.5 25.0747 21.5 23.625C21.5 22.1753 20.3247 21 18.875 21C17.4253 21 16.25 22.1753 16.25 23.625C16.25 25.0747 17.4253 26.25 18.875 26.25Z"
                                        fill="white" />
                                    <path
                                        d="M30.25 29.75C31.6997 29.75 32.875 28.5747 32.875 27.125C32.875 25.6753 31.6997 24.5 30.25 24.5C28.8003 24.5 27.625 25.6753 27.625 27.125C27.625 28.5747 28.8003 29.75 30.25 29.75Z"
                                        fill="white" />
                                </svg>






                            </div>
                            <p class="pt-2">Fast Food</p>
                        </div>
                        <div class="col-md-3 p-4 text-center">
                            <div class="whyicons p-3">
                                <svg width="57" height="56" viewBox="0 0 57 56" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M28.5 38.5V50.75" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M19.75 50.75H37.25" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M17.9992 5.25H38.9992L44.7086 24.5656C45.0605 25.7756 44.9673 27.0715 44.4461 28.2187C43.0596 31.2864 40.8177 33.8891 37.9892 35.7147C35.1607 37.5403 31.8657 38.5113 28.4992 38.5113C25.1327 38.5113 21.8377 37.5403 19.0092 35.7147C16.1807 33.8891 13.9388 31.2864 12.5523 28.2187C12.0311 27.0715 11.9379 25.7756 12.2898 24.5656L17.9992 5.25Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.0781 21.9408C15.3969 20.6939 20.7781 18.9002 28.5 22.7502C36.725 26.8627 42.3031 24.5439 44.3375 23.3408"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>






                            </div>
                            <p class="pt-2">Fast Food</p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>

                    <div class="row  mb-4">
                        <div class="col-sm-6">
                            <div
                                class="d-flex justify-content-center slidertestimg border-start border-5 border-primary px-3 bg-white">
                                <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">30</h1>
                                <div class="ps-4">
                                    <p class="mb-0 text-black">Years of</p>
                                    <h6 class="text-uppercase mb-0 text-black">Experience</h6>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Ehy Choose Us End -->


        <!--#############> Deliver Banner Start <############-->
        <div class="container-xxl position-relative p-0">


            <div class="container-xxl  bg-dark hero-headerforthone mb-5">
                <div class="container  my-5 pt-5 pb-4 mainsubtext">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-6 ">
                                <div class="card1 my-5  d-flex justify-content-center align-items-center flex-column ">
                                    <img class="w-50 mb-5 " src="./assets/img/fourth.png" alt="">
                                    <h2> 420</h2>
                                    <p>Professional Chefs</p>
                                </div>

                            </div>
                            <div class="col-lg-3 col-6 ">
                                <div class="card1 my-5  d-flex justify-content-center align-items-center flex-column ">
                                    <img class="w-50 mb-5 " src="./assets/img/first.png" alt="">
                                    <h2> 320</h2>
                                    <p>Items Of Food</p>
                                </div>

                            </div>
                            <div class="col-lg-3 col-6 ">
                                <div class="card1 my-lg-5  d-flex justify-content-center align-items-center flex-column ">
                                    <img class="w-50 mb-5 " src="./assets/img/2nd.png" alt="">
                                    <h2> 30+</h2>
                                    <p>Years Of Experienced</p>
                                </div>

                            </div>
                            <div class="col-lg-3 col-6 ">
                                <div class="card1 my-lg-5  d-flex justify-content-center align-items-center flex-column ">
                                    <img class="w-50 mb-5 " src="./assets/img/thirld.png" alt="">
                                    <h2> 220</h2>
                                    <p>Happy Customers</p>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--#############> Deliver Banner End <############-->


        <!--################> Meet Our Team Start <###############  -->
        <!-- Meet Our Chef start -->


    <div class="container-xxl p-0 m-0 pt-5 pb-3 position-relative">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class=" mainbannertextsecond">
                    <h5 class="  ff-secondary   fw-normal"> Chefs</h5>
                    <h1 class="mainheafinsecond animated slideInLeft"><span>Meet Our</span> </span> Chef</h1>


                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="overflow-hidden m-4 position-relative ">
                            <img class="img-fluid" src="./assets/img/chef-One.png" alt="">


                            <div class="cardoffer333 py-2">
                                <p>D.Estwood</p>
                                <p class="fs-6 fw-normal text-start  ">Chief Chef</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="overflow-hidden m-4 position-relative ">
                            <img class="img-fluid" src="./assets/img/chef-Two.png" alt="">


                            <div class="cardoffer333 py-2">
                                <p>D.Scoriesh</p>
                                <p class="fs-6 fw-normal text-start  ">Assistant Chef</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="overflow-hidden m-4 position-relative ">
                            <img class="img-fluid" src="./assets/img/chef-three.png" alt="">


                            <div class="cardoffer333 py-2">
                                <p>M. William</p>
                                <p class="fs-6 fw-normal text-start  ">Advertising Chef</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center rounded overflow-hidden">
                        <div class="overflow-hidden m-4 position-relative ">
                            <img class="img-fluid" src="./assets/img/chef-four.png" alt="">


                            <div class="cardoffer333 py-2">
                                <p>W.Readfroad</p>
                                <p class="fs-6 fw-normal text-start  ">Chef</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="leevseconding">
            <img src="./assets/img/leeeve (1).png" class="w-25" alt="">
        </div>
    </div>
    <!-- Meet Our Chef end -->
        <!--################> Meet Our Team end <###############  -->











    <!--###################> Testimonial Start <###############-->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" mainbannertextsecond">
            <h5 class="  ff-secondary   fw-normal">Testimonials</h5>
            <h1 class="mainheafinsecond animated slideInLeft"><span>What our</span> client are saying </h1>


        </div>
        <div class="maintestimonail mt-5">

            <div class="testimonials">
                <input type="radio" name="testimonial" id="input-testimonial1" checked>
                <input type="radio" name="testimonial" id="input-testimonial2">
                <input type="radio" name="testimonial" id="input-testimonial3">
                <input type="radio" name="testimonial" id="input-testimonial4">
                <div class="testimonials-inner">
                    <div class="testimonial text-center">
                        <div class="testimonial-photo">
                            <div class="photo-background"></div>
                            <div class="photo-author"></div>
                        </div>

                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.3468 27.9133H7.60455C7.20697 27.9133 6.82567 27.7553 6.54454 27.4741C6.26341 27.1928 6.10547 26.8114 6.10547 26.4137V14.4166C6.10547 14.0189 6.26341 13.6375 6.54454 13.3562C6.82567 13.075 7.20697 12.917 7.60455 12.917H18.8477C19.2453 12.917 19.6266 13.075 19.9077 13.3562C20.1888 13.6375 20.3468 14.0189 20.3468 14.4166V30.9126C20.3468 32.9012 19.5571 34.8084 18.1514 36.2146C16.7457 37.6207 14.8393 38.4107 12.8513 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M42.0831 27.9133H29.3409C28.9433 27.9133 28.562 27.7553 28.2809 27.4741C27.9997 27.1928 27.8418 26.8114 27.8418 26.4137V14.4166C27.8418 14.0189 27.9997 13.6375 28.2809 13.3562C28.562 13.075 28.9433 12.917 29.3409 12.917H40.584C40.9816 12.917 41.3629 13.075 41.644 13.3562C41.9252 13.6375 42.0831 14.0189 42.0831 14.4166V30.9126C42.0831 32.9012 41.2934 34.8084 39.8877 36.2146C38.4821 37.6207 36.5756 38.4107 34.5877 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                                bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat
                                pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac
                                dapibus sit eu velit in consequat.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg width="25" class="mx-1" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4167 9.4385L16.04 8.31207L12.7347 1.26147C12.6627 1.14079 12.5628 1.0413 12.4443 0.972332C12.3258 0.903367 12.1926 0.867188 12.0571 0.867188C11.9217 0.867188 11.7884 0.903367 11.6699 0.972332C11.5514 1.0413 11.4515 1.14079 11.3796 1.26147L8.07426 8.3217L0.700614 9.4385C0.567035 9.45228 0.439973 9.50587 0.334363 9.59298C0.228752 9.68008 0.148983 9.79707 0.104429 9.9302C0.0598745 10.0633 0.0523881 10.2071 0.082849 10.3445C0.11331 10.482 0.180452 10.6074 0.276385 10.7061L5.63266 16.2099L4.36607 23.9826C4.34986 24.1259 4.37162 24.2711 4.42894 24.4022C4.48626 24.5333 4.57691 24.6452 4.69089 24.7255C4.80487 24.8058 4.93775 24.8515 5.07485 24.8575C5.21196 24.8634 5.34796 24.8294 5.46785 24.7592L12.0571 21.1136L18.6434 24.7624C18.7632 24.8326 18.8992 24.8666 19.0364 24.8607C19.1735 24.8547 19.3063 24.809 19.4203 24.7287C19.5343 24.6484 19.625 24.5365 19.6823 24.4054C19.7396 24.2743 19.7613 24.1291 19.7451 23.9858L18.4816 16.2099L23.8379 10.7061C23.9338 10.6074 24.0009 10.482 24.0314 10.3445C24.0619 10.2071 24.0544 10.0633 24.0098 9.9302C23.9653 9.79707 23.8855 9.68008 23.7799 9.59298C23.6743 9.50587 23.5472 9.45228 23.4136 9.4385H23.4167Z"
                                    fill="#E0E0E0" />
                            </svg>


                        </div>
                        <h3 class="mt-2">Alamin Hasan</h3>
                        <p>Food Specialist</p>
                        <img src="./assets/img/leave.png" alt="" class="w-25">
                    </div>

                    <div class="testimonial text-center">
                        <div class="testimonial-photo">
                            <div class="photo-background"></div>
                            <div class="photo-author"></div>
                        </div>

                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.3468 27.9133H7.60455C7.20697 27.9133 6.82567 27.7553 6.54454 27.4741C6.26341 27.1928 6.10547 26.8114 6.10547 26.4137V14.4166C6.10547 14.0189 6.26341 13.6375 6.54454 13.3562C6.82567 13.075 7.20697 12.917 7.60455 12.917H18.8477C19.2453 12.917 19.6266 13.075 19.9077 13.3562C20.1888 13.6375 20.3468 14.0189 20.3468 14.4166V30.9126C20.3468 32.9012 19.5571 34.8084 18.1514 36.2146C16.7457 37.6207 14.8393 38.4107 12.8513 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M42.0831 27.9133H29.3409C28.9433 27.9133 28.562 27.7553 28.2809 27.4741C27.9997 27.1928 27.8418 26.8114 27.8418 26.4137V14.4166C27.8418 14.0189 27.9997 13.6375 28.2809 13.3562C28.562 13.075 28.9433 12.917 29.3409 12.917H40.584C40.9816 12.917 41.3629 13.075 41.644 13.3562C41.9252 13.6375 42.0831 14.0189 42.0831 14.4166V30.9126C42.0831 32.9012 41.2934 34.8084 39.8877 36.2146C38.4821 37.6207 36.5756 38.4107 34.5877 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                                bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat
                                pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac
                                dapibus sit eu velit in consequat.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg width="25" class="mx-1" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4167 9.4385L16.04 8.31207L12.7347 1.26147C12.6627 1.14079 12.5628 1.0413 12.4443 0.972332C12.3258 0.903367 12.1926 0.867188 12.0571 0.867188C11.9217 0.867188 11.7884 0.903367 11.6699 0.972332C11.5514 1.0413 11.4515 1.14079 11.3796 1.26147L8.07426 8.3217L0.700614 9.4385C0.567035 9.45228 0.439973 9.50587 0.334363 9.59298C0.228752 9.68008 0.148983 9.79707 0.104429 9.9302C0.0598745 10.0633 0.0523881 10.2071 0.082849 10.3445C0.11331 10.482 0.180452 10.6074 0.276385 10.7061L5.63266 16.2099L4.36607 23.9826C4.34986 24.1259 4.37162 24.2711 4.42894 24.4022C4.48626 24.5333 4.57691 24.6452 4.69089 24.7255C4.80487 24.8058 4.93775 24.8515 5.07485 24.8575C5.21196 24.8634 5.34796 24.8294 5.46785 24.7592L12.0571 21.1136L18.6434 24.7624C18.7632 24.8326 18.8992 24.8666 19.0364 24.8607C19.1735 24.8547 19.3063 24.809 19.4203 24.7287C19.5343 24.6484 19.625 24.5365 19.6823 24.4054C19.7396 24.2743 19.7613 24.1291 19.7451 23.9858L18.4816 16.2099L23.8379 10.7061C23.9338 10.6074 24.0009 10.482 24.0314 10.3445C24.0619 10.2071 24.0544 10.0633 24.0098 9.9302C23.9653 9.79707 23.8855 9.68008 23.7799 9.59298C23.6743 9.50587 23.5472 9.45228 23.4136 9.4385H23.4167Z"
                                    fill="#E0E0E0" />
                            </svg>


                        </div>
                        <h3 class="mt-2">Alamin Hasan</h3>
                        <p>Food Specialist</p>
                        <img src="./assets/img/leave.png" alt="" class="w-25">
                    </div>

                    <div class="testimonial text-center">
                        <div class="testimonial-photo">
                            <div class="photo-background"></div>
                            <div class="photo-author"></div>
                        </div>

                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.3468 27.9133H7.60455C7.20697 27.9133 6.82567 27.7553 6.54454 27.4741C6.26341 27.1928 6.10547 26.8114 6.10547 26.4137V14.4166C6.10547 14.0189 6.26341 13.6375 6.54454 13.3562C6.82567 13.075 7.20697 12.917 7.60455 12.917H18.8477C19.2453 12.917 19.6266 13.075 19.9077 13.3562C20.1888 13.6375 20.3468 14.0189 20.3468 14.4166V30.9126C20.3468 32.9012 19.5571 34.8084 18.1514 36.2146C16.7457 37.6207 14.8393 38.4107 12.8513 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M42.0831 27.9133H29.3409C28.9433 27.9133 28.562 27.7553 28.2809 27.4741C27.9997 27.1928 27.8418 26.8114 27.8418 26.4137V14.4166C27.8418 14.0189 27.9997 13.6375 28.2809 13.3562C28.562 13.075 28.9433 12.917 29.3409 12.917H40.584C40.9816 12.917 41.3629 13.075 41.644 13.3562C41.9252 13.6375 42.0831 14.0189 42.0831 14.4166V30.9126C42.0831 32.9012 41.2934 34.8084 39.8877 36.2146C38.4821 37.6207 36.5756 38.4107 34.5877 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                                bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat
                                pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac
                                dapibus sit eu velit in consequat.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg width="25" class="mx-1" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4167 9.4385L16.04 8.31207L12.7347 1.26147C12.6627 1.14079 12.5628 1.0413 12.4443 0.972332C12.3258 0.903367 12.1926 0.867188 12.0571 0.867188C11.9217 0.867188 11.7884 0.903367 11.6699 0.972332C11.5514 1.0413 11.4515 1.14079 11.3796 1.26147L8.07426 8.3217L0.700614 9.4385C0.567035 9.45228 0.439973 9.50587 0.334363 9.59298C0.228752 9.68008 0.148983 9.79707 0.104429 9.9302C0.0598745 10.0633 0.0523881 10.2071 0.082849 10.3445C0.11331 10.482 0.180452 10.6074 0.276385 10.7061L5.63266 16.2099L4.36607 23.9826C4.34986 24.1259 4.37162 24.2711 4.42894 24.4022C4.48626 24.5333 4.57691 24.6452 4.69089 24.7255C4.80487 24.8058 4.93775 24.8515 5.07485 24.8575C5.21196 24.8634 5.34796 24.8294 5.46785 24.7592L12.0571 21.1136L18.6434 24.7624C18.7632 24.8326 18.8992 24.8666 19.0364 24.8607C19.1735 24.8547 19.3063 24.809 19.4203 24.7287C19.5343 24.6484 19.625 24.5365 19.6823 24.4054C19.7396 24.2743 19.7613 24.1291 19.7451 23.9858L18.4816 16.2099L23.8379 10.7061C23.9338 10.6074 24.0009 10.482 24.0314 10.3445C24.0619 10.2071 24.0544 10.0633 24.0098 9.9302C23.9653 9.79707 23.8855 9.68008 23.7799 9.59298C23.6743 9.50587 23.5472 9.45228 23.4136 9.4385H23.4167Z"
                                    fill="#E0E0E0" />
                            </svg>


                        </div>
                        <h3 class="mt-2">Alamin Hasan</h3>
                        <p>Food Specialist</p>
                        <img src="./assets/img/leave.png" alt="" class="w-25">
                    </div>
                    <div class="testimonial text-center">
                        <div class="testimonial-photo">
                            <div class="photo-background"></div>
                            <div class="photo-author"></div>
                        </div>

                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.3468 27.9133H7.60455C7.20697 27.9133 6.82567 27.7553 6.54454 27.4741C6.26341 27.1928 6.10547 26.8114 6.10547 26.4137V14.4166C6.10547 14.0189 6.26341 13.6375 6.54454 13.3562C6.82567 13.075 7.20697 12.917 7.60455 12.917H18.8477C19.2453 12.917 19.6266 13.075 19.9077 13.3562C20.1888 13.6375 20.3468 14.0189 20.3468 14.4166V30.9126C20.3468 32.9012 19.5571 34.8084 18.1514 36.2146C16.7457 37.6207 14.8393 38.4107 12.8513 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M42.0831 27.9133H29.3409C28.9433 27.9133 28.562 27.7553 28.2809 27.4741C27.9997 27.1928 27.8418 26.8114 27.8418 26.4137V14.4166C27.8418 14.0189 27.9997 13.6375 28.2809 13.3562C28.562 13.075 28.9433 12.917 29.3409 12.917H40.584C40.9816 12.917 41.3629 13.075 41.644 13.3562C41.9252 13.6375 42.0831 14.0189 42.0831 14.4166V30.9126C42.0831 32.9012 41.2934 34.8084 39.8877 36.2146C38.4821 37.6207 36.5756 38.4107 34.5877 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                                bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat
                                pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac
                                dapibus sit eu velit in consequat.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg width="25" class="mx-1" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4167 9.4385L16.04 8.31207L12.7347 1.26147C12.6627 1.14079 12.5628 1.0413 12.4443 0.972332C12.3258 0.903367 12.1926 0.867188 12.0571 0.867188C11.9217 0.867188 11.7884 0.903367 11.6699 0.972332C11.5514 1.0413 11.4515 1.14079 11.3796 1.26147L8.07426 8.3217L0.700614 9.4385C0.567035 9.45228 0.439973 9.50587 0.334363 9.59298C0.228752 9.68008 0.148983 9.79707 0.104429 9.9302C0.0598745 10.0633 0.0523881 10.2071 0.082849 10.3445C0.11331 10.482 0.180452 10.6074 0.276385 10.7061L5.63266 16.2099L4.36607 23.9826C4.34986 24.1259 4.37162 24.2711 4.42894 24.4022C4.48626 24.5333 4.57691 24.6452 4.69089 24.7255C4.80487 24.8058 4.93775 24.8515 5.07485 24.8575C5.21196 24.8634 5.34796 24.8294 5.46785 24.7592L12.0571 21.1136L18.6434 24.7624C18.7632 24.8326 18.8992 24.8666 19.0364 24.8607C19.1735 24.8547 19.3063 24.809 19.4203 24.7287C19.5343 24.6484 19.625 24.5365 19.6823 24.4054C19.7396 24.2743 19.7613 24.1291 19.7451 23.9858L18.4816 16.2099L23.8379 10.7061C23.9338 10.6074 24.0009 10.482 24.0314 10.3445C24.0619 10.2071 24.0544 10.0633 24.0098 9.9302C23.9653 9.79707 23.8855 9.68008 23.7799 9.59298C23.6743 9.50587 23.5472 9.45228 23.4136 9.4385H23.4167Z"
                                    fill="#E0E0E0" />
                            </svg>


                        </div>
                        <h3 class="mt-2">Alamin Hasan</h3>
                        <p>Food Specialist</p>
                        <img src="./img/leave.png" alt="" class="w-25">
                    </div>
                    <div class="testimonial text-center">
                        <div class="testimonial-photo">
                            <div class="photo-background"></div>
                            <div class="photo-author"></div>
                        </div>

                        <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.3468 27.9133H7.60455C7.20697 27.9133 6.82567 27.7553 6.54454 27.4741C6.26341 27.1928 6.10547 26.8114 6.10547 26.4137V14.4166C6.10547 14.0189 6.26341 13.6375 6.54454 13.3562C6.82567 13.075 7.20697 12.917 7.60455 12.917H18.8477C19.2453 12.917 19.6266 13.075 19.9077 13.3562C20.1888 13.6375 20.3468 14.0189 20.3468 14.4166V30.9126C20.3468 32.9012 19.5571 34.8084 18.1514 36.2146C16.7457 37.6207 14.8393 38.4107 12.8513 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M42.0831 27.9133H29.3409C28.9433 27.9133 28.562 27.7553 28.2809 27.4741C27.9997 27.1928 27.8418 26.8114 27.8418 26.4137V14.4166C27.8418 14.0189 27.9997 13.6375 28.2809 13.3562C28.562 13.075 28.9433 12.917 29.3409 12.917H40.584C40.9816 12.917 41.3629 13.075 41.644 13.3562C41.9252 13.6375 42.0831 14.0189 42.0831 14.4166V30.9126C42.0831 32.9012 41.2934 34.8084 39.8877 36.2146C38.4821 37.6207 36.5756 38.4107 34.5877 38.4107"
                                stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="testimonial-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                                bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna, vitae feugiat
                                pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus nisi, et ac
                                dapibus sit eu velit in consequat.</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <svg width="25" class="mx-1" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4948 9.4385L16.1181 8.31207L12.8128 1.26147C12.7409 1.14079 12.641 1.0413 12.5224 0.972332C12.4039 0.903367 12.2707 0.867188 12.1353 0.867188C11.9998 0.867188 11.8666 0.903367 11.7481 0.972332C11.6296 1.0413 11.5296 1.14079 11.4577 1.26147L8.15239 8.3217L0.778739 9.4385C0.64516 9.45228 0.518098 9.50587 0.412488 9.59298C0.306877 9.68008 0.227107 9.79707 0.182554 9.9302C0.138 10.0633 0.130513 10.2071 0.160974 10.3445C0.191435 10.482 0.258577 10.6074 0.35451 10.7061L5.71078 16.2099L4.4442 23.9826C4.42799 24.1259 4.44974 24.2711 4.50706 24.4022C4.56438 24.5333 4.65503 24.6452 4.76901 24.7255C4.88299 24.8058 5.01587 24.8515 5.15298 24.8575C5.29008 24.8634 5.42609 24.8294 5.54597 24.7592L12.1353 21.1136L18.7215 24.7624C18.8414 24.8326 18.9774 24.8666 19.1145 24.8607C19.2516 24.8547 19.3845 24.809 19.4984 24.7287C19.6124 24.6484 19.7031 24.5365 19.7604 24.4054C19.8177 24.2743 19.8395 24.1291 19.8233 23.9858L18.5597 16.2099L23.916 10.7061C24.0119 10.6074 24.0791 10.482 24.1095 10.3445C24.14 10.2071 24.1325 10.0633 24.088 9.9302C24.0434 9.79707 23.9636 9.68008 23.858 9.59298C23.7524 9.50587 23.6253 9.45228 23.4918 9.4385H23.4948Z"
                                    fill="#C6AA58" />
                            </svg>
                            <svg width="25" height="25" class="mx-1" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.4167 9.4385L16.04 8.31207L12.7347 1.26147C12.6627 1.14079 12.5628 1.0413 12.4443 0.972332C12.3258 0.903367 12.1926 0.867188 12.0571 0.867188C11.9217 0.867188 11.7884 0.903367 11.6699 0.972332C11.5514 1.0413 11.4515 1.14079 11.3796 1.26147L8.07426 8.3217L0.700614 9.4385C0.567035 9.45228 0.439973 9.50587 0.334363 9.59298C0.228752 9.68008 0.148983 9.79707 0.104429 9.9302C0.0598745 10.0633 0.0523881 10.2071 0.082849 10.3445C0.11331 10.482 0.180452 10.6074 0.276385 10.7061L5.63266 16.2099L4.36607 23.9826C4.34986 24.1259 4.37162 24.2711 4.42894 24.4022C4.48626 24.5333 4.57691 24.6452 4.69089 24.7255C4.80487 24.8058 4.93775 24.8515 5.07485 24.8575C5.21196 24.8634 5.34796 24.8294 5.46785 24.7592L12.0571 21.1136L18.6434 24.7624C18.7632 24.8326 18.8992 24.8666 19.0364 24.8607C19.1735 24.8547 19.3063 24.809 19.4203 24.7287C19.5343 24.6484 19.625 24.5365 19.6823 24.4054C19.7396 24.2743 19.7613 24.1291 19.7451 23.9858L18.4816 16.2099L23.8379 10.7061C23.9338 10.6074 24.0009 10.482 24.0314 10.3445C24.0619 10.2071 24.0544 10.0633 24.0098 9.9302C23.9653 9.79707 23.8855 9.68008 23.7799 9.59298C23.6743 9.50587 23.5472 9.45228 23.4136 9.4385H23.4167Z"
                                    fill="#E0E0E0" />
                            </svg>


                        </div>
                        <h3 class="mt-2">Alamin Hasan</h3>
                        <p>Food Specialist</p>
                        <img src="./assets/img/leave.png" alt="" class="w-25">
                    </div>

                </div>
                <div class="testimonials-arrows">
                    <div class="arrow arrow-left">
                        <label for="input-testimonial1"></label>
                        <label for="input-testimonial2"></label>
                        <label for="input-testimonial3"></label>
                        <label for="input-testimonial4"></label>
                        <span></span>
                    </div>
                    <div class="arrow arrow-right">
                        <label for="input-testimonial1"></label>
                        <label for="input-testimonial2"></label>
                        <label for="input-testimonial3"></label>
                        <label for="input-testimonial4"></label>
                        <span></span>
                    </div>
                </div>
                <div class="testimonials-bullets">
                    <label for="input-testimonial1">
                        <div class="bullet">
                            <div>
                                <span></span>
                            </div>
                        </div>
                    </label>
                    <label for="input-testimonial2">
                        <div class="bullet">
                            <div>
                                <span></span>
                            </div>
                        </div>
                    </label>
                    <label for="input-testimonial3">
                        <div class="bullet">
                            <div>
                                <span></span>
                            </div>
                        </div>
                    </label>
                    <label for="input-testimonial4">
                        <div class="bullet">
                            <div>
                                <span></span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--<############## Testimonial End <################ -->


    <!--#############> Deliver Banner Start <############-->
    <div class="container-xxl position-relative p-0">


        <div class="container-xxl text-md-end  bg-dark hero-headerforth mb-5">
            <div class="container  my-5 pt-5 pb-4 mainsubtext">
                <h5 class="  ff-secondary   fw-normal">Restaurant Active Process</h5>
                <!-- <h1 class="display-3 text-white text-end mb-3 animated slideInDown">Our Menu</h1> -->
                <h1 class="mainheafinsecond animated slideInLeft"><span> We Document</span> Every Food <br>
                    Bean Process until it is saved</h1>

                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque diam pellentesque
                    <br> bibendum non dui volutpat fringilla bibendum. Urna, elit augue urna,
                </p>


                <div class="mainbannertextsecond d-flex justify-content-between justify-content-md-end">
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">See Menu</a>
                    <div>
                        <a href="" class="btn btn-primary    me-3 mt-1 animated slideInLeft"
                            style="width: 50px;height: 50px;">
                            <svg width="25" class="mt-2" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.8889 11.3609L8.3911 3.112C8.27741 3.04252 8.14726 3.00458 8.01404 3.00208C7.88083 2.99959 7.74935 3.03263 7.63314 3.0978C7.51692 3.16298 7.42017 3.25793 7.35283 3.37291C7.2855 3.48788 7.25 3.61871 7.25 3.75195V20.2498C7.25 20.3831 7.2855 20.5139 7.35283 20.6289C7.42017 20.7438 7.51692 20.8388 7.63314 20.904C7.74935 20.9691 7.88083 21.0022 8.01404 20.9997C8.14726 20.9972 8.27741 20.9593 8.3911 20.8898L21.8889 12.6408C21.9985 12.5738 22.0891 12.4798 22.152 12.3677C22.2148 12.2557 22.2478 12.1294 22.2478 12.0009C22.2478 11.8724 22.2148 11.7461 22.152 11.634C22.0891 11.522 21.9985 11.4279 21.8889 11.3609Z"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>
                        <span class="text-white mt-4">Play Video</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--#############> Deliver Banner End <############-->



    <!--################> Card Section Start<############  -->
    <!--###################> Testimonial Start <###############-->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" mainbannertextsecond text-center">
            <h5 class="  ff-secondary   fw-normal">Blog Post</h5>
            <h1 class="mainheafinsecond animated slideInLeft"><span> Latest News</span> & Blog </h1>


        </div>


        <div class="row">
            <div class="col-md-4 mt-3">
                <div class="card bg-transparent border">
                    <img class="card-img-top" src="./assets/img/blogcard (1).png" alt="Card image cap">
                    <div class="card-body">
                        <p class="cardtext">10 February 2022 </p>
                        <h5 class="card-title">Pellentesque Non Efficitur Mi Aliquam Convallis Mi Quis</h5>


                        <div class="d-flex justify-content-between py-3">
                            <div class="learnmore">
                                <a href="" class="">
                                    Learn More
                                </a>
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 8.125H6.75V16.25H3C2.83424 16.25 2.67527 16.1842 2.55806 16.0669C2.44085 15.9497 2.375 15.7908 2.375 15.625V8.75C2.375 8.58424 2.44085 8.42527 2.55806 8.30806C2.67527 8.19085 2.83424 8.125 3 8.125V8.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.75 8.125L9.875 1.875C10.2033 1.875 10.5284 1.93966 10.8317 2.0653C11.135 2.19094 11.4106 2.37509 11.6428 2.60723C11.8749 2.83938 12.0591 3.11498 12.1847 3.41829C12.3103 3.72161 12.375 4.0467 12.375 4.375V6.25H17.209C17.3863 6.25 17.5615 6.28769 17.723 6.36058C17.8846 6.43346 18.0288 6.53987 18.1461 6.67275C18.2634 6.80562 18.3511 6.96192 18.4034 7.13128C18.4557 7.30063 18.4714 7.47917 18.4494 7.65504L17.5119 15.155C17.4741 15.4574 17.3272 15.7355 17.0988 15.9371C16.8704 16.1387 16.5762 16.25 16.2715 16.25H6.75"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.54304 15.7716L4.02717 17.8865C3.93607 17.9631 3.82499 18.0121 3.707 18.0277C3.58901 18.0433 3.46901 18.0249 3.36112 17.9747C3.25323 17.9244 3.16193 17.8444 3.09796 17.744C3.03398 17.6437 3 17.5271 3 17.4081V5C3 4.83424 3.06585 4.67527 3.18306 4.55806C3.30027 4.44085 3.45924 4.375 3.625 4.375H17.375C17.5408 4.375 17.6997 4.44085 17.8169 4.55806C17.9342 4.67527 18 4.83424 18 5V15C18 15.1658 17.9342 15.3247 17.8169 15.4419C17.6997 15.5592 17.5408 15.625 17.375 15.625H6.94522C6.79808 15.625 6.65567 15.6769 6.54304 15.7716Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M10.5 10.9375C11.0178 10.9375 11.4375 10.5178 11.4375 10C11.4375 9.48223 11.0178 9.0625 10.5 9.0625C9.98223 9.0625 9.5625 9.48223 9.5625 10C9.5625 10.5178 9.98223 10.9375 10.5 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M6.75 10.9375C7.26777 10.9375 7.6875 10.5178 7.6875 10C7.6875 9.48223 7.26777 9.0625 6.75 9.0625C6.23223 9.0625 5.8125 9.48223 5.8125 10C5.8125 10.5178 6.23223 10.9375 6.75 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M14.25 10.9375C14.7678 10.9375 15.1875 10.5178 15.1875 10C15.1875 9.48223 14.7678 9.0625 14.25 9.0625C13.7322 9.0625 13.3125 9.48223 13.3125 10C13.3125 10.5178 13.7322 10.9375 14.25 10.9375Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 12.5C6.88071 12.5 8 11.3807 8 10C8 8.61929 6.88071 7.5 5.5 7.5C4.11929 7.5 3 8.61929 3 10C3 11.3807 4.11929 12.5 5.5 12.5Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 18.125C15.6307 18.125 16.75 17.0057 16.75 15.625C16.75 14.2443 15.6307 13.125 14.25 13.125C12.8693 13.125 11.75 14.2443 11.75 15.625C11.75 17.0057 12.8693 18.125 14.25 18.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 6.875C15.6307 6.875 16.75 5.75571 16.75 4.375C16.75 2.99429 15.6307 1.875 14.25 1.875C12.8693 1.875 11.75 2.99429 11.75 4.375C11.75 5.75571 12.8693 6.875 14.25 6.875Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.1481 5.72656L7.60352 8.6481" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.60352 11.3516L12.1481 14.2731" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>


                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card bg-transparent border">
                    <img class="card-img-top" src="./assets/img/blogcard (2).png" alt="Card image cap">
                    <div class="card-body">
                        <p class="cardtext">10 February 2022 </p>
                        <h5 class="card-title">Pellentesque Non Efficitur Mi Aliquam Convallis Mi Quis</h5>


                        <div class="d-flex justify-content-between py-3">
                            <div class="learnmore">
                                <a href="" class="">
                                    Learn More
                                </a>
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 8.125H6.75V16.25H3C2.83424 16.25 2.67527 16.1842 2.55806 16.0669C2.44085 15.9497 2.375 15.7908 2.375 15.625V8.75C2.375 8.58424 2.44085 8.42527 2.55806 8.30806C2.67527 8.19085 2.83424 8.125 3 8.125V8.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.75 8.125L9.875 1.875C10.2033 1.875 10.5284 1.93966 10.8317 2.0653C11.135 2.19094 11.4106 2.37509 11.6428 2.60723C11.8749 2.83938 12.0591 3.11498 12.1847 3.41829C12.3103 3.72161 12.375 4.0467 12.375 4.375V6.25H17.209C17.3863 6.25 17.5615 6.28769 17.723 6.36058C17.8846 6.43346 18.0288 6.53987 18.1461 6.67275C18.2634 6.80562 18.3511 6.96192 18.4034 7.13128C18.4557 7.30063 18.4714 7.47917 18.4494 7.65504L17.5119 15.155C17.4741 15.4574 17.3272 15.7355 17.0988 15.9371C16.8704 16.1387 16.5762 16.25 16.2715 16.25H6.75"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.54304 15.7716L4.02717 17.8865C3.93607 17.9631 3.82499 18.0121 3.707 18.0277C3.58901 18.0433 3.46901 18.0249 3.36112 17.9747C3.25323 17.9244 3.16193 17.8444 3.09796 17.744C3.03398 17.6437 3 17.5271 3 17.4081V5C3 4.83424 3.06585 4.67527 3.18306 4.55806C3.30027 4.44085 3.45924 4.375 3.625 4.375H17.375C17.5408 4.375 17.6997 4.44085 17.8169 4.55806C17.9342 4.67527 18 4.83424 18 5V15C18 15.1658 17.9342 15.3247 17.8169 15.4419C17.6997 15.5592 17.5408 15.625 17.375 15.625H6.94522C6.79808 15.625 6.65567 15.6769 6.54304 15.7716Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M10.5 10.9375C11.0178 10.9375 11.4375 10.5178 11.4375 10C11.4375 9.48223 11.0178 9.0625 10.5 9.0625C9.98223 9.0625 9.5625 9.48223 9.5625 10C9.5625 10.5178 9.98223 10.9375 10.5 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M6.75 10.9375C7.26777 10.9375 7.6875 10.5178 7.6875 10C7.6875 9.48223 7.26777 9.0625 6.75 9.0625C6.23223 9.0625 5.8125 9.48223 5.8125 10C5.8125 10.5178 6.23223 10.9375 6.75 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M14.25 10.9375C14.7678 10.9375 15.1875 10.5178 15.1875 10C15.1875 9.48223 14.7678 9.0625 14.25 9.0625C13.7322 9.0625 13.3125 9.48223 13.3125 10C13.3125 10.5178 13.7322 10.9375 14.25 10.9375Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 12.5C6.88071 12.5 8 11.3807 8 10C8 8.61929 6.88071 7.5 5.5 7.5C4.11929 7.5 3 8.61929 3 10C3 11.3807 4.11929 12.5 5.5 12.5Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 18.125C15.6307 18.125 16.75 17.0057 16.75 15.625C16.75 14.2443 15.6307 13.125 14.25 13.125C12.8693 13.125 11.75 14.2443 11.75 15.625C11.75 17.0057 12.8693 18.125 14.25 18.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 6.875C15.6307 6.875 16.75 5.75571 16.75 4.375C16.75 2.99429 15.6307 1.875 14.25 1.875C12.8693 1.875 11.75 2.99429 11.75 4.375C11.75 5.75571 12.8693 6.875 14.25 6.875Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.1481 5.72656L7.60352 8.6481" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.60352 11.3516L12.1481 14.2731" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>


                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3">
                <div class="card bg-transparent border">
                    <img class="card-img-top" src="./assets/img/blogcard (3).png" alt="Card image cap">
                    <div class="card-body">
                        <p class="cardtext">10 February 2022 </p>
                        <h5 class="card-title">Pellentesque Non Efficitur Mi Aliquam Convallis Mi Quis</h5>


                        <div class="d-flex justify-content-between py-3">
                            <div class="learnmore">
                                <a href="" class="">
                                    Learn More
                                </a>
                            </div>
                            <div class="d-flex">
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 8.125H6.75V16.25H3C2.83424 16.25 2.67527 16.1842 2.55806 16.0669C2.44085 15.9497 2.375 15.7908 2.375 15.625V8.75C2.375 8.58424 2.44085 8.42527 2.55806 8.30806C2.67527 8.19085 2.83424 8.125 3 8.125V8.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.75 8.125L9.875 1.875C10.2033 1.875 10.5284 1.93966 10.8317 2.0653C11.135 2.19094 11.4106 2.37509 11.6428 2.60723C11.8749 2.83938 12.0591 3.11498 12.1847 3.41829C12.3103 3.72161 12.375 4.0467 12.375 4.375V6.25H17.209C17.3863 6.25 17.5615 6.28769 17.723 6.36058C17.8846 6.43346 18.0288 6.53987 18.1461 6.67275C18.2634 6.80562 18.3511 6.96192 18.4034 7.13128C18.4557 7.30063 18.4714 7.47917 18.4494 7.65504L17.5119 15.155C17.4741 15.4574 17.3272 15.7355 17.0988 15.9371C16.8704 16.1387 16.5762 16.25 16.2715 16.25H6.75"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.54304 15.7716L4.02717 17.8865C3.93607 17.9631 3.82499 18.0121 3.707 18.0277C3.58901 18.0433 3.46901 18.0249 3.36112 17.9747C3.25323 17.9244 3.16193 17.8444 3.09796 17.744C3.03398 17.6437 3 17.5271 3 17.4081V5C3 4.83424 3.06585 4.67527 3.18306 4.55806C3.30027 4.44085 3.45924 4.375 3.625 4.375H17.375C17.5408 4.375 17.6997 4.44085 17.8169 4.55806C17.9342 4.67527 18 4.83424 18 5V15C18 15.1658 17.9342 15.3247 17.8169 15.4419C17.6997 15.5592 17.5408 15.625 17.375 15.625H6.94522C6.79808 15.625 6.65567 15.6769 6.54304 15.7716Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M10.5 10.9375C11.0178 10.9375 11.4375 10.5178 11.4375 10C11.4375 9.48223 11.0178 9.0625 10.5 9.0625C9.98223 9.0625 9.5625 9.48223 9.5625 10C9.5625 10.5178 9.98223 10.9375 10.5 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M6.75 10.9375C7.26777 10.9375 7.6875 10.5178 7.6875 10C7.6875 9.48223 7.26777 9.0625 6.75 9.0625C6.23223 9.0625 5.8125 9.48223 5.8125 10C5.8125 10.5178 6.23223 10.9375 6.75 10.9375Z"
                                            fill="white" />
                                        <path
                                            d="M14.25 10.9375C14.7678 10.9375 15.1875 10.5178 15.1875 10C15.1875 9.48223 14.7678 9.0625 14.25 9.0625C13.7322 9.0625 13.3125 9.48223 13.3125 10C13.3125 10.5178 13.7322 10.9375 14.25 10.9375Z"
                                            fill="white" />
                                    </svg>

                                </div>
                                <div class="px-2">
                                    <svg width="21" class="likeme" height="20" viewBox="0 0 21 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.5 12.5C6.88071 12.5 8 11.3807 8 10C8 8.61929 6.88071 7.5 5.5 7.5C4.11929 7.5 3 8.61929 3 10C3 11.3807 4.11929 12.5 5.5 12.5Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 18.125C15.6307 18.125 16.75 17.0057 16.75 15.625C16.75 14.2443 15.6307 13.125 14.25 13.125C12.8693 13.125 11.75 14.2443 11.75 15.625C11.75 17.0057 12.8693 18.125 14.25 18.125Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M14.25 6.875C15.6307 6.875 16.75 5.75571 16.75 4.375C16.75 2.99429 15.6307 1.875 14.25 1.875C12.8693 1.875 11.75 2.99429 11.75 4.375C11.75 5.75571 12.8693 6.875 14.25 6.875Z"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M12.1481 5.72656L7.60352 8.6481" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.60352 11.3516L12.1481 14.2731" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>


                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 my-3">
                <div class="mainbannertextsecond d-flex justify-content-center">
                    <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"><span>See
                            More</span></a>
                    <div>

                    </div>

                </div>

            </div>
            </div>
            </div>
            <!--<############## Testimonial End <################ -->

            <!--################> Card Section End<############  -->

            <!-- Footer Start -->



               <!-- Footer Start -->
        <div class="container-fluid p-0  position-relative text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="">

            <div class="w-100">
                <svg width="" height="65" viewBox="0 0 1883 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.5 1H1882.5V-1H0.5V1Z" fill="url(#paint0_linear_49_3877)"
                        mask="url(#path-1-inside-1_49_3877)" />
                    <defs>
                        <linearGradient id="paint0_linear_49_3877" x1="0.5" y1="0" x2="63.9739" y2="-339.748"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#C6AA58" stop-opacity="0" />
                            <stop offset="0.525" stop-color="#C6AA58" />
                            <stop offset="1" stop-color="#C6AA58" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>

            </div>
            <div class="container ">
                <div class="row ">
                    <div class="col-md-12 px-md-5 mainsearchfooterset mb-4 pb-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" mainbannertextsecond text-center">
                                    <!-- <h5 class="  ff-secondary   fw-normal">Blog Post</h5> -->
                                    <h1 class="mainheafinsecondfooter animated slideInLeft"><span>Still You
                                            Need</span> Our Support ? </h1>
                                    <p>Don’t wait make a smart & logical quote here. Its pretty easy.</p>


                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-5 d-flex align-items-center">

                                <div class="input-group mb-3 searchformfooetr">
                                    <input type="text" class="form-control p-3" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary p-3" type="button">Subscribe
                                            Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class=" text-start  fw-normal mb-4"> About Us.
                        </h4>
                        <p class="text-white">orporate clients and leisure travelers has
                            been relying on Groundlink for dependab
                            safe, and professional chauffeured car
                            service in major cities across World..</p>
                      <div class="row">

                            <div class="col-md-5 p-4 text-center">
                                <div class="whyicons p-3">


                                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.5 12.5V20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M26.9952 23.75L20.5 20" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M29.2754 15.5801H35.5254V9.33008" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M30.2227 29.7227C28.2997 31.6457 25.8497 32.9553 23.1825 33.4858C20.5153 34.0164 17.7506 33.7441 15.2381 32.7033C12.7256 31.6626 10.5782 29.9003 9.06729 27.6391C7.55642 25.3779 6.75 22.7195 6.75 20C6.75 17.2805 7.55642 14.6221 9.06729 12.3609C10.5782 10.0997 12.7256 8.33737 15.2381 7.29666C17.7506 6.25596 20.5153 5.98366 23.1825 6.51421C25.8497 7.04476 28.2997 8.35432 30.2227 10.2773L35.526 15.5806" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>





                                </div>

                            </div>

                        <div class="col-md-7 openhours align-self-center">
                            <p>
                                Opening Houres
                            </p>
                            <span>Mon - Sat(8.00 - 6.00)</span><br>
                            <span>Sunday - Closed</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="  fw-normal mb-4">Useful Links</h4>
                        <a class="btn btn-link" href="">About</a>
                        <a class="btn btn-link" href=""> News</a>
                        <a class="btn btn-link" href=""> Partners</a>
                        <a class="btn btn-link" href=""> Team</a>
                        <a class="btn btn-link" href=""> Menu</a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="  fw-normal mb-4">Help?</h4>
                           <a class="btn btn-link" href="./FAQ.html">FAQ</a>                        <a class="btn btn-link" href="">Term & conditions</a>
                        <a class="btn btn-link" href="">Reporting</a>
                        <a class="btn btn-link" href=""> Documentation</a>
                        <a class="btn btn-link" href=""> Support Policy</a>
                        <a class="btn btn-link" href="">Privacy</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class=" fw-normal mb-4">Recent Post</h4>
                        <div class="row">
                            <div class="col-3">
                                <img src="./assets/img/footerimg (1).png" class="w-100" alt="">
                            </div>
                            <div class="col-9">
                                <p>20 Feb 2022</p>
                                <span>Keep Your Business </span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="./assets/img/footerimg (2).png" class="w-100" alt="">
                            </div>
                            <div class="col-9">
                                <p>20 Feb 2022</p>
                                <span>Keep Your Business </span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="./assets/img/footerimg (3).png" class="w-100" alt="">
                            </div>
                            <div class="col-9">
                                <p>20 Feb 2022</p>
                                <span>Keep Your Business </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="copywright mt-5">
                <div class="container copyright">
                    <div class="row px-md-5 p-0 w-100">
                        <div class="col-md-6 p-0 m-0 text-center text-md-start mb-3 mb-md-0 align-self-center">
                            &copy; Copyright © 2022 by Ayeman. All Rights Reserved.


                        </div>
                        <div class="col-md-6 p-0 m-0 text-center text-md-end px-md-5">
                            <div class="footer-menu pe-5">
                                <a href="">
                                    <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 6C0.5 2.68629 3.18629 0 6.5 0H30.5C33.8137 0 36.5 2.68629 36.5 6V28C36.5 31.3137 33.8137 34 30.5 34H6.5C3.18629 34 0.5 31.3137 0.5 28V6Z" fill="white"/>
                                        <path d="M22.2188 18.5H19.875V25.5H16.75V18.5H14.1875V15.625H16.75V13.4062C16.75 10.9062 18.25 9.5 20.5312 9.5C21.625 9.5 22.7812 9.71875 22.7812 9.71875V12.1875H21.5C20.25 12.1875 19.875 12.9375 19.875 13.75V15.625H22.6562L22.2188 18.5Z" fill="#C6AA58"/>
                                        </svg>

                                </a>
                                <a href="">
                                    <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 6C0.5 2.68629 3.18629 0 6.5 0H30.5C33.8137 0 36.5 2.68629 36.5 6V28C36.5 31.3137 33.8137 34 30.5 34H6.5C3.18629 34 0.5 31.3137 0.5 28V6Z" fill="white"/>
                                        <path d="M24.8438 14.25C24.8438 14.4062 24.8438 14.5312 24.8438 14.6875C24.8438 19.0312 21.5625 24 15.5312 24C13.6562 24 11.9375 23.4688 10.5 22.5312C10.75 22.5625 11 22.5938 11.2812 22.5938C12.8125 22.5938 14.2188 22.0625 15.3438 21.1875C13.9062 21.1562 12.6875 20.2188 12.2812 18.9062C12.5 18.9375 12.6875 18.9688 12.9062 18.9688C13.1875 18.9688 13.5 18.9062 13.75 18.8438C12.25 18.5312 11.125 17.2188 11.125 15.625V15.5938C11.5625 15.8438 12.0938 15.9688 12.625 16C11.7188 15.4062 11.1562 14.4062 11.1562 13.2812C11.1562 12.6562 11.3125 12.0938 11.5938 11.625C13.2188 13.5938 15.6562 14.9062 18.375 15.0625C18.3125 14.8125 18.2812 14.5625 18.2812 14.3125C18.2812 12.5 19.75 11.0312 21.5625 11.0312C22.5 11.0312 23.3438 11.4062 23.9688 12.0625C24.6875 11.9062 25.4062 11.625 26.0312 11.25C25.7812 12.0312 25.2812 12.6562 24.5938 13.0625C25.25 13 25.9062 12.8125 26.4688 12.5625C26.0312 13.2188 25.4688 13.7812 24.8438 14.25Z" fill="#C6AA58"/>
                                        </svg>

                                </a>
                                <a href="">
                                    <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 6C0.5 2.68629 3.18629 0 6.5 0H30.5C33.8137 0 36.5 2.68629 36.5 6V28C36.5 31.3137 33.8137 34 30.5 34H6.5C3.18629 34 0.5 31.3137 0.5 28V6Z" fill="white"/>
                                        <path d="M18.5 12.9062C20.4688 12.9062 22.0938 14.5312 22.0938 16.5C22.0938 18.5 20.4688 20.0938 18.5 20.0938C16.5 20.0938 14.9062 18.5 14.9062 16.5C14.9062 14.5312 16.5 12.9062 18.5 12.9062ZM18.5 18.8438C19.7812 18.8438 20.8125 17.8125 20.8125 16.5C20.8125 15.2188 19.7812 14.1875 18.5 14.1875C17.1875 14.1875 16.1562 15.2188 16.1562 16.5C16.1562 17.8125 17.2188 18.8438 18.5 18.8438ZM23.0625 12.7812C23.0625 13.25 22.6875 13.625 22.2188 13.625C21.75 13.625 21.375 13.25 21.375 12.7812C21.375 12.3125 21.75 11.9375 22.2188 11.9375C22.6875 11.9375 23.0625 12.3125 23.0625 12.7812ZM25.4375 13.625C25.5 14.7812 25.5 18.25 25.4375 19.4062C25.375 20.5312 25.125 21.5 24.3125 22.3438C23.5 23.1562 22.5 23.4062 21.375 23.4688C20.2188 23.5312 16.75 23.5312 15.5938 23.4688C14.4688 23.4062 13.5 23.1562 12.6562 22.3438C11.8438 21.5 11.5938 20.5312 11.5312 19.4062C11.4688 18.25 11.4688 14.7812 11.5312 13.625C11.5938 12.5 11.8438 11.5 12.6562 10.6875C13.5 9.875 14.4688 9.625 15.5938 9.5625C16.75 9.5 20.2188 9.5 21.375 9.5625C22.5 9.625 23.5 9.875 24.3125 10.6875C25.125 11.5 25.375 12.5 25.4375 13.625ZM23.9375 20.625C24.3125 19.7188 24.2188 17.5312 24.2188 16.5C24.2188 15.5 24.3125 13.3125 23.9375 12.375C23.6875 11.7812 23.2188 11.2812 22.625 11.0625C21.6875 10.6875 19.5 10.7812 18.5 10.7812C17.4688 10.7812 15.2812 10.6875 14.375 11.0625C13.75 11.3125 13.2812 11.7812 13.0312 12.375C12.6562 13.3125 12.75 15.5 12.75 16.5C12.75 17.5312 12.6562 19.7188 13.0312 20.625C13.2812 21.25 13.75 21.7188 14.375 21.9688C15.2812 22.3438 17.4688 22.25 18.5 22.25C19.5 22.25 21.6875 22.3438 22.625 21.9688C23.2188 21.7188 23.7188 21.25 23.9375 20.625Z" fill="#C6AA58"/>
                                        </svg>

                                </a>
                                <a href=""><svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 6C0.5 2.68629 3.18629 0 6.5 0H30.5C33.8137 0 36.5 2.68629 36.5 6V28C36.5 31.3137 33.8137 34 30.5 34H6.5C3.18629 34 0.5 31.3137 0.5 28V6Z" fill="white"/>
                                    <path d="M26.6562 12.4062C27.0312 13.7188 27.0312 16.5312 27.0312 16.5312C27.0312 16.5312 27.0312 19.3125 26.6562 20.6562C26.4688 21.4062 25.875 21.9688 25.1562 22.1562C23.8125 22.5 18.5 22.5 18.5 22.5C18.5 22.5 13.1562 22.5 11.8125 22.1562C11.0938 21.9688 10.5 21.4062 10.3125 20.6562C9.9375 19.3125 9.9375 16.5312 9.9375 16.5312C9.9375 16.5312 9.9375 13.7188 10.3125 12.4062C10.5 11.6562 11.0938 11.0625 11.8125 10.875C13.1562 10.5 18.5 10.5 18.5 10.5C18.5 10.5 23.8125 10.5 25.1562 10.875C25.875 11.0625 26.4688 11.6562 26.6562 12.4062ZM16.75 19.0625L21.1875 16.5312L16.75 14V19.0625Z" fill="#C6AA58"/>
                                    </svg>
                                    </a>
                                <a href="">
                                    <svg width="37" height="34" viewBox="0 0 37 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.5 6C0.5 2.68629 3.18629 0 6.5 0H30.5C33.8137 0 36.5 2.68629 36.5 6V28C36.5 31.3137 33.8137 34 30.5 34H6.5C3.18629 34 0.5 31.3137 0.5 28V6Z" fill="white"/>
                                        <path d="M26 17.5C26 21.7812 22.5312 25.25 18.25 25.25C17.4375 25.25 16.6562 25.1562 15.9375 24.9062C16.25 24.4062 16.7188 23.5625 16.9062 22.875C17 22.5312 17.375 21.0312 17.375 21.0312C17.625 21.5312 18.375 21.9375 19.1562 21.9375C21.5 21.9375 23.1875 19.7812 23.1875 17.125C23.1875 14.5625 21.0938 12.625 18.4062 12.625C15.0625 12.625 13.2812 14.875 13.2812 17.3125C13.2812 18.4688 13.875 19.875 14.8438 20.3438C15 20.4062 15.0938 20.375 15.125 20.2188C15.125 20.125 15.2812 19.5938 15.3438 19.3438C15.3438 19.2812 15.3438 19.1875 15.2812 19.125C14.9688 18.75 14.7188 18.0312 14.7188 17.3438C14.7188 15.6562 16 14 18.2188 14C20.0938 14 21.4375 15.2812 21.4375 17.1562C21.4375 19.25 20.375 20.6875 19 20.6875C18.25 20.6875 17.6875 20.0625 17.8438 19.3125C18.0625 18.375 18.5 17.375 18.5 16.7188C18.5 16.125 18.1875 15.625 17.5312 15.625C16.75 15.625 16.125 16.4375 16.125 17.5C16.125 18.1875 16.3438 18.6562 16.3438 18.6562C16.3438 18.6562 15.5938 21.9062 15.4375 22.5C15.2812 23.1875 15.3438 24.125 15.4062 24.7188C12.5312 23.5938 10.5 20.8125 10.5 17.5C10.5 13.2188 13.9688 9.75 18.25 9.75C22.5312 9.75 26 13.2188 26 17.5Z" fill="#C6AA58"/>
                                        </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footerleavimg">
                <img src="./assets/img/footerleav.png" alt="">
            </div>
        </div>
        <!-- Footer End -->

        <button class="chatbot__button">
            <span class="material-symbols-outlined fs-4"><i class="fa-regular fa-message"></i></span>
            <span class="material-symbols-outlined fs-4"><i class="fa-solid fa-xmark"></i></span>
            </button>
            <div class="chatbot">
            <div class="chatbot__header">
              <h3 class="chatbox__title">Chatbot</h3>
              <span class="material-symbols-outlined">close</span>
            </div>
            <ul class="chatbot__box">
              <li class="chatbot__chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hi there. How can I help you today?</p>
              </li>
              <li class="chatbot__chat outgoing">
                <p>...</p>
              </li>
            </ul>
            <div class="chatbot__input-box">
              <textarea
                class="chatbot__textarea"
                placeholder="Enter a message..."
                required
              ></textarea>
              <span id="send-btn" class="material-symbols-outlined">send</span>
            </div>
            </div>
                    <!-- chat end -->


            <!-- Back to Top -->
            <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/lib/wow/wow.min.js"></script>
        <script src="assets/lib/easing/easing.min.js"></script>
        <script src="assets/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/lib/counterup/counterup.min.js"></script>
        <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="assets/lib/tempusdominus/js/moment.min.js"></script>
        <script src="assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Template Javascript -->
        <script src="assets/js/main.js"></script>





        <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>


</body>


</html>
