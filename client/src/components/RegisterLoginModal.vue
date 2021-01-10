<template>
  <transition name="modal-fade">
    <div class="modal-backdrop">
      <div  class="RegisterLoginModal"
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
              <label class="labelclasslogin">Email: </label>
              <input type="email" v-model="logemail">
            </div>
            <div class="carddiv">
              <label class="labelclasslogin">Password: </label>
              <input type="password" v-model="logpassword">
            </div>
              <a href="#" class="forgetclass" @click="forget()">? Forget password</a>
          </div>

          <div v-show="goRegister" class="card">
            <div class="carddiv">
              <label class="labelclass">Username: </label>
              <input type="text" v-model="regusername">
            </div>
            <div class="carddiv">
              <label class="labelclass">Password: </label>
              <input :type="isPassType ?'password':'text' " v-model="regpassword">
              <button @click="changeType">
                <font-awesome-icon :icon="['fas','eye-slash']" v-if="isPassType"/>
                <font-awesome-icon :icon="['fas','eye']" v-else/>
              </button>
            </div>
            <div class="carddiv">
              <label class="labelclass">Confirm Password: </label>
              <input type="password" v-model="regconpassword">
            </div>
            <div class="carddiv">
              <label class="labelclass">Email: </label>
              <input type="email" v-model="regemail">
            </div>
            <div class="carddiv">
              <label class="labelclass">Address: </label>
              <textarea v-model="regaddress"></textarea>
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
              @click="login()"
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
import axios from 'axios';
  
  export default {
    name: 'RegisterLoginModal',
    data(){
      return{
        goLogin: true,
        goRegister: false,
        isPassType:true,
        regusername:"",
        regpassword:"",
        regconpassword:"",
        regemail:"",
        regaddress:"",
        logemail:"",
        logpassword:""
      }
    },
    methods: {
      close() {
        this.$emit('close');
      },
      forget(){
        if(this.logemail!=""){
          axios.post('http://localhost:8000/api/password/email',{
          email:this.logemail,
          }).then(data=>{
            console.log(data);
            alert("Please go to gmail to reset your password")
            window.location="http://www.gmail.com";
          })
        }
        else{
          alert("Please insert your gmail")
        }
      },
      changeTitle(){
        this.goLogin=!this.goLogin;
        this.goRegister=!this.goRegister;
      },
      changeType() {
        this.isPassType = !this.isPassType;
      },
      async login(){

        const data = await axios.post('http://localhost:8000/api/login',{
          email:this.logemail,
          password:this.logpassword
        })
        const user = data.data;
        console.log(data);
        this.$store.commit('setUser',user);
        console.log(this.$store.state.user);
        console.log(user.remember_token);
        localStorage.token = user.remember_token;
        console.log(localStorage.token);
        this.$emit('close');
      },
      register(){
        if(this.regpassword==this.regconpassword){
          axios.post('http://127.0.0.1:8000/api/register',{
          name:this.regusername,
          email:this.regemail,
          address:this.regaddress,
          password:this.regpassword,
          password_confirmation:this.regconpassword
          }).then(data=>{
            console.log(data);
            console.log(this.regusername+' , '+this.regemail+' , '+this.regaddress+' , '+this.regpassword)
            alert("Please go to gmail to verify your account")
            window.location="http://www.gmail.com";
          })

        }
        else{
          alert("Your password not match, please try again")
          this.regconpassword=""
        }
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
  .forgetclass{
    text-decoration: none;
    margin-left: 11%;
  }
</style>