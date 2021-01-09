<template>
  <div id="app">
    <Navbar />
    <Header />
    <router-view/>
  </div>
</template>
// <script>
// import axious from 'axios'
import Header from '@/components/Header.vue'
import Navbar from '@/components/Navbar.vue'
export default {
  name: 'App',
  components:{
    Header,
    Navbar
  }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

  $icon-grey-1: #c9c9c9;

  *{
    padding: 0;
    margin: 0;
   box-sizing: border-box;
  }
  html{
    font-size: 62.5%;
  }
  body{
    font-family: 'Nunito', sans-serif;
    background-color: rgb(247, 247, 247);
  }

  .container{
    max-width: 1140px;
    margin: 0 auto;
  }
  .small-icon{
      font-size: 2.3rem;
      color: $icon-grey-1;
      margin: 2rem;
      cursor: pointer;
      &:hover{
        color: darken($icon-grey-1,15%);
      }
  }

  .static-icon{
    font-size: 2.5rem;
    color: $icon-grey-1;
    padding: 0 1rem;
  }

  .btn{
    padding: .5rem;
    background: none;
    border: rgb(100, 100, 100) solid 0.1rem;
    border-radius: 20px;
    &:hover{
      background: rgb(235, 235, 235);
      border: rgb(0,0,0) solid 0.1rem;
    }

  }
  
</style>
