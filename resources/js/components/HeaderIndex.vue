<template>
    <header id="header" class="header-v2">
        <div class="header-top-banner">
            <a href="#"><img src="img/banner-top.jpg" alt="" class="img-reponsive"></a>
        </div>
        <div class="topbar">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-md-6 col-sm-6 col-xs-4 flex-left">
                        <div class="topbar-left">
                            <div class="element element-store hidden-xs hidden-sm">
                                <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="img/icon-map.png" alt="">
                                    <span>Store Location</span>
                                    
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label1">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#"><img src="img/icon-track.png" alt=""><span>Track Your Order</span></a>
                            </div>
                            <div class="element element-account hidden-md hidden-lg">
                                <a id="label4" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                
                                    <span>My Account</span>
                                    <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label4">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="#">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-8 flex-right">
                        <div class="topbar-right">
                            <div class="element hidden-xs hidden-sm">
                                <a href="#">Buyer Protection </a>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#">Help</a>
                            </div>
                            <div class="element hidden-xs hidden-sm">
                                <a href="#"><img src="img/icon-phone.png" alt=""><span>Save big on our app!</span></a>
                            </div>
                            <div class="element element-leaguage">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="img/icon-l.png" alt="">
                                    <span>English</span>
                                    <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">EN</a></li>
                                    <li><a href="#">DE</a></li>
                                    <li><a href="#">FR</a></li>
                                </ul>
                            </div>
                            <div class="element element-currency">
                                <a id="label3" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                
                                    <span>USD</span>
                                    <span class="ion-ios-arrow-down f-10 e-arrow"></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="label3">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">AUD</a></li>
                                    <li><a href="#">EUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-center">
            <div class="container container-240">
                <div class="row flex">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6 v-center header-logo">
                        <a href="#"><img src="img/logo.png" alt="" class="img-reponsive"></a>
                    </div>
                    <div class="col-lg-7 col-md-7 v-center header-search hidden-xs hidden-sm">
                        <form method="get" class="searchform ajax-search" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" name="q" class="form-control" placeholder="i’m shoping for...">
                            <ul class="list-product-search hidden-xs hidden-sm">
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="img/product/iphonex.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="img/product/sound.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Smartphone 6S 64GB LTE</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="img/product/phone4.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="img/product/phone5.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Smartphone 6S 64GB LTE </h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex align-center" href="">
                                        <div class="product-img">
                                            <img src="img/product/phone1.jpg" alt="">
                                        </div>
                                        <h3 class="product-title">Notebook Black Spire Smartphone Black 2.0</h3>
                                    </a>
                                </li>
                            </ul>
                            <div class="search-panel">
                                <a class="dropdown-toggle" data-toggle="dropdown" href='#'>All categories <span class="fa fa-caret-down"></span></a>
                                <ul id="category" class="dropdown-menu dropdown-category">
                                    <li><a href="#">TV & Video</a></li>
                                    <li><a href="#">Home Audio & Theater</a></li>
                                    <li><a href="#">Camera, Photo & Video</a></li>
                                    <li><a href="#">Cell Phones & Accessories</a></li>
                                    <li><a href="#">Headphones</a></li>
                                    <li><a href="#">Car Electronics</a></li>
                                    <li><a href="#">Electronics Showcase</a></li>
                                </ul>
                            </div>
                            <span class="input-group-btn">
                                        <button class="button_search" type="button"><i class="ion-ios-search-strong"></i></button>
                            </span>
                        </form>
                        <div class="tags">
                            <span>Most searched :</span>
                            <a href="#">umbrella</a>
                            <a href="#">hair accessories </a>
                            <a href="#">diamond</a>
                            <a href="#"> painting slime</a>
                            <a href="#">sunglasses</a>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6 v-center header-sub">
                        <div class="right-panel">
                            <div class="header-sub-element hidden-xs hidden-sm">
                                <div class="sub-left">
                                    <img src="img/icon-call.png" alt="">
                                </div>
                                <div class="sub-right">
                                    <span>Call Us Free</span>
                                    <div class="phone">(+123) 456 789 </div>
                                </div>
                            </div>
                            <div class="header-sub-element row">
                                <a class="hidden-xs hidden-sm" href=""><img src="img/icon-user.png" alt=""></a>
                                <a href="#"><img src="img/icon-heart.png" alt=""></a>
                                <div class="cart">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="label5">
                                        <img src="img/icon-cart.png" alt="">
                                        <span class="count cart-count">0</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-cart">
                                        <ul class="mini-products-list">
                                            <li class="item-cart">
                                                <div class="product-img-wrap">
                                                    <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="inner-left">
                                                        <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                        <div class="product-price">
                                                            $ 60.00 <span>( x2)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                            </li>
                                            <li class="item-cart">
                                                <div class="product-img-wrap">
                                                    <a href="#"><img src="img/cart1.jpg" alt="" class="img-reponsive"></a>
                                                </div>
                                                <div class="product-details">
                                                    <div class="inner-left">
                                                        <div class="product-name"><a href="#">Harman Kardon Onyx Studio </a></div>
                                                        <div class="product-price">
                                                            $ 60.00 <span>( x2)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#" class="e-del"><i class="ion-ios-close-empty"></i></a>
                                            </li>
                                        </ul>
                                        <div class="bottom-cart">
                                            <div class="cart-price">
                                                <span>Subtotal</span>
                                                <span class="price-total">$ 120.00</span>
                                            </div>
                                            <div class="button-cart">
                                                <a href="#" class="cart-btn btn-viewcart">View Cart</a>
                                                <a href="#" class="cart-btn e-checkout btn-gradient">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="hidden-md hidden-lg icon-pushmenu js-push-menu">
                                    <i class="fa fa-bars f-15"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-xs hidden-sm">
            <div class="flex lr">
                <div class="box-header-nav">
                    <nav class="main-menu">
                        <ul class="nav navbar-nav">
                            <li class="level1 active hassub"><a href="#">Home</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 ver2 dropdown-menu">
                                    <div class="row">
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="home1.html">
                                                    <img src="img/demo/demo1.jpg" alt="" class="img-reponsive">

                                                </a>
                                            </div>
                                            <div class="demo-text">Demo 1</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="home2.html"><img src="img/demo/demo2.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text">Demo 2</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="home3.html"><img src="img/demo/demo3.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text">Demo 3</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="home4.html"><img src="img/demo/demo4.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text">Demo 4</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="home5.html"><img src="img/demo/demo5.jpg" alt="" class="img-reponsive"></a>
                                            </div>
                                            <div class="demo-text">Demo 5</div>
                                        </div>
                                        <div class="cate-item col-md-4 col-sm-12">
                                            <div class="demo-img">
                                                <a href="#"><img src="img/demo/demo6.jpg" alt="" class="img-reponsive"></a>
                                                <div class="overlay-img box-center">
                                                    <a href="#" class="btn-gradient btn-csoon">Coming soon</a>
                                                </div>
                                            </div>
                                            <div class="demo-text">Demo 6</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="level1"><a href="#">TV & Video</a></li>
                            <li class="level1"><a href="#">Home Audio & Theater <span class="h-ribbon h-pos v4 e-skyblue">sale</span></a></li>
                            <li class="level1"><a href="#">Camera, Photo & VideoCell <span class="h-ribbon h-pos v4 e-red">hot</span></a></li>
                            <li class="level1"><a href="#"> Phones & Accessories</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="box-header-menu">
                    <nav class="main-menu">
                        <ul class="nav navbar-nav">
                            <li class="level1"><a href="#">Flash Deals</a></li>
                            <li class="level1"><a href="#">Tech Discovery<span class="h-ribbon h-pos e-green v4">new</span></a></li>
                            <li class="level1"><a href="#">Trending Styles</a></li>
                            <li class="level1"><a href="#">Gift Cards </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</template>
<script>
// // import useProducts from "../composables/Products";
// import { onMounted } from "vue";
// import axios from "axios";
// export default {
//     data(props) {
//     return {
//         User:{},
//         content:props.token,
//     }
//     },
//     props: {  
//         token: String,
//     },
//     methods: {
//         getUser()
//         {
//         axios.post('http://127.0.0.1:8000/data-user/',{'_token':this.content})
//         .then(response => (this.User = response.data))
//         }
//     },
//     mounted(props) {
//         this.getUser()
//     }
//     // setup(props) {
//     //     // const { Products, getProducts} = useProducts()
//     //     // const ids = props._token

//     //     onMounted(getProducts(props._token))

//     //     return {
//     //         Products
//     //     }
//     // }
// }
</script>