<template>
    <router-link :to="{ name: 'product.detail', params: { id: product.id } }" class="product-list">
                <img :src="product.image[0].url" alt="description" />
                <h2>{{product.name}}</h2>
                <span style="display:flex; flex-direction:row;">
                    RM <h2 :class="{strike: product.current_price}">{{product.price}}&nbsp;</h2>
                    <h2 v-show="product.current_price" style="padding-left:10px;"> {{product.current_price}}</h2>
                </span>
                
    </router-link>    
</template>

<script>
export default {
    name: 'ProductList',
    props:['product']
   ,
    data(){
        return{
            
        }
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
  
        .strike{
                text-decoration: line-through;
                font-weight: 500;
        }
 }





</style>