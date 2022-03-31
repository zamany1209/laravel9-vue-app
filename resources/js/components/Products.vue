<template>

<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="latest-product-area padding-bottom">
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input v-model="Category.search" type="text" name="search_product" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <input v-model="Category.new" type="checkbox" />
                        <button @click="getProducts()">search</button>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <select v-model="Category.category">
                                    <option value="">هیچ کدام</option>
                                    <option v-for="List_category in List_category" :key="List_category.id" :value="List_category.id">{{ List_category.name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <select v-model="Category.sort_price">
                                    <option value="">هیچ کدام</option>
                                    <option>low_high</option>
                                    <option>high_low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6" v-for="products in Products" :key="products.id">
                                        <div class="single-product mb-60">
                                            <div class="product-img">
                                                <img :src="'product/'+products.url_img" alt="">
                                            
                                                    <div v-if="products.new=='1'" class="new-product">
                                                        <span>New</span>
                                                    </div>

                                            </div>
                                            <div class="product-caption">
                                                <div class="product-ratting">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star low-star"></i>
                                                    <i class="far fa-star low-star"></i>
                                                </div>
                                                <h4><a href="product/">{{ products.name }}</a></h4>
                                                <div class="price">
                                                    <ul>
                                                        <li>{{ products.price }}</li>
                                                        <li class="discount">{{ products.price_discount }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- product list part end-->
</template>

<script>
import useProducts from "../composables/Products";
import { onMounted } from "vue";

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
    methods: {
        getProducts()
        {
        axios.post('http://127.0.0.1:8000/product-list-category/',
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
        axios.get('http://127.0.0.1:8000/list-category/')
        .then(response => (this.List_category = response.data))
        }
    },
    mounted() {
        this.getProducts()
        this.getCategory()
    }
}
</script>
