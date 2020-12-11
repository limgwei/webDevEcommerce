<template>
    <div class="product-nav">
        <div class="nav">
            <ul>
                <li><a href="">SOFA</a></li>
                <li><a href="">TABLE</a></li>
                <li><a href="">BED</a></li>
                <li><a href="">CHAIR</a></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ProductNav',

}
</script>

<style lang="scss" scoped>
    .nav{
        padding: 2rem;
        ul{
            padding: 0 10%;
            display:flex;
            justify-content: space-between;
            list-style: none;

            li{
                display:inline-block;

                    a{
                        text-decoration: none;
                        color:black;
                        font-size:2rem;
                    }
                
            }
        }
    }
</style>