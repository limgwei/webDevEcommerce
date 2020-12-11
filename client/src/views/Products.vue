<template>
  <div class="products">
    
      <ProductNav />
      <ProductFilter />
      <ProductList />
  </div>
</template>

<script>

import ProductFilter from '@/components/Product/ProductFilter.vue'
import ProductList from '@/components/Product/ProductList.vue'
import ProductNav from '@/components/Product/ProductNav.vue'

export default {
  name: 'Products',
  components:{
    ProductFilter,
    ProductList,
    ProductNav
  }
  
}
</script>