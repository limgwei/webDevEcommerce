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
           
        ]
        }
        
    },
    created(){
        axios.get('http://127.0.0.1:8000/api/banner').then( data=>{
            console.log(this.slides);
            this.slides = "";
            var datas = data.data.data;
            var images = [];
            //console.log(datas[i].image[0].url);
            for(var i=0;i<datas.length;i++){
                var image =datas[i].image[0].url;
               images[i] ={image};
            }
            console.log(images);
            this.slides =images;
        //     console.log(data.data.data);
         //this.slides = data.data.data.image.url;
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