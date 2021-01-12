<template>
    <div class="slider">
        <div class="container">
            
            <vueper-slides
                fade
                autoplay
                :touchable="false"
                @autoplay-pause="false"
                @autoplay-resume="true"
                fixedHeight= "50vh"
                :arrows="false"
                >
                <vueper-slide
                    v-for="(slide, i) in slides"
                    :key="i"
                    :image="slide.image" />
            </vueper-slides>
            
        </div>
    </div>
</template>

<script>

import axios from 'axios'
export default {
    
    name: 'Slider',
    data(){
        return{
            slides: [
            {
            image: require('@/assets/slide1.jpg')
            },
            {
            image: require('@/assets/slide2.jpg')
            },
            {
            image: require('@/assets/slide3.jpg')
            },
        ]
        }
        
    },
    created(){
        axios.get('http://127.0.0.1:8000/api/banner').then( data=>{
        this.slides = data.data.data;
        })
    },


}




</script>

<style lang="scss" scoped>
    .container{
        margin-top: 5rem;
        width: 80%;
    }
    
</style>