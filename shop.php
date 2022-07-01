
<?php

session_start();
include './includes/db.php';

if (isset($_SESSION['email'])) {

?>



<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
<head>
<title>Shop - OneKenya Online Grocery Shop</title>
<?php
    include './includes/head-attributes.php';
?>
</head>
</head>
<body class="template-collection belle">
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
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" height="300px" data-src="assets/images/back1.jpg" src="assets/images/back1.jpg" alt="" title="" /></div>
        		<div class="collection-hero__title-wrapper"><h1 style="font-size: 100px; font-family: poppins" class="collection-hero__title page-width">Shop</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container-fluid">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-2 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="lvl-1"><a href="#;" class="site-nav">Vegetables</a>
                                    </li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Fruits</a>
                                    </li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Juices</a></li>
                                    <li class="lvl-1"><a href="#;" class="site-nav">Dried</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title">
                            	<h2>Price</h2>
                            </div>
                            <form action="#" method="post" class="price-filter">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                	<div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="no-margin"><input id="amount" style="border-radius: 4px" type="text"></p>
                                    </div>
                                    <div class="col-6 text-right margin-25px-top">
                                        <button style="background-color: green; border-radius: 5px" class="btn btn-secondary btn--small">Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Price Filter-->
                        <!--Popular Products-->
						<div class="sidebar_widget">
                        	<div class="widget-title"><h2>Popular Products</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <?php
                                        $query = "SELECT * FROM `products` ORDER BY ID DESC LIMIT 4";
                                        $result = mysqli_query($db, $query);
                                        while ($rows = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image" src="vendor/products/<?=$rows['image']?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#"><?php echo $rows['product_name'] ?></a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">Ksh <?php echo $rows['price'] ?></span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                <?php } ?>
                                  </div>
                                </div>
                          	</div>
						</div>
                        <!--End Popular Products-->
                        <!--Information-->
                        <div class="sidebar_widget">
                            <div class="widget-title"><h2 style="color: green"><b>50% off Tuesdays</b></h2></div>
                            <div class="widget-content"><p>We have <b>-50%</b> offers on all products above Ksh 800 on <b>all Tuesdays.</b>Visit our site often to get these offers and others that are tailored just for you</p></div>
                        </div>
                        <!--end Information-->
                        <!--Product Tags-->
                        <div class="sidebar_widget">
                          <div class="widget-title">
                            <h2>Product Tags</h2>
                          </div>
                          <div class="widget-content">
                            <ul class="product-tags">
                              <li><a href="#" title="Show products matching tag Ksh100 - $400">Ksh100 - Ksh 400</a></li>
                              <li><a href="#" title="Show products matching tag Ksh400 - Ksh700">Ksh400 - Ksh 700</a></li>
                              <li><a href="#" title="Show products matching tag Ksh 600 - Ksh800">Ksh600 - Ksh 800</a></li>
                              <li><a href="#" title="Show products matching tag Above Ks 900">Above Ksh 900</a></li>
                              <li><a href="#" title="Show products matching tag Free Shipping">Free Shipping</a></li>
                              <li><a href="#" title="Show products matching tag From Molo">From Molo</a></li>
                              <li><a href="#" title="Show products matching tag From Kinangop">From Kinangop</a></li>
                              <li><a href="#" title="Show products matching tag vegetables">Vegetables</a></li>
                            </ul>
                            </div>
                        </div>
                        <!--end Product Tags-->
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 main-col">
                    <?php 
                    if (isset($_GET['error'])) { ?>
                        <div class="text-center text-danger p-4">
                            <?php echo strtoupper($_GET['error']); ?>
                        </div>
                <?php } ?>


                <?php 
                    if (isset($_GET['success'])) { ?>
                        <div class="text-center text-success p-4">
                            <?php echo strtoupper($_GET['success']); ?>
                        </div>
                <?php } ?>
                	<div class="productList">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<a href="shop.php" title="Grid View" class="change-view change-view--active">
                                        	<img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.php" title="List View" class="change-view">
                                        	<img src="assets/images/list.jpg" alt="List" />
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    	<span class="filters-toolbar__product-count">Showing <?php echo $_SESSION['products']; ?></span>
                                    </div>
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                                <option>Alphabetically, A-Z</option>
                                                <option>Alphabetically, Z-A</option>
                                                <option>Price, low to high</option>
                                                <option>Price, high to low</option>
                                                <option>Date, new to old</option>
                                                <option>Date, old to new</option>
                                      		</select>
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        <!-- Products List Start-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                            <?php
                                $query = "SELECT * FROM `products` ORDER BY ID DESC";
                                $result = mysqli_query($db, $query);
                                while ($rows = mysqli_fetch_assoc($result)) {
                                    $_SESSION['products'] = sizeof($rows);

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
                                                <a href="#" id="product"><?php echo $rows['product_name']; ?></a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price" id="price">Ksh <?php echo $rows['price'];?></span>
                                            </div>
                                            <!-- End product price -->
                                            <div class="product-review">
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-0"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <?php echo $rows['image'];?>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set text-center" style="display: flex; justify-content: center;">
                                                <form action="./includes/addtocart.php" method="post">
                                                    <input type="hidden"  name="Product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" name="price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" name="Description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="Vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="image" value="<?php echo $rows['image']; ?>">
                                                    <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="productview" style="background-color: green;" title="View Product"><i style="color: white" class="icon anm anm-search-plus-r"></i>
                                                    </button>
                                                </form>
                                                <!-- Start product button -->
                                                <form action="./includes/addtocart.php" method="post">
                                                    <input type="hidden" id="product" name="product_name" value="<?php echo $rows['product_name']; ?>">
                                                    <input type="hidden" id="price" name="price" value="<?php echo $rows['price']; ?>">
                                                    <input type="hidden" id="desc" name="description" value="<?php echo $rows['description']; ?>">
                                                    <input type="hidden" name="vendor" value="<?php echo $rows['vendor']; ?>">
                                                    <input type="hidden" name="image" value="<?php echo $rows['image']; ?>">
                                                        <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="addtocart" style="background-color: green;" title="Add to Cart"><i style="color: white" class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                    <form action="./includes/addtocart.php" method="post">
                                                        <input type="hidden" id="product" name="product_name" value="<?php echo $rows['product_name']; ?>">
                                                        <input type="hidden" id="price" name="price" value="<?php echo $rows['price']; ?>">
                                                        <input type="hidden" id="desc" name="description" value="<?php echo $rows['description']; ?>">
                                                        <input type="hidden" name="vendor" value="<?php echo $rows['vendor']; ?>">
                                                        <input type="hidden" name="image" value="<?php echo $rows['image']; ?>">
                                                        <input type="hidden" name="availability" value="<?php echo $rows['status']; ?>">
                                                        <button type="submit" class="btn btn--secondary cartIcon btn-addto-cart" name="wish" style="background-color: green;" title="Add to Wishlist"><i style="color: white" class="icon anm anm-heart-l"></i></button>
                                                    </form>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <?php } ?>

                            <!-- Products List End-->
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
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
</div>
</body>

</html>


<?php

}else{
    header("Location: login.php");
}

?>