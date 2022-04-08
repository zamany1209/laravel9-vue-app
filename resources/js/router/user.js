import { createRouter, createWebHistory } from "vue-router";

import CompaniesIndex from '../user/Index'

const routes = [
    {
        path: '/profile',
        name: 'Index.index',
        component: CompaniesIndex
    },
    {
        path: '/products',
        name: 'products',
        component: CompaniesIndex
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})