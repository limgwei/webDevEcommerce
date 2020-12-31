<template>
  <transition name="modal-fade">
    <div class="modal-backdrop">
      <div class="RegisterLoginModal"
        role="dialog"
        aria-labelledby="modalTitle"
        aria-describedby="modalDescription"
      >
        <header
          class="modal-header"
          id="modalTitle"
        >
          <slot name="header">
            <button v-show="goLogin" @click="changeTitle" id="btntitle">
              Go to Login
            </button>
            <button v-show="goRegister" @click="changeTitle" id="btntitle">
              Go to Register
            </button>
            <button
              type="button"
              class="btn-close"
              @click="close"
              aria-label="Close modal"
            >
              x
            </button>
          </slot>
        </header>

        <section
          class="modal-body"
          id="modalDescription"
        >
          <slot name="body">
          <div v-show="goLogin" class="card">
            <div class="carddiv">
              <label class="labelclasslogin">Username: </label>
              <input type="text">
            </div>
            <div class="carddiv">
              <label class="labelclasslogin">Password: </label>
              <input type="password">
            </div>
          </div>

          <div v-show="goRegister" class="card">
            <div class="carddiv">
              <label class="labelclass">Username: </label>
              <input type="text">
            </div>
            <div class="carddiv">
              <label class="labelclass">Password: </label>
              <input :type="isPassType ?'password':'text' ">
              <button @click="changeType">
                <font-awesome-icon :icon="['fas','eye-slash']" v-if="isPassType"/>
                <font-awesome-icon :icon="['fas','eye']" v-else/>
              </button>
            </div>
            <div class="carddiv">
              <label class="labelclass">Email: </label>
              <input type="email">
            </div>
            <div class="carddiv">
              <label class="labelclass">Phone Number: </label>
              <input type="number">
            </div>
          </div>
          
          </slot>
        </section>

        <footer class="modal-footer">
          <slot name="footer">
            <center>
            <button
              type="button"
              class="btnsubmit"
              @click="close"
              aria-label="Close modal"
              v-show="goLogin"
            >
              Login
            </button>

            <button
              type="button"
              class="btnsubmit"
              @click="register()"
              aria-label="Close modal"
              v-show="goRegister"
            >
              Register
            </button>
          </center>
          </slot>
        </footer>
      </div>
    </div>
  </transition>
</template>

<script>
import axious from 'axios';
  
  export default {
    name: 'RegisterLoginModal',
    data(){
      return{
        goLogin: true,
        goRegister: false,
        isPassType:true
      }
    },
    methods: {
      close() {
        this.$emit('close');
      },
      changeTitle(){
        this.goLogin=!this.goLogin;
        this.goRegister=!this.goRegister;
      },
      changeType() {
        this.isPassType = !this.isPassType;
      },
      register(){
        axious.post('http://127.0.0.1:8000/api/register',{
        name:'gg',
        email:'liqi@gmail.com',
        address:'gg',
        password:'yeah',
        password_confirmation:'yeah'
        })
        
      
      }
    },
  }
</script>

<style scoped>
  .modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .RegisterLoginModal {
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    flex-direction: column;
    width: 400px;
    height: auto;
  }

  .modal-header,
  .modal-footer {
    padding: 15px;
  }

  .modal-header {
    border-bottom: 1px solid #eeeeee;
    justify-content: space-between;
    display: flex;
  }

  .modal-footer {
    border-top: 1px solid #eeeeee;
    justify-content: flex-end;
  }

  .modal-body {
    position: relative;
    padding: 20px 10px;
  }

  .btn-close {
    text-align: center;
    font-size: 24px;
    cursor: pointer;
    font-weight: bold;
    background: transparent;
    outline: none;
    border: none;
    color: green;
    margin-bottom: 10px;
  }
  .btn-close:hover{
    color: red;
  }

  .btnsubmit , #btntitle{
    color: aqua;
    border: aqua 1px solid;
    outline: none;
    padding: 10px;
  }
  .btnsubmit:hover , #btntitle:hover {
    color: white;
    background-color: aqua;
    border: aqua 1px solid;
    cursor: pointer;
  }

  .carddiv{
    width: 100%;
    margin: 10px 0;
    display: flex;
  }
  .labelclasslogin{
    width: 120px;
    font-weight: bold;
    margin-left: 11%;
  }
  .labelclass{
    width: 120px;
    font-weight: bold;
    margin-left: 10%;
  }
</style>