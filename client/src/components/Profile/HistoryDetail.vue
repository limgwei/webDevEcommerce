<template class="HistoryDetail">
<div class="main">
  <table class="table1">
    <tr>
      <th class="infotable">Receipt: </th>
      <td class="infotable">{{ID}}</td>
    </tr>
    <tr>
      <th class="infotable">Date: </th>
      <td class="infotable">{{createDate}}</td>
    </tr>
    <tr>
      <th class="infotable">Address: </th>
      <td class="infotable">{{address}}</td>
    </tr>
  </table>
  <table class="table2">
    <tr class="tabletitle">
      <th class="tablecontent1">No</th>
      <th class="tablecontent2">Order Name</th>
      <th class="tablecontent3">Quantity</th>
      <th class="tablecontent4">Current Price (RM)</th>
      <th class="tablecontent4">Total Price (RM)</th>
    </tr>
    <tr v-for="(item, index) in items" :key="item.index">
      <td class="tablecontent1">{{index+1}}</td>
      <td>{{item.order_name}}</td>
      <td class="tablecontent3">{{item.quantity}}</td>
      <td class="tablecontent3">{{item.current_price | showPrice}}</td>
      <td class="tablecontent3">{{currenttotalprice(index) | showPrice}}</td>
    </tr>
    <tr>
      <td colspan="4" class="totaltable1"><strong>Total: (RM)</strong></td>
      <td class="totaltable2">{{totalfun() | showPrice}}</td>
    </tr>
  </table>
  <br><br>
  <a href="/History" style="text-decoration: none;"><button class="backbtn">Back</button></a>
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'HistoryDetail',
  
  data() {
      return {
        ID:"",
        createDate:"",
        items: "",
        totalprice:"",
        address:""
      }
  },
  filters:{
    showPrice(price){
      return price.toFixed(2)
    }
  },
  methods:{
    currenttotalprice(index){
      this.totalprice=this.items[index].quantity*this.items[index].current_price
      return this.totalprice
    },
    totalfun(){
      var amount = 0
      for (let i=0;i<this.items.length;i++){
       amount += (this.items[i].quantity*this.items[i].current_price)
      }
      return amount
    }
  },
  created(){
     
      axios.get('http://127.0.0.1:8000/api/order/orderItems/'+ this.$route.params.id ).then( data=>{
        
         this.items =data.data;
         this.ID = this.items[0].receipt;
         this.createDate = this.items[0].updated_date;
        this.address = this.items[0].address;
      })
  }
}
</script>

<style scoped>
.main{
  margin-left: 15%;
  margin-top: 15px;
}
.table1 {
  font-size: 14px;
}
.infotable{
  text-align: left;
}
.table2 {
  width: 80%;
  font-size: 14px;
}
.tabletitle{
  background: rgb(155, 218, 247);
}
.tablecontent1{
  width: 5%;
  text-align: center;
}
.tablecontent2{
  width: 45%;
}
.tablecontent3{
  width: 10%;
  text-align: center;
}
.tablecontent4{
  width: 20%;
  text-align: center;
}
.totaltable1{
  text-align: right;
}
.totaltable2{
  text-align: center;
  border-top: 1.5px solid rgb(155, 218, 247);
  border-bottom: 1px solid rgb(155, 218, 247);
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