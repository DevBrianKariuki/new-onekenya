<?php

session_start();
include './includes/db.php';

if (isset($_SESSION['email'])) {

?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>My Orders - OneKenya Online shop</title>
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
                            <img src="assets/images/onekenya.png" style="margin-top: -50px" alt="" title="" />
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
        		<div class="wrapper"><h1 class="page-width" style="color: green"><b>My Orders</b></h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<!--<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
					</div>-->
                	<form action="#" method="post" class="cart style2">
                        <?php 
                            if (isset($_GET['success'])) { ?>
                                <div class="text-center text-success mt--20" style="color: green">
                                    <b><?php echo strtoupper($_GET['success']); ?></b>
                                </div>
                        <?php } ?>
                		<table class="table">
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>Ref Code</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>Date Ordered</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>Amount</strong></th>
                                    <th class="text-right" style="font-family: poppins; font-size: 15px"><b>Status</b></th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <?php
                                    $email = $_SESSION['email'];
                                    $sql = "SELECT * FROM orders where email = '$email' ";
                                    $result = mysqli_query($db, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                      // output data of each row
                                      while($row = mysqli_fetch_assoc($result)) {

                               ?>
                                <tr class="cart__row border-bottom line1 cart-flex">
                                    <td class="cart__meta small--text-left cart-flex-item text-center" style="padding-top: 20px">
                                        <div class="list-view-item__title">
                                            <h3><b><?php echo $row['ref_code']; ?></b> </h3>
                                        </div>
                                        
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item" style="padding-top: 20px">
                                        <span class="money"><?php echo $row['date_ordered']; ?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right" style="padding-top: 20px">
                                        <div class="cart__qty text-center">
                                            <span class="money">Ksh <?php echo $row['amount']; ?></span>
                                        </div>
                                    </td>
                                    <td class="text-right small--hide cart-price" style="padding-top: 20px">
                                        <div><span class="text-muted"><b><?php echo $row['status']; ?></b></span></div>
                                    </td>
                                    <td class="text-center small--hide" style="padding-top: 20px">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview" style="background-color: white; on:hover{border:none;}" class="btn" title="View Order Details"><i style="color: green;" class="icon icon anm anm-list-r"></i></a>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                        } else { ?>
                                          
                                          <div class="text-center text-success">
                                            <h4 style="color: red; font-family: poppins; padding-bottom: 20px">You have not placed an order</h4>
                                          </div>

                                          <?php
                                        }
                                  ?>
                            </tbody>
                    </table>
                    </form>                   
               	</div>
   
            </div>
        </div>
        
    </div>
    <!--End Body Content-->



    <!--Quick View popup-->
    <div class="modal fade quick-view-popup" id="content_quickview">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="ProductSection-product-template" class="product-template__container prstyle1">
                <div class="product-single">
                    <!-- Start model close -->
                        <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                    <!-- End model close -->

                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <td><b>REF CODE</b></td>
                                    <td><b>CUSTOMER</b></td>
                                    <td><b>DATE ORDERED</b></td>
                                    <td><b>STATUS</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="padding: 15px">0200458903</td>
                                    <td>James Mwangi</td>
                                    <td>22/06/2022</td>
                                    <td>Pending</td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table-striped ">
                            <thead>
                                <tr class="text-center">
                                    <td colspan="2"><b>Product</b></td>
                                    <td><b>Price</b></td>
                                    <td><b>Qty</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td >This is for image</td>
                                    <td>Tomatoes</td>
                                    <td>150</td>
                                    <td>6</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr style="padding-top: 15px">
                                    <td colspan="2" class="text-left">Total</td>
                                    <td colspan="2" class="text-right"><b>KSh 7,658</b></td>
                                </tr>
                            </tfoot>
                        </table>


                </div>
                <!--End-product-single-->
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Quick View popup-->









    
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