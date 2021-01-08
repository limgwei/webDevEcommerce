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
            </div>
        </div>

    </div>
</template>


<script>
export default {
    name: 'ProductDetail',
    data(){
        return{
            product:
            {id:'1',name: 'White Sofa',category:'sofa',img: require('@/assets/slide1.jpg'),price:'1800',description:'a sofa',discount:{value:'200'}}
            
        }
    },
    created:{
        //api link
    }
}
</script>

<style lang="scss" scoped>
    .container{
        display: flex;
        justify-content: flex-start;
        padding-top: 7rem;
        img{
            width: 40vw;
        }

        .detail-container{
            padding: 2rem;
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
    }
    
</style>