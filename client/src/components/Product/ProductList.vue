<template>
    <router-link :to="{ name: 'product', params: { id: product.id } }" class="product-list">
                <img :src="product.img" alt="description" />
                <h2>Product</h2>
                <p>Description</p>
                <h2>Price</h2>
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
  align-items: center;
  display: flex;
  flex-direction: column;
  margin: 10px 5px;
  background: white;

    
  img{
      width: 220px;
      height: 220px;
  }
 }





</style>