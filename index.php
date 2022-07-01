<?php

session_start();
include './includes/db.php';

if (isset($_SESSION['email'])) {

?>


<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<title>OneKenya Farmers | Online Shopping for Groceries,Cereals and any other type of foods</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
<body class="template-index belle template-index-belle">

<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search in the store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!--Top Header-->
    <?php
        include './includes/top-bar.php';
    ?>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="index.php">
                    	<img src="assets/images/onekenya.png" style="margin-top: -35px" alt="OneKenya Home Logo" title="OneKenya Home Logo" />
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
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.php">
                            <img src="assets/images/onekenya.png" style="margin-top: -50px" alt="OneKenya Home Logo" title="OneKenya Home Logo" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
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
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="assets/images/bg_1.jpg" src="assets/images/bg_1.jpg" alt="" title="" />
                        <div class="slideshow__text-wrap slideshow__overlay classic center">
                            <div class="slideshow__text-content center">
                                <div class="wrap-caption center">
                                        <h1 class="h1 mega-title slideshow__title">100% Fresh &amp; Organic Foods</h1>
                                        <span class="mega-subtitle slideshow__subtitle"><i>We deliver fresh organic vegetables &amp; fruits</i></span>
                                        <span style="background-color: green; color: white; border-radius: 5px;" class="btn" ><a style="background-color: green; color: white; border-radius: 5px;" href="shop.php">Shop now</a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload bg-size" >
                        <img class="blur-up lazyload bg-img" data-src="assets/images/bg_3.jpg" src="assets/images/bg_3.jpg" alt="" title="" />
                        <div class="slideshow__text-wrap slideshow__overlay classic center">
                            <div class="slideshow__text-content center">
                                <div class="wrap-caption center">
                                    <h1 style="text-shadow: 2px 2px 4px #000000;" class="h1 mega-title slideshow__title">Welcome <?php echo$_SESSION['first_name']; ?> to OneKenya</h1>
                                    <span style="text-shadow: 2px 2px 4px #000000;" class="mega-subtitle slideshow__subtitle"><i>We deliver  fresh organic vegetables &amp; fruits</i></span>
                                    <span class="btn" style="background-color: green; color: white; border-radius: 5px;"><a style="background-color: green; color: white; border-radius: 5px;" href="shop.php"> Shop now </a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        <!--Store Feature-->
        <div class="store-feature section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="display-table store-info">
                            <li class="display-table-cell">
                                <i class="icon anm anm-truck-l"  style="color: blue"></i>
                                <h5>Free Shipping &amp; Return</h5>
                                <span class="sub-text">Free shipping on all orders over Ksh 5,000</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-dollar-sign-r" style="color: green"></i>
                                <h5>Money Back Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-comments-l"  style="color: yellow"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                            <li class="display-table-cell">
                                <i class="icon anm anm-credit-card-front-r"  style="color: blue"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
        <!--Collection Tab slider-->
        <div class="tab-slider-product section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2"><b>Featured Products</b></h2>
                            <p>Browse the huge variety of our fresh products</p>
                        </div>
                        <div class="tabs-listing">
                            <ul class="tabs clearfix">
                                <li class="active" rel="tab1">Vegetables</li>
                                <li rel="tab2">Fruits</li>
                            </ul>
                            <div class="tab_container">
                                <div id="tab1" class="tab_content grid-products">
                                    <div class="productSlider">
                                    <?php
                                        $query = "SELECT * FROM `products` ORDER BY ID DESC LIMIT 6";
                                        $result = mysqli_query($db, $query);
                                        while ($rows = mysqli_fetch_assoc($result)) {

                                    ?>
                                        <div class="col-12 item">
                                            <!-- start product image -->
                                            <div class="product-image">
                                                <!-- start product image -->
                                                <a href="short-description.php">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="vendor/products/<?=$rows['image']?>" src="vendor/products/<?=$rows['image']?>" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="vendor/products/<?=$rows['image']?>" src="vendor/products/<?=$rows['image']?>" alt="image" title="product">
                                                    <!-- End hover image -->
                                                </a>
                                                <!-- end product image -->
        
                                                <!-- Start product button -->
                                                <form class="variants add" action="./includes/addtocart.php" method="post">
                                                    <input type="hidden" name="product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" name="description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="image" value="<?php echo $rows['image']; ?>">
                                                    <button class="btn btn-addto-cart" name="addtocart" style="border-radius: 5px; background-color: green; color: white" type="submit" tabindex="0">Add To Cart</button>
                                                </form>
                                                <div class="button-set">
                                                <form action="./includes/addtocart.php" method="POST">
                                                    <input type="hidden"  name="Product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" name="Price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" name="Description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="Vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="Image" value="<?php echo $rows['image']; ?>">
                                                    <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="productview" style="background-color: green;" title="View Product"><i style="color: white" class="icon anm anm-search-plus-r"></i>
                                                    </button>
                                                </form>
                                                    <div class="wishlist-btn">
                                                        <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="wish" style="background-color: green;" title="Add to Wishlist"><i style="color: white" class="icon anm anm-heart-l"></i></button>
                                                    </div>
                                                </div>
                                                <!-- end product button -->
                                            </div>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="product.php"><?php echo $rows['product_name'];?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">Ksh <?php echo $rows['price'];?></span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    <?php } ?> 
                            </div>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section">
        	<div class="container-fluid" style="width: 100%">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2"><b>Categories</b></h2>
                            <p>We have a variety of products you can choose from</p>
                        </div>
                    </div>
                </div>
				<div class="collection-grid">
                        <div class="collection-grid-item" style="padding: 10px;">
                            <a href="shop.php" class="collection-grid-item__link">
                                <img data-src="assets/images/categories/category.jpg" src="assets/images/categories/category.jpg" alt="" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Vegetables</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item" style="padding: 10px;">
                            <a href="shop.php" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="assets/images/categories/category.jpg" src="assets/images/categories/category.jpg" alt=""/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Fruits</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded " style="padding: 10px; height: 400px">
                            <a href="shop.php" class="collection-grid-item__link">
                                <img data-src="assets/images/categories/category.jpg" src="assets/images/categories/category.jpg" alt="" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Juices</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item" style="padding: 10px;">
                            <a href="shop.php" class="collection-grid-item__link">
                                <img data-src="assets/images/categories/category.jpg" src="assets/images/categories/category.jpg" alt="" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Dried</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item" style="padding: 10px;">
                            <a href="shop.php" class="collection-grid-item__link">
                                <img data-src="assets/images/categories/category.jpg" src="assets/images/categories/category.jpg" alt="" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">Dried</h3>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        
        <!--Featured Product-->
        <div class="product-rows section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2"><b>Popular Products</b></h2>
                            <p>Our most popular products based on sales</p>
                        </div>
            		</div>
                </div>
                <div class="grid-products">
	                <div class="row">
                        <?php
                                $query = "SELECT * FROM `products` ORDER BY ID ASC LIMIT 4";
                                $result = mysqli_query($db, $query);
                                while ($rows = mysqli_fetch_assoc($result)) {

                         ?>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.php" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload" data-src="vendor/products/<?=$rows['image']?>" src="vendor/products/<?=$rows['image']?>" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload" data-src="vendor/products/<?=$rows['image']?>" src="vendor/products/<?=$rows['image']?>" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#"><?php echo $rows['product_name'];?></a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price"><?php echo $rows['price'];?></span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <form action="./includes/addtocart.php" method="POST">
                                                    <input type="hidden"  name="Product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" name="Price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" name="Description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="Vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="Image" value="<?php echo $rows['image']; ?>">
                                                    <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="productview" style="background-color: green;" title="View Product"><i style="color: white" class="icon anm anm-search-plus-r"></i>
                                                    </button>
                                                </form>
                                                <!-- Start product button -->
                                                <form action="./includes/addtocart.php" method="POST">
                                                    <input type="hidden" name="product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" name="description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="image" value="<?php echo $rows['image']; ?>">
                                                    <button name="addtocart" style="background-color: green; color: white" class="btn btn--secondary cartIcon btn-addto-cart" type="submit"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="wish" style="background-color: green;" title="Add to Wishlist"><i style="color: white" class="icon anm anm-heart-l"></i></button>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                        <?php } ?>
                	</div>
                </div>
           </div>
        </div>	
        <!--End Featured Product-->

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="section-header text-center">
                <h1 class="h1"><b>OneKenya Farmers</b></h1>
                <p>Online Grocery Shopping with OneKenya Farmers - No. 1 Online Grocery Shop in Kenya</p>
            </div>
            <div class="text-muted text-center pt-5">
                OneKenya is your number one Online Grocery Shopping solution. You can purchase all your vegetables, fruits, juices and more online and have them delivered to you. OneKenya has payment options that suit everyone, and we have a payment-on-delivery option for extra convenience. Be in the loop with fresh products and from top farmers in OneKenya and make use of our latest offers to shop at the best price guarantee! In our online shop, you are even able to pre-order the fruits you want. Also take advantage of the best cereals products available. OneKenya remains your No°1 online marketplace for easy convenience and you get nothing but the best! You can now Sell online on OneKenya to make more money with ease and convenience. List your products with zero fee charge and grow your business today! OneKenya gives you a lot of flexible options to make more money. Become a sales consultant for OneKenya today with a small entrance fee, no risks, no boss, and marvelous rewards! Shop for cereals on OneKenya, as we offer huge discounts on all dried products. Join the biggest online sales event ever today. Shop Furniture, Fashion, Electronics, Appliances & more on Jumia Kenya. OneKenya offers deals and discounts and never ceases to form campaigns all year around, all for the satisfaction and joy of our customers. Our newsletter subscribers and Facebook fans get to know all of our offers before anyone else such as Fruits Weeks, OneKenya Anniversary, and Green Friday.
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
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">
                            <div class="pl-20">
                                <img src="assets/images/products/onions.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h2 class="product-single__title">Onions</h2>
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">Vendor: <span class="variant-sku">Electron Ventures</span></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                        <span id="ProductPrice-product-template"><span class="money">Ksh 550.00</span></span>
                                    </span>
                                </p>
                                <div class="product-single__description rte">
                                    These are vegetables These are vegetables These are vegetables These are vegetables These are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetablesThese are vegetables
                                </div>
                                
                            <form method="post" action="/includes/addtocart.php" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit">
                                        <button type="button" style="background-color: green; border-radius: 5px" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <div class="display-table shareRow">
                                    <div class="display-table-cell">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
                <!--End-product-single-->
                </div>
            </div>
        		</div>
        	</div>
        </div>
    </div>
    <!--End Quick View popup-->
    
    <!-- Newsletter Popup -->
	<div class="newsletter-wrap" id="popup-container">
      <div id="popup-window">
        <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
        <!-- Modal content-->
        <div class="display-table splash-bg">
          <div class="display-table-cell width40"><img src="assets/images/categories/mail.jpg" height="100%" width="100%" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
          <div class="display-table-cell width60 text-center">
            <div class="newsletter-left">
              <h2>Join Our Mailing List</h2>
              <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
              <form action="#" method="post">
                <div class="input-group">
                  <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                      <span class="input-group__btn">
                      	<button type="submit" style="background-color: green; border-radius: 5px;" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                      </span>
                  </div>
              </form>
              <ul class="list--inline site-footer__social-icons social-icons">
                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- End Newsletter Popup -->
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
	</script>
    <!--End For Newsletter Popup-->
</div>
</body>

</html>

<?php

}else{
    header("Location: login.php");
}

?>