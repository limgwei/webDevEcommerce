<template>
    <div class="product-list">
            <div class="grid">
                <div class="grid-item" v-for="product in products" :key="product.id">
                    <img :src="product.img" :alt="product.cateogory">
                    <h2>{{product.name}}</h2>
                    <p>{{product.description}}</p>
                    <h3><small>RM</small>{{product.price}}</h3>
                </div>
            
            </div>
    </div>    
</template>

<script>
export default {
    name: 'ProductList',
    data(){
        return{
            products:[
            {id:'1',name: 'White Sofa',category:'sofa',img: require('@/assets/slide1.jpg'),price:'1800',description:'a sofa'},
            {id:'2',name: 'Green Sofa',category:'table',img: require('@/assets/slide2.jpg'),price:'1800',description:'a sofa'},
            {id:'3',name: 'Blue Sofa',category:'sofa',img:require('@/assets/slide3.jpg'),price:'1800',description:'a sofa'},
            {id:'4',name: 'Yellow Sofa',category:'sofa',img:require('@/assets/slide1.jpg'),price:'1800',description:'a sofa'},
            {id:'5',name: 'Purple Sofa',category:'sofa',img:require('@/assets/slide2.jpg'),price:'1800',description:'a sofa'},
            {id:'6',name: 'Pink Sofa',category:'sofa',img:require('@/assets/slide3.jpg'),price:'1800',description:'a sofa'},
        ],
        

        }
        

        
    }
}
</script>

<style lang="scss" scoped>

    .grid{
        
        margin: 0 10%;
        display: grid;
        grid-gap: 1rem .5rem;
        grid-template-columns: auto auto auto auto;
        padding: 2rem;
        justify-content: flex-start;

    &-item{
        background: rgb(240, 240, 240);
        height: 50vh;
        width: auto;
        img{
            width: 100%;
            height: 75.6%;
        }

        h2,p,h3{
            padding: 0 1rem;
        }

        h2{
            font-size: 300%;
            font-weight: 700;
            letter-spacing: .15rem;
        }

        p{
            font-size: 150%;
        }

        h3{
            font-weight: 300;
            font-size: 280%;
            small{
                font-size: 40%;
                font-weight: 700;
            }
        }
    }
    
    }


</style>