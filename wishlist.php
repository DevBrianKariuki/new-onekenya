<?php

session_start();
include './includes/db.php';

if (isset($_SESSION['email'])) {

?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>My Wishlist - OneKenya Online shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="page-template belle cart-variant1">
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search in the store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="icon anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <?php
        include './includes/top-bar.php';
    ?>
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
                <?php 
                    include './includes/desktopmenu.php';
                 ?>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.php">
                            <img src="assets/images/onekenya.png" style="margin-top: -35px" alt="" title="" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                        <?php 
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                              $count = count($_SESSION['cart']);
                            }
                        ?>
                        <a href="cart.php" class="site-header__cart" title="Cart">
                            <i style="color: green" class="icon anm anm-bag-l"></i>
                            <span id="CartCount" style="background-color: green" class="site-header__cart-count" data-cart-render="item_count"><?php echo $count ?></span>
                        </a>
                    </div>
                    <div class="site-header__search">
                        <button type="button" class="search-trigger"><i style="color: green" class="icon anm anm-search-l"></i></button>
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
        		<div class="wrapper"><h1 class="page-width" style="color: green"><b>My Wishlist</b></h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#" method="post" class="cart style2">
                		<table class="table">
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center" style="font-family: poppins; font-size: 15px"><strong>Product</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>Description</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>Price</strong></th>
                                    <th class="text-right" style="font-family: poppins; font-size: 15px"><b>Availability</b></th>
                                    <th class="action">&nbsp;</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <?php

                                if (isset($_SESSION['wish'])) {
                                        
                                    foreach ($_SESSION['wish'] as $key => $value) {
                                
                 
                               ?>
                                <tr class="cart__row border-bottom line1 cart-flex">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" width="100" height="100" src="vendor/products/<?=$value['image']?>" alt=""></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item text-center" style="padding-top: 50px">
                                        <div class="list-view-item__title">
                                            <h3><b><?php echo $value['item'] ?></b> </h3>
                                        </div>
                                        
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item" style="padding-top: 50px">
                                        <span class="money"><?php echo $value['description'] ?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right" style="padding-top: 50px">
                                        <div class="cart__qty text-center">
                                            <span class="money">Ksh <?php echo $value['price'] ?></span>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price" style="padding-top: 50px">
                                        <div><span class="text-success"><b><?php echo $value['availability'] ?></b></span></div>
                                    </td>
                                    <td class="text-center small--hide" style="padding-top: 50px">
                                        <button type="submit" style="border-radius: 5px; background-color: green" name="clear" class="btn btn-secondary btn--small  small--hide">Add to cart</button>
                                    </td>
                                    <td class="text-center small--hide" style="padding-top: 50px">
                                        <a href="#" style="background-color: white; on:hover{border:none;}" class="btn" title="Remove from wishlist"><i style="color: red;" class="icon icon anm anm-window-close"></i></a>
                                    </td>                                   
                                </tr>
                                <?php 
                                    }
                                        } else { ?>
                                          
                                          <div class="text-center text-muted" style="font-family: poppins" >
                                            <h4 style="color: red;padding-bottom: 20px;font-family: poppins" >You have not added items in your wishlist</h4>
                                          </div>

                                          <?php
                                        }
                                  ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-left">
                                        <a href="shop.php" style="border-radius: 5px; color: white;background-color: green" class="btn btn-secondary btn--medium cart-continue ml-2"><i class="icon icon anm anm-arw-left"></i> Continue Shopping </a>
                                    </td>
                                    <td colspan="4" class="text-right">
                                        <a href="cart.php" name="update" style="border-radius: 5px; color: white;background-color: green" class="btn btn-secondary btn--medium cart-continue ml-2">Proceed to Cart <i class="icon icon anm anm-arw-right"></i></a>
                                    </td>
                                </tr>
                            </tfoot>
                    </table> 
                    </form>                   
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
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r" style="color: green; "></i></span>
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

</html>

<?php

}else{
    header("Location: login.php");
}

?>