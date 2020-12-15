<template>
  <div class="products">
    
      <ProductFilter v-for="product in products" :key="product.id" />
      <ProductList />
  </div>
</template>

<script>
import ProductFilter from '@/components/Product/ProductFilter.vue'
import ProductList from '@/components/Product/ProductList.vue'
import axious from 'axios'

export default {
  name: 'Products',
  components:{
    ProductList,
    ProductFilter
  },
  data(){
      return{
        products:''
      }
  },
  methods:{
    
  },
  created(){
      axious.get('http://127.0.0.1:8000/api/product').then( data=>{
        this.products =data.data;
        console.log(this.products);
      })
    
  }
  
}
</script>