<template>
  <div class="EditUser">

    <div class="avatarbox">
      <Avatar class="avatar"/>
    </div>
    <br>
    <div>
      <center><button class="avatarBtnSet">Change Picture</button></center>
    </div>
    <br>

    <div class="info">
      <table>
        <tr>
          <th><label>Username:</label></th>
          <td class="texttd"><input type="text" v-model="editusername" :disabled="this.isdisable1"></td>
          <td>
            <button v-if="isdisable1" @click="setdisable(1)">Edit</button>
            <button v-else @click="setdisable(1);saveusername()">Save</button>
          </td>
        </tr>

        <tr>
          <th><label>Password:</label></th>
          <td class="texttd"><input type="password" v-model="editpassword" :disabled="this.isdisable2"></td>
          <td>
            <button v-if="isdisable2" @click="setdisable(2)">Edit</button>
            <button v-else @click="savepassword()">Save</button>
          </td>
        </tr>

        <tr>
          <th><label>Email:</label></th>
          <td class="texttd"><input type="email" v-model="editemail" disabled></td>
          <td></td>
        </tr>

        <tr>
          <th><label>Address:</label></th>
          <td class="texttd"><textarea v-model="editaddress" :disabled="this.isdisable3"></textarea></td>
          <td>
            <button v-if="isdisable3" @click="setdisable(3)">Edit</button>
            <button v-else @click="setdisable(3);saveaddress()">Save</button>
          </td>
        </tr>
      </table>
    </div>

    <br>
  </div>
</template>

<script>
import Avatar from '../Avatar';
import axios from 'axios';

export default {
  name: 'EditUser',
  components: {
    Avatar,
    
  },
  data() {
    return{
      isdisable1:true,
      isdisable2:true,
      isdisable3:true,

      editusername:"",
      editpassword:"",
      editemail:"",
      editaddress:""
    }
  },
  created(){
    const id = this.$store.state.user.id;
    axios.get(`http://127.0.0.1:8000/api/user/${id}`).then( data=>{
      const user =data.data.data[0];
      this.editusername = user.name;
      this.editaddress = user.address;
      this.editpassword =user.password;
      this.editemail = user.email;

    })
  },
  methods:{
    setdisable(num){
      if(num==1){
        this.isdisable1=false
      }
      else if(num==2){
        this.isdisable2=false
        this.editpassword =""
      }
      else if(num==3){
        this.isdisable3=false
      }
    },
    saveusername(){
      if(this.editusername!=""){
      this.isdisable1=true
      axios.put(`http://127.0.0.1:8000/api/user/`+localStorage.token, 
      {name:this.editusername}).then( data=>{
      console.log(data);
      });
      }
    },
    savepassword(){
      if(this.editpassword!=""){
      this.isdisable2=true
      axios.put(`http://127.0.0.1:8000/api/user/`+localStorage.token, {password:this.editpassword})
      .then( data=>{
      console.log(data);
      
      })

      }
    },
    saveaddress(){
      if(this.editaddress!=""){
      this.isdisable3=true
      axios.put(`http://127.0.0.1:8000/api/user/`+localStorage.token, {address:this.editaddress})
      .then( data=>{
      console.log(data);
      
      })

      }
    }
  }
}
</script>

<style scoped>
.EditUser{
  margin-top: 10px;
}
.avatarbox{
    width: 180px;
    height: 180px;
    border-radius: 50%;
    border: 5px solid red;
    margin: auto;
  }
  .avatarBtnSet{
    margin: auto;
    width: 130px;
    height: 30px;
    border-radius: 20%;
    border-color: aqua;
    outline: none;
  }
  .avatarBtnSet:hover{
    background-color: aqua;
    color: white;
    outline: blue;
    cursor: pointer;
  }
  table{
    border: 3px solid;
    border-radius: 10px;
    width: 80%;
    margin: auto;
    height: 250px;
  }
  th{
    font-size: 18px;
    width: 18%;
  }
  label{
    float: left;
    margin-left: 10%;
    text-align: left;
  }
  .texttd{
    width: 68%;
  }
  .texttd input{
    width: 85%;
    margin-left: 8%;
    height: 30px;
  }
  .texttd textarea{
    width: 85%;
    margin-left: 8%;
    height: 60px;
  }
  table tr td button{
    height: 30px;
    width: 100%;
    border-color: aqua;
    outline: none;
  }
  table tr td button:hover{
    cursor: pointer;
    background-color: aqua;
    color: white;
  }
</style>