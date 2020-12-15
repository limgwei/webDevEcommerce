<template>
    <div class="navbar">
            <div class="toggle"  v-bind:class="{ active: isActive||catActive|| subActive  }"  v-on:click="popUp" >
                <font-awesome-icon :icon="['fas','bars']" class="small-icon" />
        
            </div>
            <nav  v-bind:class="{ active: !isActive&&!catActive&&!subActive }"  v-on:click="offNav">
            <ul class="left">
                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/products/promo">Promotion</a></li>
                <li><a @click.prevent="cActive">Rooms</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul :class="{active: !catActive}">
                    <li v-for="(cat,key) in category"  :key="key"><a @click.prevent="openSub">{{cat}}</a></li>
            </ul>
            <ul :class="{active: !subActive}">
                <li v-for="(sub,key) in subcategory" :key="key"><a href="">{{sub.name}}</a></li>
            </ul>
        </nav>
    </div>
</template>


<script>

export default {
    name: 'Navbar',
    data:function(){
        return{
            isActive: false,
            catActive: false,
            subActive: false,
            category: ['Living Room','Dining Room','Bedroom','Decor'],
            subcategory:[
                {cate:'Living Room',name:'Sofa'},
                {cate:'Living Room',name:'Table'},
                {cate:'Living Room',name:'Chair'},
                {cate:'Dining Room',name:'Sofa'},
                {cate:'Dining Room',name:'Table'},
                {cate:'Dining Room',name:'Chair'},
            ],
        }
    },
    methods:{
        popUp: function(){
            this.isActive=!this.isActive;
        },
        cActive:function(){
            this.catActive=!this.catActive
        },
        offNav: function(){
            this.isActive=false;
            this.cActive=false;
            this.subActive=false;
        },
        openSub: function(){
            this.subActive=!this.subActive;
        }

    }
}
</script>

<style lang="scss" scoped>
    .navbar{
        
        .toggle{
            position: fixed;
            margin-top: 5%;
            margin-left: 3%;
            height: 6rem;
            width: 6rem;
            align-items: center;
            border: transparent;
            background-color: rgba(32, 32, 32, 0.9);
            border-radius: 50%;
            box-shadow: 0.1rem .1rem .2rem rgb(126, 126, 126);
            z-index: 999;
            cursor: pointer;
            &:hover{
                box-shadow: 0.2rem.2rem .9rem rgb(218, 218, 218);
            
            }
            
        }

        .scrolled{
            background-color: rgba(48, 48, 48, 0.1);
        }
        .active{
            display: none;
        }
        

        nav{   
        width: 100%;
        height: 100%;
        background-color:rgba(48, 48, 48,0.2);
        position: fixed;
        z-index: 99;
        display: flex;
        justify-content: flex-start;
        
        ul{   
            width: 20%;
            height: 100%;
            background:rgba(48, 48, 48,1) ;
            padding-top: 10%;
            text-align: center;
            z-index: 999;
            &:nth-child(even){
            background-color: rgba(48, 48, 48, 0.9) ;
            }
            
            li{
                list-style: none;
                margin-bottom: 5rem;
                cursor: pointer;
                a{
                    text-decoration: none;
                    color: white;
                    font-size: 2rem;
                }
            }
        }

    }
    }
    

</style>