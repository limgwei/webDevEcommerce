<template>
  <div class="header">
    <header>
      
        <div class="container"> 
            <!-- <router-link to="/"> -->
              <!-- <font-awesome-icon :icon="['fas','home']" class="home-icon"/> -->
              <!-- <img src="../assets/logo.png" alt="logo" class="logo"> -->
            <!-- </router-link> -->

            <!-- check token(if true go to profile) -->
            <button v-if="emptyUser"  @click="showModal" class="avatarbtn">
                <Avatar />
            </button>

            <div v-else class="dropdown avatarbtn">
                <Avatar />

              <div class="dropdown-content">
                <a href="/Edit">Edit Profile</a>
                <a href="/History">History</a>
                <a href="#" @click="logout">Logout</a>
              </div>
            </div>
            <RegisterLoginModal v-show="isModalVisible" @close="closeModal" class="modal"/>

            
            
            <!-- check token(if false go to login) -->
              <font-awesome-icon v-if="emptyUser"  @click="showModal" :icon="['fas','shopping-cart']" class="small-icon" />
            <router-link to="/cart" v-else>
              <font-awesome-icon :icon="['fas','shopping-cart']" class="small-icon" />
            </router-link>
  
        </div>
    </header>
  </div>
</template>

<script>
import Avatar from './Avatar';
import RegisterLoginModal from './RegisterLoginModal';
import { mapGetters } from 'vuex'

export default {
  name: 'Header',
  components:{
    Avatar,
    RegisterLoginModal
  },
  data () {
      return {
        isModalVisible: false,
      }
  },
  created:function(){
        this.$store.commit('setUser',{});
        localStorage.token = "";
        this.$router.push('/');
  },
  computed: {
    ...mapGetters(['getUser']),
    emptyUser() {
      return Object.keys(this.getUser).length === 0;
    }
  },
  methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      },
      logout(){
        this.$store.commit('setUser',{});
        localStorage.token = "";
        this.$router.push('/');
      }
  },

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  header{
    box-shadow: 0 .1rem .5rem rgb(155, 155, 155);
    background: #424242;
    // background-image:linear-gradient(135deg,rgb(155, 155, 155),rgb(204, 204, 204),rgb(235, 233, 233));
  }

  .container{
    display: flex;
    justify-content: flex-end;
    padding-top: 1.8rem;
  }
  .avatarbtn{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 0;
    margin: auto 0 auto auto;
  }
  .avatarbtn:focus{
    outline: 0;
  }

.modal{
  position: fixed;
  z-index: 99;
}

.dropdown {
  position: relative;
  display: inline-block;
  z-index: 99;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

// .home-icon{
//   color: white;
//   font-size: 48px;
//   margin-left: 10px;
// }
// .home-icon:hover{
//   color: #000;
// }

</style>