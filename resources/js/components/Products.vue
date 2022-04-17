<template>
    <div class="wrappage">
        <Header :token="content"></Header>
        <!--content-->
        <div class="container container-240 shop-collection">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shop</li>
            </ul>
            <div class="filter-collection-left hidden-lg hidden-md">
              <a class="btn">Filter</a>
            </div>
            <div class="row shop-colect r-sidebar">
                <div class="col-md-3 col-sm-3 col-xs-12 col-left collection-sidebar" id="filter-sidebar">
                    <div class="close-sidebar-collection hidden-lg hidden-md">
                        <span>filter</span><i class="icon_close ion-close"></i>
                    </div>
                    <div class="filter filter-cate">
                        <ul class="wiget-content v2">
                            <li v-for="List_category in List_category" :key="List_category.id" :value="List_category.id" class="active"><a href="#">{{ List_category.name }}<span class="number">(80)</span></a></li>
                        </ul>
                    </div>
                    <div class="filter filter-group">
                        <h1 class="widget-blog-title">Product filter</h1>
                        <div class="filter-price filter-inside">
                            <h3>Price</h3>
                            <div class="filter-content">
                                <div class="price-range-holder">
                                    <input type="text" class="price-slider" value="">
                                </div>
                                <span class="min-max">
                                    Price: $25 — $258
                                </span>
                                <a href="#" class="btn-filter e-gradient">Filter</a>
                            </div>
                        </div>
                        <div class="filter-brand filter-inside">
                            <h3>Brands</h3>
                            <ul class="e-filter brand-filter">
                                <li><a href="#">Apple <span class="number">(80)</span></a></li>
                                <li class="active-filter"><a href="#">Samsung <span class="number">(80)</span></a></li>
                                <li><a href="#">LG <span class="number">(80)</span></a></li>
                                <li><a href="#">Blackberry <span class="number">(80)</span></a></li>
                                <li><a href="#">Oppo <span class="number">(80)</span></a></li>
                                <li><a href="#">Panasonic <span class="number">(80)</span></a></li>
                            </ul>
                            <a href="#" class="btn-showmore">Show more +</a>
                        </div>
                        <div class="filter-color filter-brand filter-inside">
                            <h3>Color</h3>
                            <ul class="e-filter brand-filter">
                                <li><a href="#">Black <span class="number">(80)</span></a></li>
                                <li><a href="#">Black Leather <span class="number">(80)</span></a></li>
                                <li class="active-filter"><a href="#">Black with Red <span class="number">(80)</span></a></li>
                                <li><a href="#">Gold <span class="number">(80)</span></a></li>
                                <li><a href="#">Spacegrey  <span class="number">(80)</span></a></li>
                            </ul>
                            <a href="#" class="btn-showmore">Show more +</a>
                        </div>
                    </div>
                    <div class="filter filter-product e-category">
                        <h1 class="widget-blog-title">Top Products</h1>
                        <div class="owl-carousel owl-theme js-owl-post">
                            <div class="item">
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone1.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone2.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema  </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone3.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone4.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                                <div class="cate-item">
                                    <div class="product-img">
                                        <a href="#"><img src="http://127.0.0.1:8000/img/product/phone5.jpg" alt="" class="img-reponsive"></a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-title"><a href="#">Epson Home Cinema </a></h3>
                                        <div class="product-price v2"><span>$780.00</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner">
                        <a class="image-bd hover-images" href="" ><img src="http://127.0.0.1:8000/img/o-banner3.jpg" alt="" class="img-reponsive"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12 collection-list">
                    <div class="e-product">
                        <div class="pd-banner">
                           <a href="#" class="image-bd effect_img2"><img src="http://127.0.0.1:8000/img/shop-banner_3.jpg" alt="" class="img-reponsive"></a> 
                        </div>
                        <div class="pd-top">
                            <h1 class="title">Shop</h1>
                            <div class="show-element"><span>Showing 1–15 of 20 results</span></div>
                        </div>
                        <div class="pd-middle">
                            <div class="view-mode view-group">
                                <a class="grid-icon col active"><img src="http://127.0.0.1:8000/img/grid.png" alt=""></a>
                                <a class="grid-icon col2"><img src="http://127.0.0.1:8000/img/grid2.png" alt=""></a>
                                <a class="list-icon list"><img src="http://127.0.0.1:8000/img/list.png" alt=""></a>
                            </div>
                            <div class="pd-sort">
                                <div class="filter-sort">
                                    <div class="dropdown">
                                      <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="dropdown-label">Default sorting</span>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a href="manual">Featured</a></li>   
                                          <li><a href="best-selling">Best Selling</a></li>
                                          <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                            <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                          <li><a href="price-descending">Price, high to low</a></li>
                                          <li><a href="price-ascending">Price, low to high</a></li>
                                          <li><a href="created-ascending">Date, old to new</a></li>
                                          <li><a href="created-descending">Date, new to old</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="filter-show">
                                    <div class="dropdown">
                                          <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              Show
                                                <span class="dropdown-label">12</span>
                                          </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="#">12</a></li>   
                                              <li><a href="#">24</a></li>
                                              <li><a href="#">36</a></li>
                                                <li><a href="#">48</a></li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-collection-grid product-grid">
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

                                <div v-for="products in Products" :key="products.id" class="col-xs-6 col-sm-6 col-md-4 col-lg-4 product-item">
                                    <div class="pd-bd product-inner">
                                        <div class="product-img">
                                            <a href="#"><img :src="'http://127.0.0.1:8000/product/'+products.url_img" alt="" class="img-reponsive"></a>
                                            <div v-if="products.new=='1'" class="ribbon-price red"><span>New</span></div>
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
                                                    <span class="star star-5 active">1</span>
                                                    <span class="star star-4"></span>
                                                    <span class="star star-3"></span>
                                                    <span class="star star-2"></span>
                                                    <span class="star star-1"></span>
                                                    <div class="number-rating">( 896 reviews )</div>
                                                </div>
                                                <p class="product-cate">Audio Speakers</p>
                                                <h3 class="product-title"><a href="#">{{ products.name }}</a></h3>
                                                <div class="product-bottom">
                                                    <div class="product-price">
                                                        <span class="red">{{ products.price }}</span>
                                                        <span class="old">{{ products.price_discount }}</span>
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
                        <div class="pd-middle space-v1">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                            </ul>
                            <div class="pd-sort">
                                <div class="filter-sort">
                                    <div class="dropdown">
                                      <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <span class="dropdown-label">Default sorting</span>
                                      </button>
                                      <ul class="dropdown-menu">
                                          <li><a href="manual">Featured</a></li>   
                                          <li><a href="best-selling">Best Selling</a></li>
                                          <li><a href="title-ascending">Alphabetically, A-Z</a></li>
                                            <li><a href="title-descending">Alphabetically, A-Z</a></li>
                                          <li><a href="price-descending">Price, high to low</a></li>
                                          <li><a href="price-ascending">Price, low to high</a></li>
                                          <li><a href="created-ascending">Date, old to new</a></li>
                                          <li><a href="created-descending">Date, new to old</a></li>
                                      </ul>
                                    </div>
                                </div>
                                <div class="filter-show">
                                    <div class="dropdown">
                                          <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                              Show
                                                <span class="dropdown-label">12</span>
                                          </button>
                                          <ul class="dropdown-menu">
                                              <li><a href="#">12</a></li>   
                                              <li><a href="#">24</a></li>
                                              <li><a href="#">36</a></li>
                                                <li><a href="#">48</a></li>
                                          </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <Footer></Footer>
    </div>
</template>

<script>
import useProducts from "../composables/Products";
import { onMounted } from "vue";
import Header from "./Header";
import Footer from "./Footer";

export default {
    data(props) {
    return {
        Products:{},
        List_category:{},
        content:props._token,
        Category:{
            'search':'',
            'category': '',
            'sort_price': null,
            'new': null,
            'page': '1',
        }
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
        axios.post('http://127.0.0.1:8000/api/product-list-category/',
        {
            '_token':this.content,
            'search':this.Category.search,
            'sort_price':this.Category.sort_price,
            'category':this.Category.category,
            'new':this.Category.new,
        })
        .then(response => (this.Products = response.data.data))
        },
        getCategory()
        {
        axios.get('http://127.0.0.1:8000/api/list-category/')
        .then(response => (this.List_category = response.data))
        }
    },
    mounted() {
        this.getProducts()
        this.getCategory()
    }
}
</script>
