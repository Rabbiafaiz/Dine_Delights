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
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- slick css cdn start -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- slick css cdn end -->


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />







<!-- chat links start -->


<link 
rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
/>
<link
rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0"
/>

<!-- chat links end -->





</head>

<body>
    <div class="container-xxl  p-0">
        
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


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
            <a href="{{route('home')}}" class="nav-item nav-link ">Home</a>
            <a href="{{route('menu')}}" class="nav-item nav-link ">Menu</a>
            <a href="{{route('blog')}}" class="nav-item nav-link">Blog</a>
            <a href="{{route('about')}}" class="nav-item nav-link active">About</a>
            
        
            <a href="{{route('list')}}" class="nav-item nav-link ">Shop</a>
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

    <div class="container-xxl py-5 bg-dark hero-headerthird mb-5">
        <div class="container text-center my-5 pt-5 pb-4 mainsubtext">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Shop Details</h1>
            <nav aria-label="breadcrumb text-white">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item text1sub"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text2sub"><a href="#"> Shop details</a></li>

                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->




        <div class="container-fluid ">
            <!-- image slider starts -->
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-6">
                        <div class="row flex-column-reverse flex-lg-row   ">
                            <div class="col-12 col-lg-3">
                                <div class="items d-flex flex-lg-column flex-row gap-2 gap-sm-3 gap-lg-0   ">
                                    <div class="item active  ">
                                        <img class="img-fluid " src="./assets/img/Rectangle 8887s1.png" alt="" />
                                    </div>
                                    <div class="item">
                                        <img class="img-fluid " src="./assets/img/Rectangle 8886s2.png" alt="" />
                                    </div>
                                    <div class="item ">
                                        <img class="img-fluid " src="./assets/img/Rectangle 8885s3.png" alt="" />
                                    </div>
                                    <div class="item ">
                                        <img class="img-fluid " src="./assets/img/Rectangle 8884s4.png" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-9 mb-4 mb-lg-0   ">
                                <div class="carousel d-block ">
                                    <button id="prevBtn"><i class="fas fa-angle-left"></i></button>
                                    <button id="nextBtn"><i class="fas fa-angle-right"></i></button>
                                    <div class="slides-container">
                                        <div class="slide">
                                            <img class="" src="./assets/img/Rectangle 8887s1.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img class=" " src="./assets/img/Rectangle 8886s2.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="./assets/img/Rectangle 8885s3.png" alt="" />
                                        </div>
                                        <div class="slide">
                                            <img src="./assets/img/Rectangle 8884s4.png" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <!-- right side details -->
                        <div class="">
                            <div class="d-flex align-items-center justify-content-between  ">
                                <p class="in-stock-label d-inline-block ">In stock</p>

                                <div class="d-flex align-items-center gap-4">
                                    <div class="text-secondary  ">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        <span>Prev</span>

                                    </div>
                                    <div class="text-secondary  ">

                                        <span>Next</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="slider-stock-heading ">Yummy Chicken Chup</h1>
                            <p class="slider-stock-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque diam pellentesque bibendum non dui volutpat fringilla bibendum. Urna, urna,
                                vitae feugiat pretium donec id elementum. Ultrices mattis sed vitae mus risus. Lacus
                                nisi, et ac dapibus sit eu velit in consequat.</p>
    
                            <hr class="bg-white ">
                            
                            <div class=" mt-2 d-flex flex-sm-row flex-column  align-content-center ">
                                <div class="stars-container d-inline-block ">
                                    <span class="price-span text-white fs-3 ">54.00$</span>
                                    <span class="stars"><img src="./assets/img/Star.svg" alt=""></span>
                                    <span class="stars"><img src="./assets/img/Star.svg" alt=""></span>
                                    <span class="stars"><img src="./assets/img/Star.svg" alt=""></span>
                                    <span class="stars"><img src="./assets/img/Star.svg" alt=""></span>
                                    <span class="stars"><img src="./assets/img/Star.svg" alt=""></span>
                                </div>
                                <div class="mt-sm-0 mt-3 ">

                                    <span class="Ratings-count   fs-5   ">5.0 Rating</span>
                                    <div class="Reviews  fs-5 d-inline-block   ">22 Review</d>
                                    </div>
                                </div>
                            </div>
                            <p class=" mt-4 text-white fs-5 ">Dictum/cursus/Risus</p>
                      
    
                            <div class="d-flex flex-sm-row flex-column m-auto ">
                               
                               
                               
                               
                               
                                <div class="d-flex border border-1 border-secondary justify-content-center   border-round  mb-3 ">
                                    <button class="btn btn-outline-secondary border-0  text-white px-2 price-btn "
                                        type="button">-</button>
                                    <input type="number"
                                        class="text-center ps-sm-3 ps-1 bg-transparent price-change-input  text-white"
                                        id="price" value="0" >
                                    <button class="btn btn-outline-secondary border-0 text-white px-2 price-btn "
                                        type="button">+</button>
                                </div>
                            
                                  
                                
                                <div class="add-to-cart ps-sm-4 ps-0  ">
                                    <button class="btn add-to-cart-btn px-5 rounded-3" type="button">
                                        
                                        <i class="fa-solid fa-bag-shopping"></i>
                                        Order Now </button>
                                </div>
                                
    
                            </div>


                            <hr class="bg-white my-4 ">
                            <div class="category mb-1 d-flex gap-3 ">
                                <i class="fa-regular text-white  fa-heart"></i>
                                <span class="category text-white   ">Add to Wishlist</span>
                                <i class="fa-solid text-white  fa-diagram-project"></i>
                                <span class="category text-white   ">Compare</span>
                            </div>
                            <div class="tag my-3 ">
                                <span class="tag ">Category:</span>
                                <span class="tag text-white ps-1">Pizza</span>
    
                            </div>

                            <div class="tag">
                                <span class="tag ">Tag:</span>
                                <span class="tag text-white ps-1">Our Shop</span>
    
                            </div>
                            <div class="mt-3 d-flex gap-3  ">
                                <span class="tag ">Share : </span>
                                <i class="fa-brands text-white  fa-youtube"></i>
                                <i class="fa-brands text-white  fa-facebook"></i>
                                <i class="fa-brands text-white  fa-twitter"></i>
                                <i class="fa-solid text-white  fa-circle-user"></i>
                                <i class="fa-brands text-white fa-instagram"></i>
                            </div>
    
    
                        </div>
                    </div>
                </div>
    
              
    <!-- section review start -->
    <div class="d-flex align-items-center gap-5 my-5  ">

        <div class="add-to-cart">
            <button class="btn add-to-cart-btn px-sm-5 px-3  rounded-2   " type="button">Description </button>
        </div>

        <span class="text-white fs-5 ">Reviews (24)</span>
    </div>

    <div class="my-5 fs-5 ">
        <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
        <p>Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl.</p>
    </div>

    <div>
        <h4 class="text-white fs-5 ">Key Benefits</h4>

        <ul class="text-secondary  fs-5 ">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </li>
            <li>Maecenas ullamcorper est et massa mattis condimentum.
            </li>
            <li>Vestibulum sed massa vel ipsum imperdiet malesuada id tempus nisl.</li>
            <li>Etiam nec massa et lectus faucibus ornare congue in nunc.</li>
            <li>Mauris eget diam magna, in blandit turpis.</li>
        </ul>

    </div>
    <!-- section review end -->
    
                <!-- image slider ends -->
    
    
            </div>
    
            <!-- *********carousel********** -->
            <div class="container">
                <div class="row pg-btn ">
                    <p class="slider-title text-area-label fs-3 my-4 text-white">Similar Products</p>
    
                    <div class="slider">
                        <div class="col-3">
                            <div class="card bg-transparent border  border-0   ">
                                <img src="./assets/img/unsplash_ZuIDLSz3XLg (1).png"
                                    class="card-img-top img-fluid  card-image " alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_-GFCYhoRe48.png" class="card-img-top img-fluid card-image "
                                    alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_LgTyii0GDKQ.png" class="card-img-top img-fluid card-image "
                                    alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        
    
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_ZuIDLSz3XLg (1).png"
                                    class="card-img-top img-fluid card-image w-[] " alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="card bg-transparent border border-0   ">
                                <img src="./assets/img/unsplash_ZuIDLSz3XLg (1).png"
                                    class="card-img-top img-fluid  card-image " alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_-GFCYhoRe48.png" class="card-img-top img-fluid card-image "
                                    alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_LgTyii0GDKQ.png" class="card-img-top img-fluid card-image "
                                    alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card bg-transparent  " >
                                <img src="./assets/img/unsplash_ZuIDLSz3XLg (1).png"
                                    class="card-img-top img-fluid card-image w-[] " alt="...">
                                <div class="card-body ps-0">
                                    <p class="card-text mb-0">
                                        <span class=" text-white ">Fresh Lime</span>
                                    <p class=""> <span class="current-price">$28.00</span> <span
                                            class="old-price"><del>$45.00</del></span></p>
                                    </p>
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
        </div>
    

      
        <!-- *************************** -->






        <!-- chat start -->




