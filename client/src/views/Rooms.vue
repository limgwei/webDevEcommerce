<template>
    <div class="container flex">
         <router-link v-for="cat in cats" :key="cat.id" :to="{ name: 'product.category', params: { category: cat.name } }" class="product-list">
                
                <h2>{{cat.name}}</h2>
        </router-link> 
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'Rooms',
    data(){
        return{
            cats:'',
            catArray:[],
            product:[]
        }
    },
    created(){
      axios.get('http://127.0.0.1:8000/api/category').then( data=>{
        this.cats = data.data.data;
        
        console.log(this.cats);
        this.cats.forEach(item => {
            axios.get('http://127.0.0.1:8000/api/subcategory/category/'+item.id).then( data=>{
            this.product = data.data.data;
            this.catArray.push(this.product);
            console.log(this.product);
        })
        })

    })
    
    
  }
}
</script>

<style lang="scss" scoped>
 

 .product-list{
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  padding: 10px 5px;
  background: white;
  color: black;
  text-decoration: none;
   width: 25%;
  img{
      width: 100%;
      height: 20rem;
  }
  
 }

 .flex {
    display: flex; 
    flex-wrap: wrap;  
  }

 





</style>