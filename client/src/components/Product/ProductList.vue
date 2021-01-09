<template>
    <router-link :to="{ name: 'product.detail', params: { id: product.id } }" class="product-list">
                <img :src="product.image[0].url" alt="description" />
                <h2>{{product.name}}</h2>
                <p>{{product.description}}</p>
                <h2>{{product.price}}</h2>
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
 }





</style>