<!-- Code :) -->
<button class="chatbot__button">
<span class="material-symbols-outlined"><i class="fa-regular fa-message"></i></span>
<span class="material-symbols-outlined">close</span>
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




       
    </div>

   

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


    </div>

    <!-- js for carousel -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    
const slidesContainer = document.querySelector(".slides-container");
const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector("#nextBtn");
const prevBtn = document.querySelector("#prevBtn");
const items = document.querySelectorAll(".item");

const slideWidth = slides[0].clientWidth;
let index = 0;

slidesContainer.insertAdjacentHTML(
    "afterbegin",
    slides[slides.length - 1].outerHTML
);
slidesContainer.insertAdjacentHTML("beforeend", slides[0].outerHTML);

slidesContainer.style.transform = `translateX(${-slideWidth}px)`;

nextBtn.addEventListener("click", () => {
    slidesContainer.style.transition = "all 0.3s ease-in-out";

    index++;
    slidesContainer.style.transform = `translateX(${-slideWidth * (index + 1)
        }px)`;

    items.forEach((item) => item.classList.remove("active"));

    if (index > slides.length - 1) {
        setTimeout(() => {
            index = 0;
            slidesContainer.style.transform = `translateX(${-slideWidth}px)`;
            items[index].classList.add("active");
            slidesContainer.style.transition = "none";
        }, 300);
    } else {
        items[index].classList.add("active");
    }
});

