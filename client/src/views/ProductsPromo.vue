<template>
  <div class="products">
        <div class="product-filter">
        <div class="container">
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

                <div class="right">
                <input type="text" v-model="searchKey">
                <button class="btn" @click="searching">Search</button>
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
import ProductList from '@/components/discount_product/ProductList.vue'
import axious from 'axios'

export default {
  name: 'Products',
  components:{
    ProductList,
    
  },
  data(){
      return{
        products:'',
        searchKey:''
      }
  },
  methods:{
    sorting(value){
      
      if(value==1){
        axious.get('http://127.0.0.1:8000/api/discount_product/latest').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==2){
        axious.get('http://127.0.0.1:8000/api/discount_product/name').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==3){
        axious.get('http://127.0.0.1:8000/api/discount_product/nameD').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==4){
        axious.get('http://127.0.0.1:8000/api/discount_product/price').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==5){
         axious.get('http://127.0.0.1:8000/api/discount_product/priceD').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else{
        axious.get('http://127.0.0.1:8000/api/discount_product').then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
      })
      }
    },
    searching(){
        axious.get('http://127.0.0.1:8000/api/discount_product/search/{name}',this.searchKey).then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
      })
    }

  },
  created(){
      axious.get('http://127.0.0.1:8000/api/discount_product').then( data=>{
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