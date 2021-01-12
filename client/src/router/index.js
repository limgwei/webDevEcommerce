import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Products from '../views/Products.vue'
import ProductsPromo from '../views/ProductsPromo.vue'
import ProductDetail from '../views/ProductDetail.vue'
import Cart from '../views/Cart.vue'
import Rooms from '../views/Rooms.vue'

import EditUser from '../components/Profile/EditUser.vue'
import History from '../components/Profile/History.vue'
import HistoryDetail from '../components/Profile/HistoryDetail.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/products',
    name: 'products',
    component: Products
  },
  {
  path:'/product/:id',
  name:'product.detail',
  component: ProductDetail
  },
  {
    path:'/products/promo',
    name:'products.promo',
    component: ProductsPromo
  },
  {
    path:'/rooms/',
    name:'rooms',
    component: Rooms
  },

  {path:'/Edit', component: EditUser},
  {path:'/History',component: History, name: 'History'},
  {path: '/History/HistoryDetail/:id',name:'HistoryDetail', component:HistoryDetail},
  {
    path:'/Cart',
    name:'Cart',
    component: Cart
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
