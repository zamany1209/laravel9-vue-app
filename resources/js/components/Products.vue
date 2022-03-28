<template>
    <div v-for="products in Products" :key="products.id">
        <div>{{products.name}}</div>
    </div>
    <button @click="getProducts()">search</button>
    <input v-model="Category.category" type="text" />
    <input v-model="Category.new" type="text" />
    <input v-model="checkss" type="radio" name="ff" id="2022"/>
    <input v-model="checkff" type="radio" name="ff" id="2022"/>
</template>

<script>
import useProducts from "../composables/Products";
import { onMounted } from "vue";

export default {
    data(props) {
    return {
        Products:{},
        content:props._token,
        checkss:true,
        checkff:false,
        Category:{
            'category': 'All',
            'sort_price': '0',
            'new': '0',
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
            'category':this.Category.category,
            'new':this.Category.new
        })
        .then(response => (this.Products = response.data.data))
        }
    },
    mounted(props) {
        this.getProducts()
    }
}
</script>
