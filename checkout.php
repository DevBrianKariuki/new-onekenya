<?php

session_start();
include './includes/db.php';


if (isset($_SESSION['email'])) {
    
?>




<html class="no-js" lang="en">

<head>
<title>Thank you - OneKenya Online Grocery Shop</title>
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
                            <img src="assets/images/onekenya.png" style="margin-top: -50px" alt="Logo" title="" />
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
                    	<a href="#" class="site-header__cart" title="Cart">
                        	<i style="color: green" class="icon anm anm-bag-l"></i>
                            <span id="CartCount" style="background-color: green; color: white" class="site-header__cart-count" data-cart-render="item_count"><?php echo $count ?></span>
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
        		<div class="wrapper"><h1 class="page-width" style="color: green; font-weight: 600">CHECKOUT</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer text-center" style="background-color: green;">
                        <h3 style="background-color: green;"><i class="icon anm anm-crown"></i> Thank you for shopping with us <a href="#customer-login" id="customer" class="text-white text-decoration-underline" data-toggle="collapse"></a></h3>
                        <div id="customer-login" class="collapse customer-content">
                            <div class="customer-info">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3" >
                    <div class="customer-box customer-coupon">
                        <h3 style="background-color: green;" class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? <a href="#have-coupon" class="text-white text-decoration-underline" data-toggle="collapse">Click here to enter your code</a></h3>
                        <div id="have-coupon" class="collapse coupon-checkout-content">
                            <div class="discount-coupon">
                                <div id="coupon" class="coupon-dec tab-pane active">
                                    <p class="margin-10px-bottom">Enter your coupon code if you have one.</p>
                                    <label class="required get" for="coupon-code"><span class="required-f">*</span> Coupon</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form action="./includes/makeorder.php" method="POST">
                            <fieldset>
                                <h2 class="login-title mb-3"><b>Billing details</b></h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname">First Name<span style="color: red" class="required-f">*</span></label>
                                        <input style="border-radius: 4px" name="firstname" id="input-firstname" type="text" value=<?php echo $_SESSION['first_name']?> >
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-lastname">Last Name<span style="color: red" class="required-f">*</span></label>
                                        <input style="border-radius: 4px" name="lastname" id="input-lastname" type="text" value=<?php echo $_SESSION['last_name']?>>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">Email<span style="color: red" class="required-f">*</span></label>
                                        <input style="border-radius: 4px" name="email"  id="input-email" type="email" value=<?php echo $_SESSION['email']?>>
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Phone<span style="color: red" class="required-f">*</span></label>
                                        <input style="border-radius: 4px" name="telephone" id="input-telephone" type="tel" value=<?php echo $_SESSION['phone']?>>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address<span style="color: red" class="required-f">*</span></label>
                                        <input name="address" value="" id="input-address-1" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-city">Post Code<span style="color: red"class="required-f">*</span></label>
                                        <input name="postcode" value="" id="input-city" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                        <label for="input-country">County<span style="color: red" class="required-f">*</span></label>
                                        <select name="county" id="input-county" >
                                            <option value=""><?php echo $_SESSION['county']?></option>
                                            <option value="Nyeri">Nyeri</option>
                                            <option value="Narok">Narok</option>
                                            <option value="Nakuru">Nakuru</option>
                                            <option value="Murang'a">Murang'a</option>
                                            <option value="Machakos">Machakos</option>
                                            <option value="Nairobi">Nairobi</option>
                                            <option value="Kiambu">Kiambu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                        <label for="input-zone">Town/City<span style="color:red" class="required-f">*</span></label>
                                        <select name="town" id="input-zone">
                                            <option value=""><?php echo $_SESSION['town']?></option>
                                            <option value="Thika">Thika</option>
                                            <option value="Kayole">Kayole</option>
                                            <option value="Juja">Juja</option>
                                            <option value="Ruiru">Ruiru</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>


                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                        <textarea class="form-control resize-both" name="ordernotes" rows="3"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table"> 
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if (isset($_SESSION['cart'])) {
                                                foreach ($_SESSION['cart'] as $key => $value) {
                                                    # code...
                                        ?>
                                        <tr>
                                            <td class="text-left"><?php echo $value['item_name'] ?></td>
                                            <td>Ksh <?php echo $value['price'] ?></td>
                                            <td><?php echo $value['Quantity'] ?></td>
                                            <td>Ksh <?php echo intval($value['price']) * intval($value['Quantity']) ?>.00</td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <tr>
                                            <td colspan="3" class="text-right">Shipping </td>
                                            <td class="text-muted"><?php 
                                                if ($_SESSION['grand-total'] > 5000) {
                                                    echo '<p style="color:green;">FREE SHIPPING</p>';
                                                }else{
                                                    echo "Ksh" . $_SESSION['shipping'].".00";
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right"><b>Total</b></td>
                                            <td><b>Ksh <?php 
                                                if (!isset($_SESSION['grand-total'])) {
                                                    echo("0.00");
                                                }else if( $_SESSION['grand-total'] > 5000){
                                                    echo (intval($_SESSION['grand-total']) - intval($_SESSION['shipping']));
                                                }else{
                                                    echo $_SESSION['grand-total'];
                                                }
                                            ?></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        
                        <hr />

                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div id="accordion" class="payment-section">
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapseOne">Direct Bank Transfer </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won't be shipped until the funds have cleared in our account.</p>
                                                    <p>Our bank account number is <b>0874392039</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">MPESA</a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">Please input your phone number below:</p>
                                                    <div class="form-group">
                                                        <input type="tel" value="" placeholder="254745 016047" name="phone_number" style="border-radius: 5px">

                                                        <button name="paynow" style="background-color: green; color: white;padding: 5px; margin-top: 5px; border-radius: 5px" type="submit" >Pay Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card margin-15px-bottom border-radius-none">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> Pay on Delivery </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="no-margin font-15">You can also pay on delivery for extra convinience.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="order-button-payment text-center">
                                        <button type="submit" name="makeorder" class="text-center" style="background-color: green;color: white; width: 70%; height: 50px; border-radius: 5px;font-size: 15px">Place Order
                                        </button>
                                    </form>
                                </div>
                            </div>
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

</html>


<?php

}else{
    header("Location: login.php");
}

?>