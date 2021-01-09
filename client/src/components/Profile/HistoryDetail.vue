<template class="HistoryDetail">
<div class="main">
  <h2>ID: {{ID}}</h2>
  <table>
    <tr class="tabletitle">
      <th class="tablecontent1">No</th>
      <th class="tablecontent2">Order Name</th>
      <th class="tablecontent3">Quantity</th>
      <th class="tablecontent3">Current Price (RM)</th>
    </tr>
    <tr v-for="(item, index) in items" :key="item.index">
      <td class="tablecontent1">{{index+1}}</td>
      <td>{{item.order_name}}</td>
      <td class="tablecontent3">{{item.quantity}}</td>
      <td class="tablecontent3">{{item.current_price | showPrice}}</td>
    </tr>
  </table>
  <br><br>
  <router-link to="/Profile/History" style="text-decoration: none;"><button class="backbtn">Back</button></router-link>
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'HistoryDetail',
  
  data() {
      return {
        ID:"",
        items: ""
      }
  },
  filters:{
    showPrice(price){
      return price.toFixed(2)
    }
  },
  methods:{
    totalprice(index){
      this.items[index].totalprice=this.items[index].unit*this.items[index].unitprice
      return this.items[index].totalprice
    }
  },
  created(){
     
      axios.get('http://127.0.0.1:8000/api/order/orderItems/'+ this.$route.params.id ).then( data=>{

        this.items =data.data.data;
        this.ID = this.$route.params.id;
        console.log(this.items);
      })
  }
}
</script>

<style scoped>
.main{
  margin-left: 20%;
  margin-top: 15px;
}
table {
  width: 80%;
  font-size: 14px;
}
.tabletitle{
  background: rgb(155, 218, 247);
}
.tablecontent1{
  width: 10%;
  text-align: center;
}
.tablecontent2{
  width: 50%;
}
.tablecontent3{
  width: 20%;
  text-align: center;
}
.tablediv tr td {
  text-align: center;
}
.backbtn{
  width: 80px;
  border-color: aqua;
  outline: none;
}
.backbtn:hover{
  cursor: pointer;
  background-color: aqua;
  color: white;
}
</style>