<template>
    <div class="product-filter">
        <div class="container">
            <div class="filter-bar">
            

                <div class="left">
                    <label for="filter">
            <font-awesome-icon :icon="['fas','filter']" class="static-icon"/></label>
                
                <select name="sort" id="sort">
                    <option value="" active>Sort By</option>
                    <option value="">Latest</option>
                    <option value="">Name (A-Z)</option>
                    <option value="">Name (Z-A)</option>
                    <option value="">Price (High-Low)</option>
                    <option value="">Price(ZLow-High)</option>
                    

                </select>
                </div>

                <div class="right">
                <input type="text">
                <button class="btn">Search</button>
            </div>
            </div>

            
        </div>
    </div>
</template>

<script>
export default {
    name:'ProductFilter',
}
</script>

<style lang="scss" scoped>
    .container{
        padding: 3rem 2rem 0 2rem;
        .right{
            input{
                padding:0.4rem;
            }
            .btn{
                margin-left: 0.5rem;
            }
        }

        .filter-bar{
            display:flex;
            
            justify-content: space-between;
        }

        .left{
            justify-content: start;
            select{
                
            padding:0.4rem;
            }
        }
    }
</style>