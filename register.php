<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>Register Account &ndash; OneKenya Online Groceries Shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="page-template belle">
<div class="pageWrapper">
	
    <!--Top Header-->
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
        		<div class="wrapper"><h1 style="color: green; font-weight: 600" class="page-width">Create an account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                        <?php if (isset($_GET['error'])) { ?>
                              <div class="text-danger text-center">
                                <?php echo $_GET['error']; ?>
                              </div>
                        <?php } ?>
                       <form method="POST" action="/ONEKENYA1/includes/register.php" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">First Name</label>
                                    <input style="border-radius: 5px;" type="text" name="first_name" placeholder="" id="FirstName" autofocus="" autocomplete="off" required>
                                </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Last Name</label>
                                    <input style="border-radius: 5px;" type="text" name="last_name" placeholder="" id="lastName" autocomplete="off" required>
                                </div>
                               </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input style="border-radius: 5px;" type="email" name="email" placeholder="" id="email" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="Phone">Phone</label>
                                    <input style="border-radius: 5px;" type="tel" name="phone" placeholder="" id="phone" onchange="validatePhone()" autocomplete="off" required>
                                    <div id="error-text1" class="text-danger" style="font-family: poppins"><i>Please enter a valid phone number</i></div>
                                    <script>document.getElementById("error-text1").style.display = "none";</script>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input style="border-radius: 5px;" type="password" name="password1" placeholder="" id="password1" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="Password">Confirm Password</label>
                                    <input style="border-radius: 5px;" type="password" name="password2" placeholder="" id="password2" onfocus="passCheck()" oninput="passCheck()" autocomplete="off"  autofocus="" required>
                                    <div id="error-text" class="text-danger" style="font-family: poppins"><i>Passwords do not match</i></div>
                                    <script>document.getElementById("error-text").style.display = "none";</script>
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
                            <button type="submit" name="register" style="border-radius: 5px; background-color: green; color: white; width: 300px" class="btn btn--large mb-3">Create Account</button>
                            <p class="mt-6">
                                    <p id="Loginlink">Already have an account? &nbsp; | &nbsp;<a href="login.php" id="customer_register_link">Login</a></p>
                                </p>
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
        function validatePhone() {
            let phone = document.getElementById("phone").value;

            if (phone.length < 10 || phone.length > 10) {
                document.getElementById("error-text1").style.display = "block";
            } else {
                document.getElementById("error-text1").style.display = "none";
            }
        }

        function passCheck() {
            let pass1 = document.getElementById('password1').value;
            let pass2 = document.getElementById('password2').value;

            if (pass1 != pass2) {
                document.getElementById("error-text").style.display = "block";
            }else if (pass1 === pass2){
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