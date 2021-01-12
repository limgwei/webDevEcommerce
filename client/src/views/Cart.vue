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
          <button class="quantitybtn" @click="increment(index)" v-bind:disabled="item.quantity==item.product.quantity">+</button>
        </td>
        <td class="tablecontent">{{totalprice(item.quantity,item.product.price) | showPrice}}</td>
        <td><button class="cartactionsbtn" @click="removehandle(item.id)">Delete</button></td>
      </tr>
        
    </table>

    <div class="buydiv" v-if="items.length">
      <div class="comanddiv">
        <p><strong>COMAND HERE</strong></p>
        <textarea v-model="comment"></textarea>
      </div>
      <div class="addressdiv">
        <p>Address</p>
        <textarea v-model="address"></textarea>
      </div>

      <label class="buylabel">Total Price (Now) :</label>
      <strong class="buytotal">RM {{buytotalfun | showPrice}}</strong>
      <label class="buylabel">Delivery charges :</label>
      <strong class="buytotal">RM {{delivery_charge | showPrice}}</strong>
      <!-- <button class="buybtn" @click="showmodel()">Buy</button> -->
      <button class="buybtn" @click="buy()">Buy</button>

    <!-- <div class="modal-backdrop" v-show="cardpaymodel">
      <div class="buycarddiv">
        <img class="cardpicture" src="../assets/card.png"/>
        <div class="buycarddiv-up">
          <div>
            <input class="modelinput" v-model="cardnumber" placeholder="Card Number" type="number">
          </div>
          <div>
            <input class="modelinput" v-model="cardmonth" placeholder="Month" type="number">
          </div>
          <div>
            <input class="modelinput" v-model="cardyear" placeholder="Year" type="number">
          </div>
          <div>
            <input class="modelinput" v-model="cardcvc" placeholder="Card CVC" type="number">
          </div>
        </div>
        <div class="buycarddiv-down">
          <center>
            <button class="modelbtn" @click="closemodel()">Cancel</button>
            <button class="modelbtn" @click="stripe()">Pay</button>
          </center>
        </div>
      </div>
    </div> -->

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
      comment:"",
      // cardpaymodel:false,
      // cardnumber:"",
      // cardyear:"",
      // cardcvc:"",
      // cardmonth:"",
      card:[],
      // pk:"",
      // sk:""
    }
  },
  methods: {
    increment(index){
      this.items[index].quantity++
    },
    decrement(index){
      this.items[index].quantity--
    },
    removehandle(id){
      console.log(id);
      axios.delete('http://127.0.0.1:8000/api/cart/'+id)
      .then(response=>
      {console.log(response);
      window.location.reload(true);
      });

    },
    totalprice(quantity,price){
      
      return quantity*price
    },
    showmodel(){
      this.cardpaymodel = true
    },
    closemodel(){
      this.cardpaymodel = false
    },
    // stripe(){
    
    //     this.card['number'] = this.cardnumber;
    //     this.card['exp_month'] = this.cardmonth;
    //     this.card['year'] = this.cardyear;
    //     this.card['cvc'] = this.cardcvc;
    //       axios.get('http://localhost:8000/api/order/stripeKey').then(data=>{
    //         console.log(data);
    //       })
    //     //   axios.post('http://api.stripe.com/v1/tokens',{
    //     //     card:this.card
    //     // }).then(data=>{
    //     //     console.log(data);
    //     // })  
    // },
    buy(){
      //var orderItems = [];
      for(let i = 0;i<this.items.length;i++){
        
        let orderItem = Object;
        orderItem.product_id = this.items[i].product.id;
        orderItem.order_name = this.items[i].product.name;
        orderItem.current_price = this.items[i].product.price;
        orderItem.quantity = this.items[i].quantity;
        orderItem.cartId = this.items[i].id;
        var copy = Object.assign({}, orderItem);
        this.orderItems.push(copy);
      }

      axios.post('http://localhost:8000/api/order/'+localStorage.token,{
          price:this.buytotal,
          delivery_charge:this.delivery_charge,
          address:this.address,
          comment:this.comment,
          orderItems:this.orderItems
        }).then(data=>{
          console.log(data);
          this.$router.push({ name: 'Home' })
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
        console.log(this.items)
       
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
  background-color: white;
  /* box-shadow: 5px 10px; */
}
table td,table th{
  background-color: white;
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
.comanddiv textarea{
  width: 350px;
  height: 50px;
}
.addressdiv textarea{
  margin-top: 5px;
  width: 350px;
  height: 50px;
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
.modal-backdrop {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
}
.buycarddiv{
  width: 300px;
  height: 400px;
  bottom: 100px;
  position: fixed;
  z-index: 99;
  background: #eeeeee;
  box-shadow: 2px 2px 20px 1px;
  overflow-x: auto;
  flex-direction: column;
}
.modelinput{
  width: 80%;
  margin-left: 10%;
  font-size: 20px;
  margin-top: 10px;
  background-color: #eeeeee;
  border: 0;
  border-bottom: 1px solid;
}
.modelinput:focus{
  outline: none;
}
.modelbtn{
  width: 100px;
  padding: 5px;
  margin: 10px;
  margin-top: 15px;
  border-color: red;
  color: red;
}
.modelbtn:hover{
  cursor: pointer;
  color: white;
  background-color: red;
  border-color: red;
}
.cardpicture{
  width: 300px;
  height: 180px;
  margin-top: 10px;
}
</style>