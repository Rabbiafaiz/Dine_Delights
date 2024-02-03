<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Floating Chat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- font family links  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap"
      rel="stylesheet"
    />
    <!-- font family links  -->

      <!-- font awsome link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- font awsome link  -->

    <style>


      /* flaoting fish css start --------------- */
     .backgroundFish{
        background: url(../Resturent/img/machliImg.png);
        height: 500px;
        width: 100%;
        background-repeat: no-repeat;
        object-fit: cover;
     }
     .memHead{
        color: #FFF !important;
font-kerning: none;
font-family: Inter;
font-size: 28px;
font-style: normal;
font-weight: 700;
line-height: 56px;
     }
     .contH{
        color: #C6AA58;
text-align: center;
font-kerning: none;
font-family: Inter;
font-size: 28px;
font-style: normal;
font-weight: 700;
line-height: 56px; /* 200% */
     }
.chooseBtn{
    color: #C6AA58;
text-align: center;
font-family: Inter;
font-size: 16px;
font-style: normal;
font-weight: 500;
line-height: 24px; /* 150% */
border-radius: 4px;
border: 1px solid #C6AA58;
background: rgba(198, 170, 88, 0.20);
}
.blurBg{
    border-radius: 6px !important;
background: rgba(255, 255, 255, 0.10) !important;
backdrop-filter: blur(12.5px) !important;
}

      /* flaoting fish css end----------------  */



      /* media query start ----------- */
      @media screen and (max-width: 400px) {
 .memHead {
    font-size: 18px;
 }
 .contH{
    font-size: 18px;
 }
}

      /* media query start ----------- */
    </style>
  </head>

  <body class="">

    <div class="container-xxl  p-0">
      <div id="spinner"
          class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
          <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
              <span class="sr-only">Loading...</span>
          </div>
      </div>


      <!-- Navbar & Hero Start -->

          <nav class="navbar navbar-expand-lg navbar-dark  px-4 px-lg-5 py-3 py-lg-0">

              <a href="" class="navbar-brand p-0 d-lg-none">
                  <img src="./assets/img/logo.png" alt="">

              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse d-lg-flex justify-content-lg-around" id="navbarCollapse">
                  <div class="navbar-nav   py-0 pe-4">
                      <a href="{{ route('home')}}" class="nav-item nav-link active">Home</a>
                      {{-- <a href="{{ route('menu')}}" class="nav-item nav-link">Menu</a> --}}
                      <a href="{{ route('blog')}}" class="nav-item nav-link">Blog</a>
                      <a href="{{ route('about')}}" class="nav-item nav-link">About</a>


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

      <!-- Navbar & Hero End -->


    <section class="pt-5">
        <div class="container-fluid backgroundFish">
            <div class="row mt-5 pt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="row">
                       <div class="col-md-6">
                        <div class="blurBg  p-5">
                            <span class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87" fill="none">
                                    <g clip-path="url(#clip0_60_6372)">
                                      <path d="M43.5498 38.7238C54.0342 38.7238 62.5308 30.2272 62.5308 19.7428C62.5308 9.25834 54.0342 0.772461 43.5498 0.772461C33.0654 0.772461 24.5688 9.26902 24.5688 19.7535C24.5688 30.2379 33.0654 38.7238 43.5498 38.7238ZM43.5498 10.263C48.7867 10.263 53.0403 14.5059 53.0403 19.7535C53.0403 25.001 48.7974 29.244 43.5498 29.244C38.3022 29.244 34.0593 25.001 34.0593 19.7535C34.0593 14.5059 38.3129 10.263 43.5498 10.263ZM43.5498 48.2143C25.2101 48.2143 10.3438 63.0806 10.3438 81.4203C10.3438 84.0388 12.4706 86.1656 15.089 86.1656C17.7074 86.1656 19.8342 84.0388 19.8342 81.4203C19.8342 68.3175 30.4576 57.7048 43.5498 57.7048C56.642 57.7048 67.2654 68.3175 67.2654 81.4203C67.2654 84.0388 69.3922 86.1656 72.0106 86.1656C74.6291 86.1656 76.7559 84.0388 76.7559 81.4203C76.7559 63.0806 61.8896 48.2143 43.5498 48.2143Z" fill="#C6AA58"/>
                                      <path d="M40.0713 61.1262L38.9598 74.5497C38.9171 75.1055 39.0667 75.6612 39.3873 76.1208L42.476 80.492C42.6791 80.7699 42.9997 80.9408 43.3417 80.9408C43.6837 80.9408 44.015 80.7699 44.2074 80.492L47.2961 76.1208C47.6167 75.6612 47.7663 75.1055 47.7236 74.5497L46.6121 61.1262C48.3328 58.6574 50.0534 56.1886 51.7741 53.7305C49.7542 53.132 46.8579 52.5121 43.331 52.5442C40.0072 52.5655 37.2605 53.1533 35.3047 53.7305C36.9078 56.1886 38.4896 58.6574 40.0713 61.1262Z" fill="#C6AA58"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_60_6372">
                                        <rect width="85.5" height="85.5" fill="white" transform="translate(0.75 0.666992)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                            </span>
                            <h3 class="memHead text-center">
                                <span class="contH">Continue</span> as Member
                            </h3>
                         <a href="{{route('login')}}">
                          <button class="btn chooseBtn w-100">
                            Choose
                        </button>
                         </a>
                        </div>
                       </div>
                    <div class="col-md-6">
                        <div class="blurBg  p-5">
                            <span class="d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87" fill="none">
                                    <g clip-path="url(#clip0_60_6393)">
                                      <path d="M43.5498 38.7238C54.0342 38.7238 62.5308 30.2272 62.5308 19.7428C62.5308 9.25834 54.0342 0.772461 43.5498 0.772461C33.0654 0.772461 24.5688 9.26902 24.5688 19.7535C24.5688 30.2379 33.0654 38.7238 43.5498 38.7238ZM43.5498 10.263C48.7867 10.263 53.0403 14.5059 53.0403 19.7535C53.0403 25.001 48.7974 29.244 43.5498 29.244C38.3022 29.244 34.0593 25.001 34.0593 19.7535C34.0593 14.5059 38.3129 10.263 43.5498 10.263ZM43.5498 48.2143C25.2101 48.2143 10.3438 63.0806 10.3438 81.4203C10.3438 84.0388 12.4706 86.1656 15.089 86.1656C17.7074 86.1656 19.8342 84.0388 19.8342 81.4203C19.8342 68.3175 30.4576 57.7048 43.5498 57.7048C56.642 57.7048 67.2654 68.3175 67.2654 81.4203C67.2654 84.0388 69.3922 86.1656 72.0106 86.1656C74.6291 86.1656 76.7559 84.0388 76.7559 81.4203C76.7559 63.0806 61.8896 48.2143 43.5498 48.2143Z" fill="#C6AA58"/>
                                    </g>
                                    <defs>
                                      <clipPath id="clip0_60_6393">
                                        <rect width="85.5" height="85.5" fill="white" transform="translate(0.75 0.666992)"/>
                                      </clipPath>
                                    </defs>
                                  </svg>
                            </span>
                            <h3 class="memHead text-center">
                                <span class="contH">Continue</span> as Guest
                            </h3>
                           <a href="{{route('home')}}">

                            <button class="btn chooseBtn w-100">
                              Choose
                          </button>
                           </a>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>





    </section>

    </div>

       <!-- Footer Start -->
       <div class="container-fluid p-0  position-relative text-light footer  wow fadeIn" data-wow-delay="0.1s" style="">

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
