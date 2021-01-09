<template>
  <div class="Profile">

    <div class="navbar">
      <ul>
        <li>
          <router-link to="/Profile/Edit" class="sidefont">Edit Profile</router-link>
        </li>
        <li>
          <router-link to="/Profile/History" class="sidefont">History</router-link>
        </li>
        <li><p class="sidefont" @click="logout">Logout</p></li>
      </ul>
    </div>

    <div class="main">
      <router-view/>
    </div>

  </div>
</template>

<script>
// @ is an alias to /src

export default {

  name: 'Profile',
  methods:{
    logout(){
      this.$store.commit('setUser',{});
      localStorage.token = "";
      this.$router.push('/');
    }
  }
 
}
</script>

<style scoped>
.navbar{
  margin-top: 8px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li .sidefont {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}

li .sidefont:hover {
  background-color: #111;
  cursor: pointer;
}
</style>