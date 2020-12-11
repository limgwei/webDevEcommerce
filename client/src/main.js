import Vue from 'vue'
import './plugins/fontawesome'
import App from './App.vue'
import router from './router'
import store from './store'
import { library } from '@fortawesome/fontawesome-svg-core'
import {fas} from '@fortawesome/free-solid-svg-icons'
import {far} from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import {VueperSlides, VueperSlide} from 'vueperslides'
import 'vueperslides/dist/vueperslides.css'

library.add(fas,far);
Vue.component('vueper-slides',VueperSlides)
Vue.component('vueper-slide',VueperSlide)
Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.config.productionTip = false

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
