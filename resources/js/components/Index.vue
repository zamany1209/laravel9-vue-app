<template>
    <!-- push menu-->
    <div class="pushmenu menu-home5">
        <div class="menu-push">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="clearfix"></div>
            <form role="search" method="get" id="searchform" class="searchform" action="/search">
                <div>
                    <label class="screen-reader-text" for="q"></label>
                    <input type="text" placeholder="Search for products" value="" name="q" id="q" autocomplete="off">
                    <input type="hidden" name="type" value="product">
                    <button type="submit" id="searchsubmit"><i class="ion-ios-search-strong"></i></button>
                </div>
            </form>
            <ul class="nav-home5 js-menubar">
                <li class="level1 active dropdown"><a href="#">Home</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="home1.html" title="">Demo 1</a></li>
                        <li class="level2"><a href="home2.html" title="">Demo 2</a></li>
                        <li class="level2"><a href="home3.html" title="">Demo 3</a></li>
                        <li class="level2"><a href="home4.html" title="">Demo 4</a></li>
                        <li class="level2"><a href="home5.html" title="">Demo 5</a></li>
                        <li class="level2"><a href="#" title="">Demo 6</a></li>
                    </ul>
                </li>
                <li class="level1 active dropdown"><a href="#">Shop</a>
                    <span class="icon-sub-menu"></span>
                    <div class="menu-level1 js-open-menu">
                        <ul class="level1">
                            <li class="level2">
                                <a href="#">Shop Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">shop Full Width</a></li>
                                    <li class="level3"><a href="shopgrid_v1.html" title="">Shop Grid v.1</a></li>
                                    <li class="level3"><a href="shopgrid_v2.html" title="">Shop Grid v.2</a></li>
                                    <li class="level3"><a href="shoplist.html" title="">Shop List</a></li>
                                    <li class="level3"><a href="shopleft_sidebar.html" title="">Shop Left Sidebar</a></li>
                                    <li class="level3"><a href="shopright_sidebar.html" title="">Shop Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Categories</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="cat_fullwidth.html" title="">Categories Full Width</a></li>
                                    <li class="level3"><a href="cat_left_sidebar.html" title="">Categories Left Sidebar</a></li>
                                    <li class="level3"><a href="cat_right_sidebar.html" title="">Categories Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Type</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="bundle.html" title="">Bundle</a></li>
                                    <li class="level3"><a href="pin_product.html" title="">Pin Product</a></li>
                                    <li class="level3"><a href="360degree.html" title="">360 Degree</a></li>
                                    <li class="level3"><a href="feature_video.html" title="">Featued video</a></li>
                                    <li class="level3"><a href="simple.html">Simple</a></li>
                                    <li class="level3"><a href="variable.html">Variable</a></li>
                                    <li class="level3"><a href="affilate.html">External / Affiliate</a></li>
                                    <li class="level3"><a href="grouped.html">Grouped</a></li>
                                    <li class="level3"><a href="outofstock.html">Out of stock</a></li>
                                    <li class="level3"><a href="onsale.html">On sale</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Single Product Layout</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="product_extended.html" title="">Product Extended</a></li>
                                    <li class="level3"><a href="product_sidebar.html" title="">Product Left Sidebar</a></li>
                                    <li class="level3"><a href="product_right_sidebar.html" title="">Product Right Sideba</a></li>
                                </ul>
                            </li>
                            <li class="level2">
                                <a href="#">Other Pages</a>
                                <ul class="menu-level-2">
                                    <li class="level3"><a href="shop_full.html" title="">Shop</a></li>
                                    <li class="level3"><a href="cart.html" title="">Cart</a></li>
                                    <li class="level3"><a href="wishlist.html" title="">My Wishlist</a></li>
                                    <li class="level3"><a href="checkout.html" title="">Checkout</a></li>
                                    <li class="level3"><a href="myaccount.html" title="">My Account</a></li>
                                    <li class="level3"><a href="track.html" title="">Track Your Order</a></li>
                                    <li class="level3"><a href="quickview.html" title="">Quick View</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="level1 active dropdown"><a href="#">Mega Menu</a></li>
                <li class="level1">
                    <a href="#">Pages</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="aboutus.html" title="About Us ">About Us </a></li>
                        <li class="level2"><a href="contactus.html" title="Contact">Contact</a></li>
                        <li class="level2"><a href="faq.html" title="FAQs">FAQs</a></li>
                        <li class="level2"><a href="404.html" title="404">404</a></li>
                        <li class="level2"><a href="commingsoon.html" title="Coming Soon">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="level1">
                    <a href="#">Blog</a>
                    <span class="icon-sub-menu"></span>
                    <ul class="menu-level1 js-open-menu">
                        <li class="level2"><a href="blog-standar.html" title="Blog Standar">Blog Standar</a></li>
                        <li class="level2"><a href="blog_grid.html" title="Blog Gird">Blog Gird</a></li>
                        <li class="level2"><a href="blog-standar.html" title="Blog Sidebar">Blog Sidebar</a></li>
                        <li class="level2"><a href="blog-single-post.html" title="Blog Single Post">Blog Single Post</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- end push menu-->
