<?php

session_start();
include './includes/db.php';


if (isset($_SESSION['email'])) {
    
?>




<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>Cart - OneKenya Online shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="page-template belle cart-variant1">
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
                    	<img src="assets/images/onekenya.png" style="margin-top: -40px" alt="OneKenya" title="" />
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
        		<div class="wrapper"><h1 class="page-width" style="color: green"><b>Shopping Cart</b></h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<!--<div class="alert alert-success text-uppercase" role="alert">
						<i class="icon anm anm-truck-l icon-large"></i> &nbsp;<strong>Congratulations!</strong> You've got free shipping!
					</div>-->
                    <?php 
                        if (isset($_GET['error'])) { ?>
                            <div class="text-center text-danger p-4" style="font-family: poppins; color: red;">
                                <i><?php echo strtoupper($_GET['error']); ?></i>
                            </div>
                    <?php } ?>

                		<table class="table">
                            <thead class="cart__row cart__header">
                                <tr style="background-color: green; color: white">
                                    <th colspan="2" class="text-center" style="font-family: poppins; font-size: 15px"><strong>PRODUCT</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>PRICE</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><strong>QUANTITY</strong></th>
                                    <th class="text-center" style="font-family: poppins; font-size: 15px"><b>TOTAL</b></th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                <?php

                                  $total = 0;

                                  if (isset($_SESSION['cart'])) {

                                    $total_count = array();

                                    foreach ($_SESSION['cart'] as $key => $value) {
                                      //print_r($value);
                                      $total = intval($value['price']) * intval($value['Quantity']);

                                      array_push($total_count, $total);

                                        if (empty($_SESSION['cart'])) {
                                            $money = 0.00;
                                        } else{
                                            $money = array_sum($total_count);
                                        }

                                      //print_r($money);
                                    
                 
                               ?>
                                <tr class="cart__row border-bottom line1 cart-flex">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="vendor/products/<?=$value['image']?>"><img class="cart__image" width="150" height="100" src="vendor/products/<?=$value['image']?>" alt=""></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item text-center" style="padding-top: 40px">
                                        <div class="list-view-item__title">
                                            <h3><b><?php echo $value['item_name'] ?></b> </h3>
                                        </div>
                                        
                                        <div class="cart__meta-text">
                                            By <?php echo $value['vendor'] ?>
                                        </div>
                                    </td>
                                    <form action="./includes/addtocart.php" method="POST">
                                        <td class="cart__price-wrapper cart-flex-item text-center" style="padding-top: 40px">
                                            <span class="money"><p id="Bei"><?php echo $value['price'] ?></p></span>
                                        </td>
                                        <td class="cart__update-wrapper cart-flex-item text-right" style="padding-top: 40px">
                                            <div class="cart__qty text-center">
                                                <div class="qtyField">
                                                    <input class="cart__qty-input qty" style="font-weight: 500; border-radius: 5px"  type="text"  id="qty"  pattern="[0-9]*" value=<?php echo $value['Quantity'] ?> name=<?php echo 'qty' . $value['item_name'] ?>>
                                                    <input type="hidden" name="bei" value=<?php echo $value['price'] ?>>
                                                    <input type="hidden" name="item" value=<?php echo $value['item_name'] ?>>
                                                    <button type="submit" name="updatecart" style="border-radius: 5px;margin: 10px; background-color: green" ><i style="color: white" class="icon icon anm anm-repeat3"></button>
                                                </div>
                                            </div>
                                        </td>
                                    </form>
                                        <td class="text-center small--hide cart-price" style="padding-top: 40px">
                                            <div><span class="money"><b><?php
                                                echo($total);
                                             ?></b></span></div>
                                        </td>
                                    <td class="text-center small--hide" style="padding-top: 40px;max-width: 50px">
                                        <form action="./includes/addtocart.php" method="POST">
                                            <button name="remove" style="width: 30px; height: 20px;;background-color: #B22222"  title="Remove item"><i style="color: white" class="icon icon anm anm-times-l"></i></button>
                                            <input type="hidden" name="product_name" value=<?php echo $value['item_name'] ?>>
                                        </form>
                                    </td>
                                </tr>
                                <?php 
                        }
                            } else { ?>
                              
                              <div class="text-center text-muted" style="font-family: poppins" >
                                <h4 style="color: red;padding-bottom: 20px;font-family: poppins" >You have not added items in your cart</h4>
                              </div>

                              <?php
                            }
                      ?>
                            </tbody>
                            
                    		<tfoot>
                                <tr>
                                    <form action="./includes/addtocart.php" method="POST">
                                        <td colspan="3" class="text-left"><a href="shop.php" style="border-radius: 5px; background-color: green" class="btn btn-secondary btn--medium cart-continue"><i class="icon icon anm anm-arw-left"></i> Continue shopping</a></td>
                                        <td colspan="3" class="text-right">
    	                                    <button type="submit" style="border-radius: 5px; background-color: #3CB371" name="clear" class="btn btn-secondary btn--small ">Clear Cart</button>
                                            <input type="hidden" name="Quantity" value="4">
                                            <input type="hidden" name="Price" value="<?php echo $value['price'] ?>">
                                        </td>
                                    </form>
                                </tr>
                            </tfoot>
                    </table>                    
               	</div>
                
                
                <div class="container mt-4">
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 mb-4">
                        	<h5>Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" style="border-radius: 5px; background-color: #3CB371" class="btn btn-secondary btn--medium" value="Apply Coupon"></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5>Estimate Shipping and Tax</h5>
							<form action="./includes/shipping.php" method="POST">
                                <div class="form-group">
                                    <label for="address_county">County</label>
                                    <select id="address_county" name="county" data-default="">
                                        <option value="select county">Select County</option>
                                        <option value="Nairobi" >Nairobi</option>
                                        <option value="Nakuru" >Nakuru</option>
                                        <option value="Kiambu" >Kiambu</option>
                                        <option value="Narok" >Narok</option>
                                        <option value="Machakos" >Machakos</option>
                                    </select>
                                </div>
    
                                <div class="form-group">
                                    <label>Town/City</label>
                                    <select id="address_province" name="town" >
                                    <option value="select town">Select Town</option>
                                      <option value="Thika">Thika</option>
                                      <option value="Kiambu">Kiambu</option>
                                      <option value="Machakos">Machakos</option>
                                      <option value="Ruiru">Ruiru</option>
                                      <option value="Juja">Juja</option>
                                      <option value="Murang'a">Murang'a</option>
                                      <option value="Nyeri">Nyeri</option>
                                    </select>
                                </div>
                                <div class="actionRow">
                                    <div>
                                        <button type="submit" name="shipping" style="border-radius: 5px; background-color: green" class="btn btn-secondary btn--medium" >Calculate </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 cart__footer">
                            <div class="solid-border">
                            <form action="./includes/placeorder.php" method="POST">
                                  <div class="row border-bottom pb-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Subtotal</span>
                                    <span class="col-12 col-sm-6 text-right">Ksh <span class="money" id="subtotal"> 
                                        <?php
                                            if (empty($_SESSION['cart'])) {
                                                echo '0.00';
                                            }else{
                                                echo($money);
                                            }
                                         ?>   
                                        </span></span>
                                  </div>
                                  <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Tax</span>
                                    <span class="col-12 col-sm-6 text-right">+ Ksh <span class="money" id="tax">  
                                        <?php 
                                            if (empty($_SESSION['cart'])) {
                                                echo('0.00');
                                            }else{
                                                $tax = $money * 0.12;
                                                echo($tax);
                                            }
                                         ?>
                                    </span></span>
                                  </div>
                                  <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title">Shipping <b class="text-muted">
                                    <?php 
                                        if (empty($_SESSION['cart'])) {
                                            echo "";
                                        }else if (!isset($_SESSION['county'])) {
                                            echo "";
                                        }else{
                                            echo ("-" . $_SESSION['county']); 
                                        }
                                    ?> </b></span>
                                    <span class="col-12 col-sm-6 text-right"> 
                                        <?php
                                            if (empty($_SESSION['cart'])) {
                                                echo ('+ Ksh 0.00');
                                            }else if(($money + $tax) > 5000){
                                                echo "<p style='color:green'>FREE SHIPPING</p>"; 
                                            
                                            }else if (!isset($_SESSION['shipping'])) {
                                                echo '+ Ksh 0.00';
                                            }else{
                                                echo ("+ Ksh " . $_SESSION['shipping']);
                                            }
                                        ?>
                                    </span>
                                  </div>
                                  <div class="row border-bottom pb-2 pt-2">
                                    <span class="col-12 col-sm-6 cart__subtotal-title"><strong>Grand Total</strong></span>
                                    <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" style="color: green">Ksh 
                                        <?php
                                            if (empty($_SESSION['cart'])) {
                                                echo '0.00';
                                            }else{
                                                if (!isset($_SESSION['shipping'])) {
                                                    $_SESSION['shipping'] = 0;
                                                }
                                                $grand_total = $money + $tax + $_SESSION['shipping'];
                                                echo ($grand_total);
                                            }
                                         ?>   
                                    </span></span>
                                  </div>
                                  <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                                  <p class="cart_tearm">
                                    <label>
                                      <input type="checkbox" name="terms" class="checkbox" value="tearm" required="">
                                      &nbsp;I agree with the terms and conditions
    								</label>
                                  </p>
                                  <input type="hidden" name="money" value=<?php if (!isset($grand_total)) {
                                      echo(0);
                                  }else{
                                    echo($grand_total);
                                  } ?>>
                                  <input type="submit" name="placeorder" style="border-radius: 5px; background-color: green" id="cartCheckout" class="btn btn--medium-wide checkout" value="Proceed To Checkout">
                                  <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                                </div>
                            </form>
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