prevBtn.addEventListener("click", () => {
    slidesContainer.style.transition = "all 0.3s ease-in-out";

    index--;
    slidesContainer.style.transform = `translateX(${-slideWidth * (index + 1)
        }px)`;

    items.forEach((item) => item.classList.remove("active"));

    if (index < 0) {
        setTimeout(() => {
            index = slides.length - 1;
            slidesContainer.style.transform = `translateX(${-slideWidth * (index + 1)
                }px)`;
            items[index].classList.add("active");
            slidesContainer.style.transition = "none";
        }, 300);
    } else {
        items[index].classList.add("active");
    }
});

items.forEach((item, i) => {
    slidesContainer.style.transition = "all 0.3s ease-in-out";

    item.addEventListener("click", () => {
        items.forEach((item) => item.classList.remove("active"));
        index = i;
        item.classList.add("active");
        slidesContainer.style.transition = "all 0.3s ease-in-out";

        slidesContainer.style.transform = `translateX(${-slideWidth * (index + 1)
            }px)`;
    });
});
</script>

    <script>

        $('.slider').slick({
            dots: false,
            infinite: true,
            Pagination: false,
            speed: 800,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        Pagination: false

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        Pagination: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        Pagination: false
                    }
                }
            ]
        });
    </script>







<!-- chat js start -->



<!-- chat js end -->

</body>

</html>







