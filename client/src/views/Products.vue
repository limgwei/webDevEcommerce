<template>
  <div class="products">
        <div class="product-filter">
        <div class="container">
          <h1 style="text-decoration:underline;">All Products</h1>
            
            <div class="filter-bar">
            

                <div class="left">
                    <label for="filter">
            <font-awesome-icon :icon="['fas','filter']" class="static-icon"/></label>
                
                <select name="sort" id="sort" @change="sorting($event.target.value)" >
                    <option value="" active>Sort By</option>
                    <option value="1">Latest</option>
                    <option value="2">Name (A-Z)</option>
                    <option value="3">Name (Z-A)</option>
                    <option value="4">Price (High-Low)</option>
                    <option value="5">Price(Low-High)</option>
                    

                </select>
                </div>

            </div>

            
        </div>
    </div>
      <div class="container flex">
         <ProductList v-for="product in products" :key="product.id" :product="product" />
      </div>
  </div>
</template>

<script>
import ProductList from '@/components/Product/ProductList.vue'
import axios from 'axios'

export default {
  name: 'Products',
  components:{
    ProductList,
    
  },
  data(){
      return{
        products:'',
      }
  },
  methods:{
    sorting(value){
      
      if(value==1){
        axios.get('http://127.0.0.1:8000/api/product/latest').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==2){
        axios.get('http://127.0.0.1:8000/api/product/name').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==3){
        axios.get('http://127.0.0.1:8000/api/product/nameD').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==4){
        axios.get('http://127.0.0.1:8000/api/product/price').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==5){
         axios.get('http://127.0.0.1:8000/api/product/priceD').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else{
        axios.get('http://127.0.0.1:8000/api/product').then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
      })
      }
    },
    

  },
  created(){
      axios.get('http://127.0.0.1:8000/api/product').then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
      })
    
  }
  
}
</script>

<style lang="scss" scoped>
  .product-filter{
        .container{
        padding: 3rem 2rem 0 2rem;
        .right{
            input{
                padding:0.4rem;
            }
            .btn{
                margin-left: 0.5rem;
            }
        }

        .filter-bar{
            display:flex;
            
            justify-content: space-between;
        }

        .left{
            justify-content: start;
            select{
                
            padding:0.4rem;
            }
        }
    }
  }


  .flex {
    display: flex; 
    flex-wrap: wrap;  
  }
</style>