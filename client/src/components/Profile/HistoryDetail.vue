<template class="HistoryDetail">
<div>
  <h2>ID: {{ID}}</h2>
  <table>
    <tr class="tabletitle">
      <th></th>
      <th>Product Name</th>
      <th>Unit</th>
      <th>Unit Price (RM)</th>
      <th>Total Price (RM)</th>
    </tr>
    <tr v-for="(item, index) in items" :key="item.index">
      <td class="tablecontent1">{{index+1}}</td>
      <td class="tablecontent2">{{item.name}}</td>
      <td class="tablecontent3">{{item.unit}}</td>
      <td class="tablecontent3">{{item.unitprice | showPrice}}</td>
      <td class="tablecontent3">{{totalprice(index) | showPrice}}</td>
    </tr>
  </table>
</div>
</template>

<script>
export default {
  name: 'HistoryDetail',
  
  data() {
      return {
        ID:53888,
        items: [
          { name: 'sofa(yellow)', unit: 5, unitprice: 80.40},
          { name: 'sofa(black)', unit: 4, unitprice: 80},
          { name: 'sofa(red)', unit: 3, unitprice: 81.70},
          { name: 'sofa(blue)', unit: 2, unitprice: 100}
        ]
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
  }
}
</script>

<style scoped>
table {
  width: 100%;
  font-size: 14px;
}
.tabletitle{
  background: rgb(155, 218, 247);
}
.tablecontent1{
  width: 5%;
}
.tablecontent2{
  width: 35%;
}
.tablecontent3{
  width: 20%;
}
.tablediv tr td {
  text-align: center;
}
</style>