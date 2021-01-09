<template>
  <div class="products">
    
      <ProductFilter />
      <div class="container flex">
         <ProductList v-for="product in products" :key="product.id" :product="product" />
      </div>
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
        products:'',
      }
  },
  methods:{
    
  },
  created(){
      axious.get('http://127.0.0.1:8000/api/product').then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
      })
    
  }
  
}
</script>

<style lang="scss" scoped>
  


  .flex {
    display: flex; 
    flex-wrap: wrap;  
  }
</style>