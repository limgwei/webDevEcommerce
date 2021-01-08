import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Products from '../views/Products.vue'
import ProductDetail from '../views/ProductDetail.vue'
import Profile from '../views/Profile.vue'
import Cart from '../views/Cart.vue'

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
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: Products
  },
  {
  path:'/products/detail',
  name:'detail',
  component: ProductDetail
  },
  {
    path: '/Profile',
    component: Profile,
    children:[
      {path:'/',redirect:'Edit'},
      {path:'Edit', component: EditUser},
      {
        path:'History',
        component: History,
        name: 'History',
        children:[
          {path: 'HistoryDetail+id=:id', name: 'HistoryDetail', component:HistoryDetail}
        ]
      }
    ]
  },
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
