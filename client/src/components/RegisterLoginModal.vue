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
            <h2 class="headertitle" v-show="goLogin">Login</h2>
            <h2 class="headertitle" v-show="goRegister">Register</h2>
              
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
            <br>
            <center><font-awesome-icon :icon="['fas','user']" class="usericon"/></center>
            <br>
            <div v-if="error" class="errordiv">Error:{{error}}</div>
            <div class="carddiv">
              <input type="email" v-model="logemail" placeholder="Email">
            </div>
            <div class="carddiv">
              <input type="password" v-model="logpassword" placeholder="Password">
            </div>
              <a href="#" class="forgetclass" @click="forget()">? Forget password</a>
          </div>

          <div v-show="goRegister" class="card">
            <div class="carddiv">
              <input type="text" v-model="regusername" placeholder="Username">
            </div>
            <div class="carddiv">
              <input :type="isPassType ?'password':'text' " v-model="regpassword" placeholder="Password">
              <button @click="changeType" class="iconbtn">
                <font-awesome-icon :icon="['fas','eye-slash']" v-if="isPassType"/>
                <font-awesome-icon :icon="['fas','eye']" v-else/>
              </button>
            </div>
            <div class="carddiv">
              <input type="password" v-model="regconpassword" placeholder="Confirm Password">
            </div>
            <div class="carddiv">
              <input type="email" v-model="regemail" placeholder="Email">
            </div>
            <div class="carddiv">
              <textarea v-model="regaddress" placeholder="Address"></textarea>
            </div>
          </div>
          
          </slot>
        </section>

        <footer class="modal-footer">
          <slot name="footer">
            <center>
            <button v-show="goLogin" @click="changeTitle" id="btntitle">
              Go to Register
            </button>
            <button v-show="goRegister" @click="changeTitle" id="btntitle">
              Go to Login
            </button>
            <!-- this is hr -->
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
        logpassword:"",
        error:""
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

         await axios.post('http://localhost:8000/api/login',{
          email:this.logemail,
          password:this.logpassword
        }).then(data=>{
          if(data.data=="email have not verified"){
            this.error = "Email have not verified";
          }
          else if(data.data=="you have been blocked"){
            this.error = "You have been blocked";
          }
          else{
        const user = data.data;
        console.log(data);
        this.$store.commit('setUser',user);
        console.log(this.$store.state.user);
        console.log(user.remember_token);
        localStorage.token = user.remember_token;
        console.log(localStorage.token);
        this.$emit('close');
          }
        }).catch(e=>{
             this.error = "Error email or password";
            console.log(e);
        })
        
        
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
            if(data.data=="email used"){
              alert("Email Used");
            }
            else{
              
            alert("Please go to gmail to verify your account");
             window.location.href="http://www.gmail.com";
            }
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
    background: #eeeeee;
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
    padding: 10px 0px;
    height: 260px;
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
    width: 110px;
    background-color: white;
  }
  .btnsubmit{
    margin-left: 15px;
  }
  .btnsubmit:hover , #btntitle:hover {
    color: white;
    background-color: aqua;
    border: aqua 1px solid;
    cursor: pointer;
  }

  .carddiv{
    width: 100%;
    margin: auto;
    display: flex;
  }
  .carddiv input{
    width: 60%;
    margin-left: 20%;
    margin-top: 10px;
    height: 30px;
    border: 0;
    background-color: #eeeeee;
    border-bottom: 1px solid;
  }
  .carddiv input:focus {
    outline: none;
  }
  .carddiv textarea{
    width: 60%;
    margin-left: 20%;
    margin-top: 10px;
    height: 70px;
    font-size: 14px;
    border: 0;
    background-color: #eeeeee;
    border-bottom: 1px solid;
  }
  .carddiv textarea:focus {
    outline: none;
  }
  .iconbtn{
    margin-top: 10px;
    height: 30px;
    border: 0;
  }
  .iconbtn:focus {
    outline: none;
  }
  .forgetclass{
    text-decoration: none;
    margin-left: 20%;
    font-size: 13px;
  }
  .headertitle{
    font-size: 30px;
    margin: auto;
  }
  .usericon{
    font-size: 80px;
  }
  .errordiv{
    margin-left: 20%;
    color: red;
  }
</style>