<template>
  <div class="Avatar">

    <div v-if="imgavatar!=null" class=""><img :src="imgavatar[0]"></div>
    <p v-else class="noregisterimg">登录</p>

  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Avatar',
  data () {
    return{
      imgavatar:[]
    }
  },
  created(){
    axios.get('http://localhost:8000/api/user/'+localStorage.token ).then( data=>{
      this.imgavatar[0] =data.data.data;
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.Avatar{
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
.noregisterimg{
  color: red;
  text-align: center;
}
</style>