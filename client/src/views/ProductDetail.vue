<template>
    <div class="product-detail">

        <div class="container">
            <div class="img-container">
                <img :src="product.image[0].url" alt="">
            </div>

            <div class="detail-container">
                <h2>{{product.name}}</h2> 
                <p>{{product.description}}</p>   
            </div>

            <div class="price-tag">
                    <h3 :class="{strike: product.current_price}">RM {{product.price}}</h3>
                    
                <span v-if="product.current_price">
                    <h3 class="discount">RM {{product.current_price}}</h3>
                </span>
                
                <p>In Stock {{product.quantity}}</p>
                <div class="input-group">

                    <font-awesome-icon 
                    @click="subQuantity"
                    :icon="['fas','minus']" 
                    class="small-icon" />
    
                    <span class="quantity">{{ quantity }}</span>
                    <font-awesome-icon 
                    @click="addQuantity"
                    :icon="['fas','plus']" 
                    class="small-icon" 
                    />
                    
                    <button v-if="emptyUser"  @click="showModal" class="btn btn-add"> Add To Cart</button>
                    <button v-else @click="clearQuantity(); addToCart()" :disabled="quantity ==0" class="btn btn-add"> Add To Cart</button>
            
                </div>
                
            </div>

            
        </div>
        
            <RegisterLoginModal v-show="isModalVisible" @close="closeModal" class="modal"/>

    </div>
</template> 


<script>

import RegisterLoginModal from '@/components/RegisterLoginModal';
import { mapGetters } from 'vuex'
import axios from 'axios'
export default {
    name: 'ProductDetail',
    components:{
    RegisterLoginModal
    },
    data(){
        return{
            product:'',
            quantity: 0,
            isModalVisible: false,
        }
    },
    computed: {
        ...mapGetters(['getUser']),
        emptyUser() {
            return Object.keys(this.getUser).length === 0;
        }
    },
    methods:{
              showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      },

        addQuantity(){
            if(this.quantity<this.product.quantity){
                    
                this.quantity++
            }
        },
        subQuantity(){
            if(this.quantity!=0){
                
                this.quantity--
            }
        },
        clearQuantity(){
        },

        addToCart(){
        axios.post('http://localhost:8000/api/cart/'+localStorage.token,{
            product_id :this.product.id,
            quantity :this.quantity
        })
        
            this.quantity =0

        }
        
    },
    // async mounted(){
    //     if (this.$route.params.id) {
    //         await this.APIHAHA(this.$route.params.id)
            
    //     } else {
    //         this.$router.go(-1)
    //         }
    // },
    created(){
        var id = this.$route.params.id;
        axios.get('http://127.0.0.1:8000/api/product/'+id).then( data=>{
        this.product = data.data.data[0];
        console.log(id);
        console.log(this.product);
        
      })
    }
}
</script>

<style lang="scss" scoped>
    .container{
        display: flex;
        justify-content: flex-start;
        padding-top: 7rem;
        img{
            width: 30vw;
        }

        .detail-container{
            padding: 3rem;
            width: 40%;
            h2{
                font-size: 300%;
            }

            p{
                font-size: 200% ;
            }
        }

        .price-tag{
            width: 20vw;
            display: flex;
            justify-content: flex-end;
            display: inline-block;
            h3{
                padding-top: 2rem;
                text-align: end;
                font-size: 300%;
                font-weight: 500;
            }
        }
        .strike{
                text-decoration: line-through;
            
        }
        .discount{
            background-color:yellow;
            box-shadow: .2rem .2rem red;
            font-weight:700;
        }

        .input-group{
            display: flex;
            align-items: center;
            font-size: 3rem;
            
        }

        .btn-add{
            padding: 1rem;
            border-radius: 20px;
            &:hover{
            border: black solid 1px;
            }
        }
    }
    
</style>