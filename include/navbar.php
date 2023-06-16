<div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="assets/img/IOTA-LOGO-white-BG.svg" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->

    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-4" style="background-image: none;">
        <div class="container">
            <div class="content text-white">
            </div>
        </div>
    </div>
    
<nav class="navbar navbar-expand-lg navbar-light style-4" id="main-nav">
    <div class="container-fluid" style="padding-left:5em;padding-right:5em;">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/IOTA-LOGO-white-BG.svg" class="company_logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-uppercase">
              
              
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if(isset($_GET['p'])){ ?>active <?php } ?> " href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                            <small class="hot alert-danger text-danger">new</small>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item " href="./product-t9.php?p=t">Trace9</a></li>
                            <li><a class="dropdown-item" href="./product-amygdala.php?p=a">Amygdala XDR </a></li> 
                        </ul>
                    </li>

               
                <li class="nav-item">
                    <a class="nav-link" href="about.php" >
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php" >
                        Services
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="comming-soon.php" >
                        Software Licensing  Portal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="comming-soon.php" >
                       Partner Portal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="comming-soon.php" >
                        Total Tech Care
                    </a>
                </li> 
            </ul>
            <div class="nGet Startedav-side">
                <div class="d-flex align-items-center">
                    <a href="contact.php" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold" >
                        <span>Get Started   </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>