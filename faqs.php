<?php

session_start();

?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>FAQs -  OneKenya Online Grocery Shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="page-template belle">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <div class="top-header" style="background-color: green">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i> (+254) 713 235598</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                    <div class="text-center"><p class="top-header_middle-text"> Nationwide Express Shipping</p></div>
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                    <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Create Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.php">
                        <img src="assets/images/onekenya.png" style="margin-top: -35px" alt="OneKenya" title="" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav">
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="index.php">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            <li class="lvl1 parent megamenu"><a href="shop.php">Shop <i class="anm anm-angle-down-l"></i></a></li>
                            <li class="lvl1 parent megamenu"><a href="orders.php">Orders <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            <li class="lvl1 parent dropdown"><a href="wishlist.php">Wishlist <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            <li class="lvl1"><a href="cart.php" style="color: green"><b>Cart</b></a></li>
                        </ul>
                      </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.php">
                        <img src="assets/images/onekenya.png" style="margin-top: -50px" alt="OneKenya" title="" />
                    </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <?php
        include './includes/mobilemenu.php';
    ?>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">FAQs</h1></div>
      		</div>
		</div>
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div id="accordionExample">
                        <h2 class="title h2">Pyment and Returns</h2>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">What is Lorem Ipsum?</h4>
                            <div id="collapseOne" class="collapse panel-content" data-parent="#accordionExample">Nullam sed neque luctus, maximus diam sed, facilisis orci. Nunc ultricies neque a aliquam sollicitudin. Vivamus sit amet finibus sapien. Duis est dui, sodales nec pretium a, interdum in lacus. Sed et est vel velit vestibulum tincidunt non a felis. Phasellus convallis, diam eu facilisis tincidunt, ex nibh vulputate dolor, eu maximus massa libero vel eros. In vulputate metus lacus, eu vehicula dolor feugiat id. Nulla vitae nisl in ex consequat porttitor vel a lectus. Vestibulum viverra in velit ac consequat. Nullam porta nulla eu dignissim cursus.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why do we use it?</h4>
                            <div id="collapseTwo" class="collapse panel-content">Cras non gravida urna. Ut venenatis nulla in tellus lobortis, vel mollis lectus condimentum. Duis elementum sapien purus, et sagittis nulla efficitur in. Phasellus vitae eros sed nisi fringilla auctor nec quis nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque rutrum faucibus nibh vitae fermentum. Aliquam commodo sem sit amet malesuada consectetur. Ut sit amet vestibulum diam. Etiam quis dictum turpis, eget condimentum velit. Sed cursus odio dapibus, consectetur massa sit amet, fringilla purus.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to use this template?</h4>
                            <div class="panel-content collapse" id="collapseThree">Duis nec nisi id ligula dapibus maximus nec eu dui. Proin ornare, ipsum vitae tincidunt rutrum, diam neque accumsan turpis, a dignissim nisi libero non lacus. Nulla quis massa nulla. Morbi metus lacus, sagittis sed est vel, aliquet ultrices nibh. Morbi auctor ex eget egestas auctor.</div>
                        </div>
                        <h2 class="title h2">Other Resources</h2>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Integer et erat quis ante tristique lobortis at vel lorem.</h4>
                            <div class="panel-content collapse" id="collapseFour">Proin varius magna rhoncus quam egestas, id faucibus eros viverra. Suspendisse id ipsum at leo congue feugiat non faucibus enim. Suspendisse non hendrerit lorem. Phasellus sit amet nisi dui. Aliquam erat volutpat. Integer facilisis lacus est, a semper felis iaculis vel. Pellentesque ultrices lorem sed arcu ornare iaculis. Ut pellentesque a dolor ac iaculis. Nullam ac rutrum urna. Ut tempor tempus tincidunt. Sed facilisis ante sed tellus malesuada fermentum.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Where does it come from?</h4>
                            <div class="panel-content collapse" id="collapseFive">Aliquam erat volutpat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin tortor enim, lacinia nec malesuada eget, laoreet eget quam. Suspendisse quis mauris quis tellus rutrum imperdiet nec id ipsum. Suspendisse non nisi in metus viverra convallis. Nam dictum erat sed libero eleifend, a venenatis ipsum elementum. Nulla placerat metus nec nisl malesuada, et mattis mauris faucibus. Cras blandit efficitur condimentum. Nam euismod sapien et iaculis tempus. Duis vitae ullamcorper libero.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Why do we use it?</h4>
                            <div class="panel-content collapse" id="collapseSix">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</div>
                        </div>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <?php
        include './includes/subscribe.php';
        include './includes/footer.php';
    ?>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/faqs.html   11 Nov 2019 12:44:40 GMT -->
</html>