<div class="wrappage">

    <Header :token="content"></Header>

    
    <!-- Slide -->
    <div class="slide-fullw">
        <div class="js-slider-home2">
            <div class="e-slide-img">
                <img src="img/slider/h2_s1.jpg" alt="">
                <div class="slide-content v4 box-center">
                    <div class="container container-240">
                        <p class="cate">SMART PHONE X</p>
                        <h3 class="v4">Say hello to the future</h3>
                        <p class="sale v3">Sale up to <span class="red">60%</span> off</p>
                        <a href="#" class="slide-btn e-orange-gradient" tabindex="0">Shop now<i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
            </div>

            <div class="e-slide-img">
                <img src="img/slider/h2_s2.jpg" alt="">
                <div class="slide-content v4 box-center">
                    <div class="container container-240">
                        <p class="cate white">Galaxy s9 plus </p>
                        <h3 class="v4">Say hello to the future</h3>
                        <p class="sale v3">Sale up to <span class="red">60%</span> off</p>
                        <a href="#" class="slide-btn e-pink-gradient" tabindex="0">Shop now<i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
            </div>

            <div class="e-slide-img">
                <img src="img/slider/h2_s3.jpg" alt="">
                <div class="slide-content v4 box-center">
                    <div class="container container-240">
                        <p class="cate">Beoplay super bass </p>
                        <h3 class="v4">Say hello to the future</h3>
                        <p class="sale v3">Sale up to <span class="red">60%</span> off</p>
                        <a href="#" class="slide-btn e-orange-gradient" tabindex="0">Shop now<i class="ion-ios-arrow-forward"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slide -->
    <!-- Homepage banner -->
    <div class="homepage-banner spc2">
        <div class="container container-240">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="banner-img effect-img3 plus-zoom">
                        <a href="#" class=""><img src="img/banner/h2_b1.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="banner-img effect-img3 plus-zoom">
                        <a href="#"><img src="img/banner/h2_b2.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4">
                    <div class="banner-img effect-img3 plus-zoom">
                        <a href="#"><img src="img/banner/h2_b3.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Homepage banner -->
    <!-- feature product -->
    <div class="feature-product spc2">
        <div class="container container-240">
            <div class="ecome-heading style2">
                <h1>Featured Products</h1>
                <a href="#" class="btn-show">Shop more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <p class="ecome-info spc2">Real Activity Data from China Customs For Anyone</p>
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <ul class="tab-link">
                        <li class="active">
                            <a @click="getProducts()" data-toggle="tab" href="#tv">
                                <div class="tab-link-info flex align-center">
                                    <img src="img/category/1.png" alt="">
                                    <span>All</span>
                                </div>
                            </a>
                        </li>
                        <li v-for="List_category in List_category" :key="List_category.id">
                            <a @click="getCategory_Product(List_category.id)" data-toggle="tab" href="#tv">
                                <div class="tab-link-info flex align-center">
                                    <img src="img/category/1.png" alt="">
                                    <span>{{ List_category.name }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="tab-content">
                        <div id="tv" class="tab-pane fade in active">
                            <div class="row">
                                <!-- <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="#"><img src="img/product/pd2.jpg" alt="" class="img-reponsive"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <ul class="desc-list">
                                                    <li>Connects directly to Bluetooth</li>
                                                    <li>Battery Indicator light</li>
                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                    <li>Computers running Windows</li>
                                                </ul>
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                <p class="product-cate">Computers & Accessories</p>
                                                <h3 class="product-title"><a href="#">Cordless TrackMan Wheel</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price"><span>$1,215.00</span></div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div v-for="Products in Products" :key="Products.id" class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="#"><img src="img/product/pd3.jpg" alt="" class="img-reponsive"></a>
                                            <div class="ribbon-price red"><span>- 30% </span></div>
                                        </div>
                                        <div class="product-info">
                                            <div class="color-group"></div>
                                            <div class="element-list element-list-left">
                                                <!-- <ul class="desc-list">
                                                    <li>Connects directly to Bluetooth</li>
                                                    <li>Battery Indicator light</li>
                                                    <li>DPI Selection:2600/2000/1600/1200/800</li>
                                                    <li>Computers running Windows</li>
                                                </ul> -->
                                            </div>
                                            <div class="element-list element-list-middle">
                                                <!-- <div class="product-rating bd-rating">
                                                    <span class="star star-5"></span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div> -->
                                                <p class="product-cate">category</p>
                                                <h3 class="product-title"><a href="#">{{ Products.name }}</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">{{ Products.price }}</span>
                                                        <span class="old">{{ Products.name }}</span>
                                                    </div>
                                                    <a href="#" class="btn-icon btn-view">
                                                        <span class="icon-bg icon-view"></span>
                                                    </a>
                                                </div>
                                                <div class="product-bottom-group">
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-cart"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-wishlist"></span>
                                                    </a>
                                                    <a href="#" class="btn-icon">
                                                        <span class="icon-bg icon-compare"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-button-group">
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-cart"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-wishlist"></span>
                                                </a>
                                                <a href="#" class="btn-icon">
                                                    <span class="icon-bg icon-compare"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End feature product -->
    <!-- Homepage banner -->
    <div class="homepage-banner spc3">
        <div class="container container-240">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="banner-img effect-img3 plus-zoom">
                        <a href="#" class=""><img src="img/banner/h2_b4.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="banner-img effect-img3 plus-zoom">
                        <a href="#"><img src="img/banner/h2_b5.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Homepage banner -->
    <!-- Brand  -->
    <div class="brand v2">
        <div class="container container-240">
            <div class="owl-carousel owl-theme owl-brand js-owl-brand2">
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo1.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo2.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo3.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo4.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo5.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo6.png" alt=""></a>
                </div>
                <div class="brand-item">
                    <a href="#" class="hover-images"><img src="img/brand/brandlogo6.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand  -->
    <!-- Our blog -->
    <div class="our-blog bg">
        <div class="container container-240">
            <div class="ecome-heading style2">
                <h1 class="v2">From Our Blog</h1>
                <a href="#" class="btn-show">View more<i class="ion-ios-arrow-forward"></i></a>
            </div>
            <p class="ecome-info spc2">Real Activity Data from China Customs For Anyone</p>
            <div class="product-tab-pd owl-carousel owl-theme js-owl-blog owl-custom-dots v2">
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog1.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog3.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog1.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog3.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog2.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
                <div class="blog-post-item v3">
                    <div class="blog-img">
                        <a href="#" class="hover-images"><img src="img/blog/h2_blog1.jpg" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="heading-blog flex align-center">
                        <div class="blog-post-date e-gradient">
                            <span class="b-date">14</span>
                            <span class="b-month">dec</span>
                        </div>
                        <h3 class="blog-post-title"><a href="#">Ricoh's latest spherical camera nets quality images</a></h3>
                    </div>
                    <p class="blog-post-desc">Here are many variations of passages of Lorem Ipsum availablethe majority have suffered alteration in some form...</p>
                    <div class="blog-post-author">
                        <div class="author">Posted by <span class="c-black">Admin</span></div>
                        <div class="blog-post-comment"><span class="c-black"></span>2</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End blog -->
    <!-- e-category  -->
    <div class="e-category">
        <div class="container container-240">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Featured Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/usb.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/macbook.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/flycam.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Rated Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/headphone2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/anker.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h1 class="cate-title">Top Selling Products</h1>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/headphone.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/samsung2.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                    <div class="cate-item">
                        <div class="product-img">
                            <a href="#"><img src="img/product/sound.jpg" alt="" class="img-reponsive"></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><a href="#">Epson Home Cinema 5040UB </a></h3>
                            <div class="product-price v2"><span>$780.00</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature">
        <div class="container container-240">
            <div class="feature-inside">
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/truck.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Worldwide Delivery</h3>
                        <p>With sites in 5 languages, we ship to over 200 countries & regions.</p>
                    </div>
                </div>
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/credit-card.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Safe Payment</h3>
                        <p>Pay with the world’s most popular and secure payment methods.</p>
                    </div>
                </div>
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/safety.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>Shop with Confidence</h3>
                        <p>Our Buyer Protection covers your purchase from click to delivery.</p>
                    </div>
                </div>
                <div class="feature-block text-center">
                    <div class="feature-block-img"><img src="img/feature/telephone.png" alt="" class="img-reponsive"></div>
                    <div class="feature-info">
                        <h3>24/7 Help Center</h3>
                        <p>Round-the-clock assistance for a smooth shopping experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / end content -->

    <Footer></Footer>
</div>
   {{_token}}
</template>

<script>
// import useProducts from "../composables/Products";
import Header from "./Header";
import Footer from "./Footer";
// import { onMounted } from "vue";
import axios from "axios";
export default {
    data(props) {
    return {
        Products:{},
        List_category:{},
        Category:'',
        content:props._token,
    }
    },
    props: {  
        _token: String,
    },
    components:{
        Header,
        Footer
    },
    methods: {
        getProducts()
        {
        axios.post('http://127.0.0.1:8000/api/product-list/',{'_token':this.content})
        .then(response => (this.Products = response.data.data))
        },
        getCategory_Product(my_category)
        {
        axios.post('http://127.0.0.1:8000/api/product-category-list/',{'_token':this.content,'category':my_category})
        .then(response => (this.Products = response.data.data))
        },
        getCategory()
        {
        axios.get('http://127.0.0.1:8000/api/list-category/')
        .then(response => (this.List_category = response.data))
        }
    },
    mounted(props) {
        this.getProducts()
        this.getCategory()
    }
    // setup(props) {
    //     // const { Products, getProducts} = useProducts()
    //     // const ids = props._token

    //     onMounted(getProducts(props._token))

    //     return {
    //         Products
    //     }
    // }
}
</script>