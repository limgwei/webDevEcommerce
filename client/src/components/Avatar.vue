<template>
  <div class="Avatar">

    <img v-if="imgavatar!=''" :src="imgavatar">

    <img v-else src="../assets/user.png">

  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Avatar',
  data () {
    return{
      imgavatar:""
    }
  },
  created(){
    const id = this.$store.state.user.id;
    axios.get('http://localhost:8000/api/user/' +id).then( data=>{
      this.imgavatar =data.data.data[0].image[0].url;
      console.log(data.data.data[0].image[0].url);
    })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.Avatar{
  width: 100%;
  height: 100%;
}
.Avatar img{
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
/* .noregister{
  background-color: white;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
.noregistericon{
  font-size: 100%;
} */
</style>