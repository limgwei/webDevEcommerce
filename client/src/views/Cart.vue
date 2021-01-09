<template>
  <div class="Cart">
    <table>
      <tr>
        <th class="tablesize1">Product</th>
        <th class="tablesize2">Unit Price (RM)</th>
        <th class="tablesize3">Quantity</th>
        <th class="tablesize2">Total Price (RM)</th>
        <th class="tablesize3">Actions</th>
      </tr>

      <tr v-for="(item, index) in items" :key="item.id">
        <td class="tablecontent">{{item.product}}</td>
        <td class="tablecontent">{{item.unitprice | showPrice}}</td>
        <td class="tablecontentquantity">
          <button class="quantitybtn" @click="decrement(index)" v-bind:disabled="item.quantity<=1">-</button>
          <p class="quantitynumber">{{item.quantity}}</p>
          <button class="quantitybtn" @click="increment(index)">+</button>
        </td>
        <td class="tablecontent">{{totalprice(index) | showPrice}}</td>
        <td><button class="cartactionsbtn" @click="removehandle(index)">Delete</button></td>
      </tr>

    </table>

    <div class="buydiv" v-if="items.length">
      <label class="buylabel">Total Price (Now) :</label>
      <strong class="buytotal">RM {{buytotal | showPrice}}</strong>
      <button class="buybtn">Buy</button>
    </div>
    <div v-else>
      <p class="emptyshow">Your cart is empty. <a href="/products">Go to buy.</a></p>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  name: 'Cart',
  data() {
    return {
      items: [
        {product:'Bed',unitprice:135,quantity:1,totalprice:0},
        {product:'Sofa',unitprice:100.55,quantity:1,totalprice:0},
        {product:'Knife',unitprice:28,quantity:1,totalprice:0}
      ],
      items2:""
    }
  },
  methods: {
    increment(index){
      this.items[index].quantity++
    },
    decrement(index){
      this.items[index].quantity--
    },
    removehandle(index){
      this.items.splice(index, 1)
    },
    totalprice(index){
      this.items[index].totalprice=this.items[index].quantity*this.items[index].unitprice
      return this.items[index].totalprice
    }
  },
  computed:{
    buytotal(){
      let buytotal=0
      for (let i=0;i<this.items.length;i++){
        buytotal+=this.items[i].totalprice
      }
      return buytotal
    }
  },
  filters:{
    showPrice(price){
      return price.toFixed(2)
    }
  },
  created(){
   // console.log(localStorage.token);
      axios.get('http://127.0.0.1:8000/api/cart/'+ localStorage.token ).then( data=>{

          // items: [
          //   {product:'Bed',unitprice:135,quantity:1,totalprice:0},
          //   {product:'Sofa',unitprice:100.55,quantity:1,totalprice:0},
          //   {product:'Knife',unitprice:28,quantity:1,totalprice:0}
          // ]
        this.items2 =data.data;
        console.log(this.items2);
      })
    
  }
}
</script>

<style scoped>
.Cart{
  margin-top: 10px;
  width: 90%;
  margin-left: 5%;
}
table{
  width: 100%;
  font-size: 14px;
}
table th{
  text-align: center;
  background-color: rgb(155, 218, 247);
}
.cartactionsbtn{
  border-color: aqua;
  outline: none;
  width: 100%;
}
.cartactionsbtn:hover{
  cursor: pointer;
  background-color: aqua;
  color: white;
}

.tablesize1{
  width: 30%;
}
.tablesize2{
  width: 18.5%;
}
.tablesize3{
  width: 16.5%;
}
.tablecontent{
  text-align: center;
}
.tablecontentquantity{
  text-align: center;
}

.buydiv{
  margin-top: 100px;
  width: 100%;
}
.emptyshow{
  margin-top: 10px;
  width: 100%;
  font-size: 14px;
}
.buylabel{
  display: inline-block;
  width: 100px;
}
.buytotal{
  display: inline-block;
  width: 80px;
  text-align: center;
}
.buybtn{
  border-color: red;
  color: red;
  outline: none;
  width: 100px;
  height: 30px;
  border-radius: 10px;
}
.buybtn:hover{
  cursor: pointer;
  background-color: red;
  color: white;
}
.quantitybtn{
  width: 30%;
  display: inline-block;
}
.quantitynumber{
  width: 40%;
  display: inline-block;
}
</style>