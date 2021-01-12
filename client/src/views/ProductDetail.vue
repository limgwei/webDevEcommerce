<template>
    <div class="product-detail">

        <div class="container">
            <div class="img-container">
                <img :src="product.img" alt="">
            </div>

            <div class="detail-container">
                <h2>{{product.name}}</h2> 
                <p>{{product.description}}</p>   
            </div>

            <div class="price-tag">
                    <h3 :class="{strike: product.discount}">RM {{product.price}}</h3>
                    
                <span v-if="product.discount">
                    <h3 class="discount">RM {{product.price - product.discount.value}}</h3>
                </span>

                <div class="input-group">
                    <font-awesome-icon 
                    @click="addQuantity"
                    :icon="['fas','plus']" 
                    class="small-icon" />

    
                    <span class="quantity">{{ quantity }}</span>

                    <font-awesome-icon 
                    @click="subQuantity"
                    :icon="['fas','minus']" 
                    class="small-icon" />
                    <button @click="clearQuantity" class="btn btn-add"> Add To Cart</button>
            
                </div>
                
            </div>

            
        </div>

    </div>
</template>


<script>
import axious from 'axios'
export default {
    name: 'ProductDetail',
    data(){
        return{
            product:'',
            quantity: 0,
            
        }
    },
    methods:{
        

        addQuantity(){
            this.quantity++
        },
        subQuantity(){
            if(this.quantity!=0){
                
                this.quantity--
            }
        },
        clearQuantity(){
            this.quantity =0
        },
    },
    // async mounted(){
    //     if (this.$route.params.id) {
    //         await this.APIHAHA(this.$route.params.id)
            
    //     } else {
    //         this.$router.go(-1)
    //         }
    // },
    created(){
        axious.get('http://127.0.0.1:8000/api/product/',this.$route.params.id).then( data=>{
        this.products = data.data.data;
        console.log(this.$router.params.id);
        console.log(this.products);
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