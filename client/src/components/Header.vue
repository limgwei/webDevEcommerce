<template>
  <div class="header">
    <header>
        <div class="container">
            <img src="../assets/logo.png" alt="logo" class="logo">

            <font-awesome-icon :icon="['fas','user']" class="small-icon"/>
            <font-awesome-icon :icon="['fas','shopping-cart']" class="small-icon" />
  
        </div>
    </header>
  </div>
</template>

<script>


export default {
  name: 'Header',
  components:{
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  header{
    box-shadow: 0 .1rem .5rem rgb(228, 228, 228);
  }

  .container{
    display: flex;
    justify-content: flex-end;
    padding-top: 4rem;

    .logo{
      margin-right: auto;
      margin-left: 7rem;
      height: 6rem;
      width: auto;
    }
  }

  


</style>