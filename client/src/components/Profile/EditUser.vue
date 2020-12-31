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
          <td class="texttd"><input type="text" disabled></td>
          <td><button>Edit</button></td>
        </tr>

        <tr>
          <th><label>Password:</label></th>
          <td class="texttd"><input type="password" disabled></td>
          <td><button>Edit</button></td>
        </tr>

        <tr>
          <th><label>Email:</label></th>
          <td class="texttd"><input type="email" disabled></td>
          <td></td>
        </tr>

        <tr>
          <th><label>Phone Number:</label></th>
          <td class="texttd"><input type="number" disabled></td>
          <td><button>Edit</button></td>
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
    Avatar
  },
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