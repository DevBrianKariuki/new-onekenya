<?php

session_start();
include './includes/db.php';

if (isset($_SESSION['email'])) {

?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>Update Account &ndash; OneKenya Online Groceries Shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="page-template belle">
<div class="pageWrapper">
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
                    	<img src="assets/images/onekenya.png" style="margin-top: -35px" alt="" title="" />
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
                	<?php 
                        include './includes/desktopmenu.php';
                    ?>
                    <!--End Desktop Menu-->
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
        		<div class="wrapper"><h1 class="page-width">Update your account details</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                        <?php 
                        if (isset($_GET['error'])) { ?>
                            <div class="text-center text-danger p-4" style="color: red">
                                <i><?php echo strtoupper($_GET['error']); ?></i>
                            </div>
                    <?php } ?>


                    <?php 
                        if (isset($_GET['success'])) { ?>
                            <div class="text-center text-success p-4" style="color: green">
                                <i><?php echo strtoupper($_GET['success']); ?></i>
                            </div>
                    <?php } ?>
                	<div class="mb-4">
                       <form method="post" action="./includes/update_account.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">First Name</label>
                                    <input style="border-radius: 5px;" type="text" name="firstName" placeholder="" id="FirstName" autofocus="" required>
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                        <label for="CustomerLastName">Last Name</label>
                                        <input style="border-radius: 5px;" type="text" name="lastName" placeholder="" id="CustomerLastName" class="" autocorrect="off" autocapitalize="off" autofocus="" required>
                                    </div>
                               </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input style="border-radius: 5px;" type="email" name="email" placeholder="" id="CustomerEmail" class="text-muted" autocorrect="off" autocapitalize="off" autofocus="" disabled="disabled" value=<?php echo $_SESSION['email'];?>>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPhone">Phone</label>
                                        <input style="border-radius: 5px;" type="tel" name="phone" placeholder="" id="Customerphone" class="" autocorrect="off" autocapitalize="off" autofocus="" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword">Password</label>
                                        <input style="border-radius: 5px;" oninput="checkPassword()" type="password" value="" name="password" placeholder="" id="CustomerPassword" class="" required> 
                                        <div id="error-text" class="text-danger" style="font-family: poppins"><i>Passwords is less than 6 characters</i></div>
                                    <script>document.getElementById("error-text").style.display = "none";</script>                      	
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="CustomerPassword" class="text-muted"><i>(Enter your <b>current password</b> to update account details)</i></label>
                                        <input style="border-radius: 5px;" type="password" value="" name="currentpassword" placeholder="" id="CustomerPassword" class="" required>                            
                                    </div>
                                </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <p class="cart_tearm">
                                    <label>
                                      <input type="checkbox" name="terms" class="checkbox" value="tearm" required="">
                                      &nbsp;I agree with the <a href="">Terms and Conditions</a>
                                    </label>
                                </p>
                                <button type="submit" name="update" style="border-radius: 5px; background-color: green; color: white; width: 100px" class="btn btn--large">Update</button>
                            </div>
                         </div>
                     </form>
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
    <script>
        function checkPassword() {
            let pass1 = document.getElementById('CustomerPassword').value;

            if (pass1.length < 6) {
                document.getElementById("error-text").style.display = "block";
            }else if (pass1.length > 6){
                document.getElementById("error-text").style.display = "none";
            }
        }
        
    </script>
    
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