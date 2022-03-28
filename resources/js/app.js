/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue').default;
import { createApp } from "vue";
import router from './router'
import CompaniesIndex from './components/Index'
import CompaniesProducts from './components/products'

createApp({
    components: {
        CompaniesIndex,
        CompaniesProducts
    }
}).use(router).mount('#app')
