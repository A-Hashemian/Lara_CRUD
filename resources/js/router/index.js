import {createRouter,createWebHistory} from 'vue-router'
import productIndex from '../components/products/index.vue'
import notFounded from '../components/notFound.vue'
 const routes=[
     {
         name: 'home',
         path: '/',
         component: productIndex
     },
     {
         name: 'notFound',
         path: '/:pathMatch(.*)*',
         component: notFounded
     },
 ]
const router=createRouter({
    history:createWebHistory(process.env.BASE_URL),
    routes,

})

export default router
