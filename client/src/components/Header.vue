<template>
  <div class="header">
    <header>
        <div class="container">
            <img src="../assets/logo.png" alt="logo" class="logo">

            <!-- check token(if true go to profile) -->
            <button v-if="emptyUser"  @click="showModal" class="avatarbtn">
                <Avatar />
            </button>
            <button v-else class="avatarbtn">
              <router-link to="/Profile" style="text-decoration:none">
                <Avatar />
              </router-link>
            </button>
            <RegisterLoginModal v-show="isModalVisible" @close="closeModal" class="modal"/>

            
            
            <!-- check token(if false go to login) -->
            <router-link to="/cart"><font-awesome-icon :icon="['fas','shopping-cart']" class="small-icon" /></router-link>
  
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
  },data () {
      return {
        isModalVisible: false,
      }
  },
  computed: {
    ...mapGetters(['getUser']),
    emptyUser() {
      return Object.keys(this.getUser).length === 0 && this.getUser.constructor === Object
    }
  },
  methods: {
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      }
  },
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
  .avatarbtn{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid red;
    outline: 0!important;
    margin: auto 0 auto auto;
  }

.avatarbtntext{
  width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 1px solid red;
    outline: 0!important;
    margin: auto 0 auto auto;
}
.avatarbtntext:hover{
  cursor: pointer;
}
.modal{
  position: fixed;
  z-index: 99;
}
  


</style>