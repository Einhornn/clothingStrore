<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog details page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Main Wrapper Start -->
    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                        
                        <div class="top_right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="wishlist.php">My Wish List </a></li>
                                        <li><a href="my-account.php">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="compare.php">Compare Products  </a></li>
                                    </ul>
                                </li> 
                                <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt=""> English <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#"><img src="assets/img/logo/cigar.jpg" alt=""> French</a></li>
                                        <li><a href="#"><img src="assets/img/logo/language2.png" alt="">German</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR</a></li>
                                        <li><a href="#">BRL</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> 
                        <div class="search_bar">
                            <form action="#">
                                <select class="select_option" name="select" id="categori">
                                    <option selected value="1">All Categories</option>
                                    <option  value="2">Accessories</option>
                                    <option  value="3">Bridge</option>
                                    <option  value="4">Hub</option>
                                    <option  value="5">Repeater</option>
                                    <option  value="6">Switch</option>
                                    <option  value="7">Video Games</option>
                                    <option  value="8">PlayStation 3</option>
                                    <option  value="9">PlayStation 4</option>
                                    <option  value="10">Xbox 360</option>
                                    <option  value="11">Xbox One</option>
                                </select>
                                <input placeholder="Search entire store here..." type="text">
                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="cart_area">
                            <div class="middel_links">
                               <ul>
                                   <li><a href="login.php">Login</a></li>
                                   <li>/</li>
                                   <li><a href="login.php">Register</a></li>
                               </ul>

                            </div>
                            <div class="cart_link">
                                <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item top">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Apple iPhone SE 16GB</a>

                                            <span>1x $60.00</span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable  Bluetooth</a>
                                                <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$184.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="cart.php">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="checkout.php">Checkout</a>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div class="contact_phone">
                            <p>Call Free Support: <a href="tel:+(012)800456789">(+012) 800 456 789 </a></p>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.php">Home 1</a></li>
                                        <li><a href="index-2.php">Home 2</a></li>
                                        <li><a href="index-3.php">Home 3</a></li>
                                        <li><a href="index-4.php">Home 4</a></li>
                                        <li><a href="index-5.php">Home 5</a></li>
                                        <li><a href="index-6.php">Home 6</a></li>
                                        <li><a href="index-7.php">Home 7</a></li>
                                        <li><a href="index-8.php">Home 8</a></li>
                                         <li><a href="index-9.php">Home 9</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.php">shop</a></li>
                                                <li><a href="shop-fullwidth.php">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.php">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.php">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.php"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.php">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio.php">portfolio</a></li>
                                                <li><a href="portfolio-details.php">portfolio details</a></li>
                                                <li><a href="cart.php">cart</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="my-account.php">my account</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.php">product details</a></li>
                                                <li><a href="product-sidebar.php">product sidebar</a></li>
                                                <li><a href="product-grouped.php">product grouped</a></li>
                                                <li><a href="variable-product.php">product variable</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                        <li><a href="blog-sidebar.php">blog  Sidebar</a></li>
                                        <li><a href="blog-fullwidth.php">blog fullwidth</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="services.php">services</a></li>
                                        <li><a href="faq.php">Frequently Questions</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                        <li><a href="404.php">Error 404</a></li>
                                        <li><a href="compare.php">compare</a></li>
                                        <li><a href="privacy-policy.php">privacy policy</a></li>
                                        <li><a href="coming-soon.php">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.php">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.php">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.php"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <!--header area start-->
    <header class="header_area header_three">
        <!--header top start-->
        <div class="header_top">
            <div class="container-fluid">   
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="welcome_text">
                           <ul>
                               <li><span>Free Delivery:</span> Take advantage of our time to save event</li>
                               <li><span>Free Returns *</span> Satisfaction guaranteed</li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="top_right text-right">
                            <ul>
                               <li class="top_links"><a href="#">My Account <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="wishlist.php">My Wish List </a></li>
                                        <li><a href="my-account.php">My Account </a></li>
                                        <li><a href="#">Sign In</a></li>
                                        <li><a href="compare.php">Compare Products  </a></li>
                                    </ul>
                                </li> 
                            </ul>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->

        <!--header middel start-->
        <div class="header_middel">
            <div class="container-fluid">
                <div class="middel_inner">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="search_bar">
                                <form action="#">                          
                                    <input placeholder="Search entire store here..." type="text">
                                    <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart_area">
                                <div class="cart_link">
                                    <a href="#"><i class="fa fa-shopping-basket"></i>2 item(s)</a>
                                    <!--mini cart-->
                                     <div class="mini_cart">
                                        <div class="cart_item top">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Apple iPhone SE 16GB</a>

                                            <span>1x $60.00</span>
    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item bottom">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Marshall Portable  Bluetooth</a>
                                                <span> 1x $160.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart__table">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="text-left">Sub-Total :</td>
                                                    <td class="text-right">$150.00</td>
                                                </tr>
                                             
                                                <tr>
                                                    <td class="text-left">Total :</td>
                                                    <td class="text-right">$184.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="cart_button view_cart">
                                        <a href="cart.php">View Cart</a>
                                    </div>
                                    <div class="cart_button checkout">
                                        <a href="checkout.php">Checkout</a>
                                    </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="horizontal_menu">
                    <div class="left_menu">
                        <div class="main_menu"> 
                            <nav>  
                                <ul>
                                    <li class="active"><a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="index.php">Home 1</a></li>
                                            <li><a href="index-2.php">Home 2</a></li>
                                            <li><a href="index-3.php">Home 3</a></li>
                                            <li><a href="index-4.php">Home 4</a></li>
                                            <li><a href="index-5.php">Home 5</a></li>
                                            <li><a href="index-6.php">Home 6</a></li>
                                            <li><a href="index-7.php">Home 7</a></li>
                                            <li><a href="index-8.php">Home 8</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega_items"><a href="shop.php">shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega_menu">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop-fullwidth.php">Full Width</a></li>
                                                    <li><a href="shop-fullwidth-list.php">Full Width list</a></li>
                                                    <li><a href="shop-right-sidebar.php">Right Sidebar </a></li>
                                                    <li><a href="shop-right-sidebar-list.php"> Right Sidebar list</a></li>
                                                    <li><a href="shop-list.php">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">other Pages</a>
                                                <ul>
                                                    <li><a href="portfolio.php">portfolio</a></li>
                                                    <li><a href="portfolio-details.php">portfolio details</a></li>
                                                    <li><a href="cart.php">cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="my-account.php">my account</a></li>


                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product-details.php">product details</a></li>
                                                    <li><a href="product-sidebar.php">product sidebar</a></li>
                                                    <li><a href="product-gallery.php">product gallery</a></li>
                                                    <li><a href="product-grouped.php">product grouped</a></li>
                                                    <li><a href="variable-product.php">product variable</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="#">collection</a>
                                                <ul>
                                                    <li><a href="shop.php">Handbag</a></li>
                                                    <li><a href="shop.php">Accessories</a></li>
                                                    <li><a href="shop.php">Clothing</a></li>
                                                    <li><a href="shop.php">Shoes</a></li>
                                                    <li><a href="shop.php">Check Trousers</a></li>

                                                </ul>
                                            </li>
                                            <li class="banner_menu"><a href="#"><img src="assets/img/bg/banner1.jpg" alt=""></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.php">blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="blog-details.php">blog details</a></li>
                                            <li><a href="blog-sidebar.php">blog  Sidebar</a></li>
                                            <li><a href="blog-fullwidth.php">blog fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="about.php">About Us</a></li>
                                            <li><a href="services.php">services</a></li>
                                            <li><a href="faq.php">Frequently Questions</a></li>
                                            <li><a href="login.php">login</a></li>
                                            <li><a href="my-account.php">my account</a></li>
                                            <li><a href="wishlist.php">Wishlist</a></li>
                                            <li><a href="404.php">Error 404</a></li>
                                            <li><a href="compare.php">compare</a></li>
                                            <li><a href="privacy-policy.php">privacy policy</a></li>
                                            <li><a href="coming-soon.php">coming soon</a></li>
                                        </ul>
                                    </li>
                                </ul> 
                            </nav> 
                        </div>
                    </div>
                    <div class="logo_container">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="right_menu">
                        <div class="main_menu"> 
                            <nav>  
                                <ul>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">Sneaker</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul> 
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="main_menu_inner">
                            <div class="main_menu"> 
                                <nav>  
                                    <ul>
                                        <li class="active"><a href="index.php">Home </a></li>
                                        <li><a href="shop_category.php">shop </a></li>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub_menu pages">
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="services.php">services</a></li>
                                                <li><a href="faq.php">Frequently Questions</a></li>
                                                <li><a href="login.php">login</a></li>
                                                <li><a href="my-account.php">my account</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                <li><a href="404.php">Error 404</a></li>
                                                <li><a href="compare.php">compare</a></li>
                                                <li><a href="privacy-policy.php">privacy policy</a></li>
                                                <li><a href="coming-soon.php">coming soon</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.php">blog</a></li>
                                        
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>   
                                </nav> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </header>
    <!--header area end-->
 
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area other_bread">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li>/</li>
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--blog body area start-->
    <div class="blog_area blog_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--blog sidebar start-->
                    <aside class="blog_sidebar">
                       <!--search form start-->
                        <div class="sidebar_widget search_form">
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--search form end-->
                        
                         <!--categories start-->
                        <div class="sidebar_widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="#">Creative</a>  (2)</li>

                                <li><a href="#">Fashion</a> (3)</li>
                                <li><a href="#">Image</a> (1)</li>
                                <li><a href="#">Photography</a> (4)</li>
                                <li><a href="#">Travel</a> (6)</li>
                                <li><a href="#">Videos</a> (2)</li>
                                <li><a href="#">WordPress</a> (4)</li>
                            </ul>
                        </div>
                        <!--categories end-->
                        
                         <!--recent post start-->
                        <div class="sidebar_widget recent_post">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/post1.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Blog image post format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/post2.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Post in Gallery format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div> 
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/post3.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Single post in Audio format </a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/post4.png" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Post in Video format vitae</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>     
                        </div>
                        <!--recent post end-->
                        
                        <!--recent post start-->
                        <div class="sidebar_widget recent_post">
                            <h3 class="widget_title">Comments</h3>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Blog image post format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Post in Gallery format</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div> 
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Single post in Audio format </a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>
                            <div class="sidebar_post">
                                <div class="post_img">
                                    <a href="blog-details.php"><img src="assets/img/blog/comment.png.jpg" alt=""></a>
                                </div>
                                <div class="post_text">
                                    <h3><a href="blog-details.php">Post in Video format vitae</a></h3>
                                    <span>March 3, 2018</span>
                                </div>
                                
                            </div>     
                        </div>
                        <!--recent post end-->
                        
                        
                        <div class="sidebar_widget tags_widget">
                            <h3 class="widget_title">Tag Cloud</h3>
                            <ul>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Store</a></li>
                                <li><a href="#">Ideas</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Smart</a></li>
                            </ul>
                        </div>
                        
                    </aside>
     
                    <!--blog sidebar start-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
                       <div class="blog__thumb">
                           <a href="#"><img src="assets/img/blog/blog6.png" alt=""></a>
                       </div>
                       <div class="blog_info_wrapper">
                            <div class="blog_info_inner">
                                <div class="post__date">
                                   <span class="day">10</span>
                                   <span class="month">Mar</span>
                               </div>
                               <div class="post__info">
                                   <div class="post_header">
                                       <h3>Blog image post format</h3>
                                   </div>
                                    <div class="post_meta">
                                       <span>Posted by </span>
                                        <span><a href="#">admin</a></span>
                                        <span><a href="#">/ WordPress</a></span>
                                    </div>
                                    <div class="post_content">
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote>
                                        <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                    </div>
                                    <div class="post_meta">
                                        <span><a href="#">3 comments</a></span>
                                        <span> / Tags: </span>
                                        <span><a href="#">, fashion</a></span>
                                        <span><a href="#">, t-shirt</a></span>
                                        <span><a href="#">, white</a></span>
                                    </div>
                                    <div class="social_sharing">
                                        <h3>Share this post</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="author_box">
                                        <div class="author_img">
                                            <img src="assets/img/blog/admin_avatar.jpg" alt="">
                                        </div>
                                        <div class="author_desc">
                                            <h3>About the Author: <a href="#">admin</a></h3>
                                            <p>Cras id nulla at metus congue auctor. Suspendisse auctor dictum orci quis interdum. Nullam et eleifend metus. Integer in est orci. Duis hendrerit ex metus, vel tempor sem aliquet nec. Donec ornare hendrerit bibendum. Nullam dui erat, tempus eu nisl vitae, venenatis gravida ipsum. Suspendisse potenti.</p>
                                        </div>
                                    </div> 
                               </div>
                            </div>  
                           <div class="comments_box">
                                <h3>3 Comments	</h3>
                                <div class="comment_list">
                                    <div class="comment-author-thumb">
                                        <img src="assets/img/blog/comment2.png.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">Admin</a></h5>
                                                <span>October 16, 2018 at 1:38 am</span>
                                            </div>  
                                        </div>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                        <div class="comment_reply">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="comment_list comment_border">
                                    <div class="comment-author-thumb">
                                        <img src="assets/img/blog/comment3.png.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">Demo</a></h5>
                                                <span>October 16, 2018 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                        <div class="comment_reply">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment_list">
                                    <div class="comment-author-thumb">
                                        <img src="assets/img/blog/comment2.png.jpg" alt="">
                                    </div>
                                    <div class="comment_content">
                                        <div class="comment_meta">
                                            <div class="comment_title">
                                                <h5><a href="#">Admin</a></h5>
                                                <span>October 16, 2018 at 1:38 am</span>
                                            </div>
                                        </div>
                                        <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                        <div class="comment_reply">
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments_form">
                                    <h3>Leave a Reply </h3>
                                    <p>Your email address will not be published.</p>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="review_comment">Comment </label>
                                                <textarea name="comment" id="review_comment" ></textarea>
                                            </div> 
                                            <div class="col-lg-4 col-md-4">
                                                <label for="author">Name</label>
                                                <input id="author"  type="text">

                                            </div> 
                                            <div class="col-lg-4 col-md-4">
                                                <label for="email">Email </label>
                                                <input id="email"  type="text">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <label for="website">Website </label>
                                                <input id="website"  type="text">
                                            </div>   
                                        </div>
                                        <button class="button" type="submit">Post Comment</button>
                                     </form>    
                                </div>
                           <div class="related_posts">
                               <h3>Related posts</h3>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts">
                                            <div class="related_posts_thumb">
                                                <img src="assets/img/blog/blog1.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Post with Gallery</a></h3>
                                               <span>December 1, 2018 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts">
                                            <div class="related_posts_thumb">
                                                <img src="assets/img/blog/blog2.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Post with Audio</a></h3>
                                               <span>December 1, 2018 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_related_posts column_3">
                                            <div class="related_posts_thumb">
                                                <img src="assets/img/blog/blog3.png" alt="">
                                            </div>
                                            <div class="related_posts_content">
                                               <h3><a href="#">Post with Video</a></h3>
                                               <span>December 1, 2018 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>  
                       </div>
                    </div>
                    <!--blog grid area start-->
                </div>
            </div>
        </div>
    </div>
    <!--blog section area end-->

    <!--footer area start-->
    <footer class="footer_widgets blog_widgets">
        <div class="footer_top">
            <div class="container">
                <div class="footer_top_inner">   
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widgets_container">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                            <div class="widgets_container">
                                <h3>Extras</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Brands</a></li>
                                        <li><a href="#">Gift Certificates</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">Specials</a></li>
                                        <li><a href="contact.php">Site Map</a></li>
                                        <li><a href="my-account.php">My Account</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container contact_us">
                                <h3>Contact Us</h3>
                                <div class="footer_contact">
                                    <p>Address: 6688 Princess Road, London, Greater London BAS 23JK, UK</p>
                                    <p>Phone: <a href="tel:+(+012)800456789-987">(+012) 800 456 789 - 987</a> </p>
                                    <p>Email: demo@example.com</p>
                                    <ul>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widgets_container newsletter">
                                <h3>Join Our Newsletter Now</h3>
                                <div class="newleter-content">
                                    <p>Exceptional quality. Ethical factories. Sign up to enjoy free U.S. shipping and returns on your first order.</p>
                                    <div class="subscribe_form">
                                        <form id="mc-form" class="mc-form footer-newsletter" >
                                            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address here..." />
                                            <button id="mc-submit">Subscribe !</button>
                                        </form>
                                        <!-- mailchimp-alerts Start -->
                                        <div class="mailchimp-alerts text-centre">
                                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                        </div><!-- mailchimp-alerts end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p> &copy; 2021 <strong> </strong> Mede with ❤️ by <a href="https://hasthemes.com/" target="_blank"><strong>HasThemes</strong></a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_custom_links">
                            <ul>
                                <li><a href="#">Order History</a></li>
                                <li><a href="wishlist.php">Wish List</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->




<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>


<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>

</html>