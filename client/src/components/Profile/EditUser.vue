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
            <button v-else @click="setdisable(2);savepassword()">Save</button>
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

      editusername:"gwei",
      editpassword:"loh",
      editemail:"liqi",
      editaddress:"yuanxuan"
    }
  },
  // created(){
  //   axious.get('http://127.0.0.1:8000/api/register').then( data=>{
  //     this.editusername =data.data;
  //     this.editpassword="loh",
  //     this.editemail="loh",
  //     this.editaddress="loh",
  //   })
  // },
  methods:{
    setdisable(num){
      if(num==1){
        this.isdisable1=!this.isdisable1
        console.log(this.editusername)
      }
      else if(num==2){
        this.isdisable2=!this.isdisable2
        console.log(this.editpassword)
      }
      else if(num==3){
        this.isdisable3=!this.isdisable3
        console.log(this.editaddress)
      }
    },
    saveusername(){
      console.log(this.editusername+' this is the save btn1')
      // axious.get('http://127.0.0.1:8000/api/register').then( data=>{
      //   data.name = this.editusername;
      // })
    },
    savepassword(){
      console.log(this.editpassword+' this is the save btn2')
      // axious.get('http://127.0.0.1:8000/api/register').then( data=>{
      //   data.password = this.editpassword;
      // })
    },
    saveaddress(){
      console.log(this.editaddress+' this is the save btn3')
      // axious.get('http://127.0.0.1:8000/api/register').then( data=>{
      //   data.address = this.editaddress;
      // })
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