import {createRouter,createWebHistory} from 'vue-router'
import productIndex from '../components/products/index.vue'
import notFounded from '../components/notFound.vue'
import productNew from '../components/products/new.vue'
import productEdit from '../components/products/edit.vue'
 const routes=[
     {
         name: 'home',
         path: '/',
         component: productIndex
     },
     {

         path: '/product/new',
         component: productNew
     },
     {

         path: '/product/new',
         component: productEdit,
         props:true
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
