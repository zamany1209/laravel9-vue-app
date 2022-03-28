import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../components/Index'
import CompaniesProducts from '../components/products'

const routes = [
    {
        path: '/',
        name: 'Index.index',
        component: CompaniesIndex
    },
    {
        path: '/products',
        name: 'products',
        component: CompaniesProducts
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})
