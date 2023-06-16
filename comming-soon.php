<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from iteck-html.themescamp.com/page-comming-soon-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 11:30:54 GMT -->
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>IOTA Solutions | Coming Soon</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.7.2/font/bootstrap-icons.css">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/css/lib/swiper.min.css" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    

    <div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="assets/img/IOTA-LOGO-white-BG.svg" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->
 

    
     

    <!--Contents-->
    <main class="comming-soon-page style-5">

        <!-- ====== start careers-features ====== -->
        <section class="comming-soon style-5">
            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="info">
                                
                                <h3> We Are Coming Very Soon </h3>
                                
                                <a href="index.php" class="btn rounded-pill bg-blue4   text-white mt-20">
                                    <small> Home  </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/comming_man_shape.png" alt="" class="comming_man_shape slide_up_down">
            <img src="assets/img/comming_chat_shape.png" alt="" class="comming_chat_shape slide_up_down">
            <img src="assets/img/comming_light_shape.png" alt="" class="comming_light_shape slide_up_down">
        </section>
        <!-- ====== end timeline ====== -->

    </main>
    <!--End-Contents-->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/js/lib/wow.min.js"></script>
    <script src="assets/js/lib/jquery.fancybox.js"></script>
    <script src="assets/js/lib/lity.js"></script>
    <script src="assets/js/lib/swiper.min.js"></script>
    <script src="assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/js/lib/jquery.counterup.js"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="assets/js/lib/scrollIt.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24,
        week = hour * 24 * 7;

        let countDown = new Date('Oct 29, 2022 11:30').getTime(),
            x = setInterval(function() {

                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                //if (distance < 0) {
                //  clearInterval(x);
                //  'IT'S MY BIRTHDAY!;
                //}

            }, second)
    </script>

</body>


<!-- Mirrored from iteck-html.themescamp.com/page-comming-soon-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 11:30:55 GMT -->
</html>