<template>
  <div class="products">
        <div class="product-filter">
        <div class="container">
          
            <h1 style="text-decoration:underline;">Rooms Product</h1>
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
        searchKey:'',
        id:'',
        latests:'',
        nameA:'',
        nameD:'',
        priceA:'',
        priceD:'',
        ori:'',
      }
  },
  methods:{
    sorting(value){
      var id = this.$route.params.id;
      
      if(value==1){
         axios.get('http://127.0.0.1:8000/api/product/sub/'+id+'/latest').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==2){
       axios.get('http://127.0.0.1:8000/api/product/sub/'+id+'/name').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==3){
        axios.get('http://127.0.0.1:8000/api/product/sub/'+id+'/nameD').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
       
      }else if(value ==4){
        axios.get('http://127.0.0.1:8000/api/product/sub/'+id+'/priceA').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else if(value ==5){
           axios.get('http://127.0.0.1:8000/api/product/sub/'+id+'/products').then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
      }else{
         axios.get('http://127.0.0.1:8000/api/product/sub/'+id).then( data=>{
        this.products = data.data.data;
        console.log(value);
        console.log(this.products);
      })
        
      }
    },
    searching(){
      
        axios.get('http://127.0.0.1:8000/api/sub/'+this.id+'/search/{name}',this.searchKey).then( data=>{
        this.products = data.data.data;
        
        console.log(this.products);
        })
    }

  },
  created(){
    
        
        var id = this.$route.params.id;
      axios.get('http://127.0.0.1:8000/api/product/sub/'+id).then( data=>{
        this.products = data.data.data;
        this.ori = this.products;
        this.id = this.products[0].sub_category_id;
        console.log(this.id)
        console.log(this.products);
      })

      axios.get('http://127.0.0.1:8000/api/sub/'+id+'/latest').then( data=>{
        this.latests = data.data.data;
        console.log(this.latests)
      })

      axios.get('http://127.0.0.1:8000/api/sub/'+id+'/name').then( data=>{
        this.nameA = data.data.data;
      })
      axios.get('http://127.0.0.1:8000/api/sub/'+id+'/nameD').then( data=>{
        this.nameD = data.data.data;
      })
      axios.get('http://127.0.0.1:8000/api/sub/'+id+'/price').then( data=>{
        this.priceA = data.data.data;
      })
      axios.get('http://127.0.0.1:8000/api/sub/'+id+'/priceD').then( data=>{
        this.priceD = data.data.data;
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