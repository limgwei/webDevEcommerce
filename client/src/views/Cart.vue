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
       
       
        <td class="tablecontent">{{item.product.name}}</td>

        <td class="tablecontent">{{item.product.price | showPrice}}</td>
        <td class="tablecontentquantity">
          <button class="quantitybtn" @click="decrement(index)" v-bind:disabled="item.quantity<=1">-</button>
          <p class="quantitynumber">{{item.quantity}}</p>
          <button class="quantitybtn" @click="increment(index)">+</button>
        </td>
        <td class="tablecontent">{{totalprice(item.quantity,item.product.price) | showPrice}}</td>
        <td><button class="cartactionsbtn" @click="removehandle(index)">Delete</button></td>
      </tr>
        
    </table>

    <div class="comanddiv">
      <p><strong>COMAND HERE</strong></p>
      <textarea v-model="comment"></textarea>
    </div>
    <div class="addressdiv">
      <p>Address</p>
      <input type="text" v-model="address">
    </div>

    <div class="buydiv" v-if="items.length">
      <label class="buylabel">Total Price (Now) :</label>
      <strong class="buytotal">RM {{buytotalfun | showPrice}}</strong>
      <label class="buylabel">Delivery charges :</label>
      <strong class="buytotal">RM {{delivery_charge| showPrice}}</strong>
      <button class="buybtn" @click="buy()">Buy</button>
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
      items: "",
      buytotal:0,
      delivery_charge:4,
      address:"",
      orderItems:[],
      comment:""
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
    totalprice(quantity,price){
      
      return quantity*price
    },

    buy(){
      //var orderItems = [];
      for(let i = 0;i<this.items.length;i++){
        
        let orderItem = Object;
        orderItem.order_name = this.items[i].product.name;
        orderItem.current_price = this.items[i].product.price;
        orderItem.quantity = this.items[i].quantity;
        var copy = Object.assign({}, orderItem);
        this.orderItems.push(copy);
      }

      axios.post('http://localhost:8000/api/order/'+localStorage.token,{
          price:this.buytotal,
          delivery_charge:this.delivery_charge,
          address:this.address,
          comment:this.comment,
          orderItems:this.orderItems
        })
 
    
    },
    
    changes(amount){
      this.buytotal=amount;
    },
  },
  computed:{
    buytotalfun(){
      var amount = 0;
      for (let i=0;i<this.items.length;i++){
       amount += (this.items[i].quantity*this.items[i].product.price)
      }
      this.changes(amount);
      return this.buytotal
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

        this.items =data.data.data;
        
        this.address = this.$store.state.user.address;
       
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
.comanddiv{
  margin-top: 90px;
}
.addressdiv{
  margin-top: 5px;
}
.buydiv{
  margin-top: 10px;
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