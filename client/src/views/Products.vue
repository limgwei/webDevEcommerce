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
        products:[
            {id:'1',name: 'White Sofa',category:'sofa',img: require('@/assets/slide1.jpg'),price:'1800',description:'a sofa',discount:{value:'200'}},
            {id:'2',name: 'Green Sofa',category:'table',img: require('@/assets/slide2.jpg'),price:'1800',description:'a sofa'},
            {id:'3',name: 'Blue Sofa',category:'sofa',img:require('@/assets/slide3.jpg'),price:'1800',description:'a sofa'},
            {id:'4',name: 'Yellow Sofa',category:'sofa',img:require('@/assets/slide1.jpg'),price:'1800',description:'a sofa'},
            {id:'5',name: 'Purple Sofa',category:'sofa',img:require('@/assets/slide2.jpg'),price:'1800',description:'a sofa'},
            {id:'6',name: 'Pink Sofa',category:'sofa',img:require('@/assets/slide3.jpg'),price:'1800',description:'a sofa'},
        ],
      }
  },
  methods:{
    
  },
  created(){
      axious.get('http://127.0.0.1:8000/api/product').then( data=>{
        this.products = data.data;
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