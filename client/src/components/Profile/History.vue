<template class="History">
<div class="tablediv">
  <table>
    <tr class="tabletitle">
      <th>ID</th>
      <th>Date</th>
      <th>Total Price (RM)</th>
    </tr>
    <tr v-for="item in items" :key="item.id">
      <td class="tablecontent">{{item.ID}}</td>
      <td class="tablecontent">{{item.Date}}</td>
      <td class="tablecontent">{{item.TotalPrice}}</td>
      <td><button class="historybtn"><router-link :to="{name:'History.Detail',params:{id:item.ID }}">Detail</router-link></button></td>
    </tr>
  </table>
</div>
</template>

<script>
export default {
  name: 'History',
  data() {
      return {
        thedetail: false,
        items: [
          { ID: 53184, Date: '1 December 2020', TotalPrice: '38.40' },
          { ID: 54835, Date: '8 December 2020', TotalPrice: '138.40' },
          { ID: 54930, Date: '18 January 2020', TotalPrice: '58.40' },
          { ID: 55184, Date: '30 January 2020', TotalPrice: '88.40' }
        ]
      }
  },
  methods:{
    thedetailis(){
      this.thedetail=!this.thedetail
    }
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
.tablecontent{
  width: 28%;
}
.tablediv tr td {
  text-align: center;
}
.historybtn{
  border-color: aqua;
  outline: none;
  width: 90%;
  margin: auto;
}
.historybtn:hover{
  cursor: pointer;
  background-color: aqua;
  color: white;
}
</style>