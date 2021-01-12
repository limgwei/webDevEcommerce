<template class="History">
<div class="tablediv">
  <table>
    <tr class="tabletitle">
      <th>ID</th>
      <th>Address</th>
      <th>Total Price (RM)</th>
      <th>Date</th>
    </tr>
    <tr v-for="item in items" :key="item.id">
      <td class="tablecontent1">{{item.id}}</td>
      <td class="tablecontent2">{{item.address}}</td>
      <td class="tablecontent3">{{item.price | showPrice}}</td>
      <td class="tablecontent4">{{item.updated_date}}</td>
      <td><button class="historybtn" @click="jumpToDetail(item.id)">Detail</button></td>
    </tr>
  </table>
</div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'History',
  data() {
      return {
        thedetail: false,
        items: ""
      }
  },
  methods:{
    thedetailis(){
      this.thedetail=!this.thedetail
    },
    jumpToDetail(id){
      
     

          this.$router.push('/History/HistoryDetail/'+id)
        
    }
  },
  filters:{
    showPrice(price){
      return price.toFixed(2)
    }
  },
  created(){
   // console.log(localStorage.token);
      axios.get('http://127.0.0.1:8000/api/order/'+ localStorage.token ).then( data=>{

        this.items =data.data.data;
        console.log(this.items);
      })

  }
}
</script>

<style scoped>
.tablediv {
  margin-top: 10px;
  width: 80%;
  margin-left: 10%;
  padding: 5px;
  border: black solid 2px;
}
table {
  width: 100%;
  font-size: 14px;
}
.tabletitle{
  background: rgb(155, 218, 247);
}
table td,table th{
  border: 1px solid #ddd;
}
table tr:nth-child(even){background-color: rgb(230, 230, 230);}
table tr{background-color: white;}
.tablecontent1{
  width: 5%;
}
.tablecontent2{
  width: 55%;
}
.tablecontent3{
  width: 15%;
}
.tablecontent4{
  width: 15%;
}
.tablediv tr td {
  text-align: center;
}
.historybtn{
  border-color: aqua;
  outline: none;
  /* width: 68px; */
  width:100%;
}
.historybtn:hover{
  cursor: pointer;
  background-color: aqua;
  color: white;
}
</style>