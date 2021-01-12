<template>
    <div class="container flex">
         <div v-for="(cat ,index) in cats" :key="cat.id"  class="product-list">
                
                <h1>{{cat.name}} v</h1>
                <ul>
                    <li v-for="(sub,key) in subs[index]" :key="key">         
                        <router-link :to="{ name: 'product.sub', params: { id: sub.id } }">{{sub.name}}</router-link>
                      
                        </li>
                </ul>
        </div> 
    </div>
</template>

<script>
import axios from 'axios'
export default {
    name: 'Rooms',
    data(){
        return{
            cats:'',
            products:'',
            productArray:[],
            subCategory:[],
            subs:[]
        }
    },
    created(){
      axios.get('http://127.0.0.1:8000/api/category').then( data=>{
        this.cats = data.data.data;
        
        //console.log(this.cats);
        this.cats.forEach(item => {
            axios.get('http://127.0.0.1:8000/api/subcategory/category/'+item.id).then( data=>{
                this.subCategory = data.data.data;
                this.subs.push(this.subCategory)
                
            })
        })

    })
    
    
  },
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

  ul{
      li{
          font-size: 180%;
      }
  }

 





</style>