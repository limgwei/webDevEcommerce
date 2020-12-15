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
export default {
    name: 'Slider',
    data: () => ({
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
    }),
}




</script>

<style lang="scss" scoped>
    .container{
        margin-top: 5rem;
        width: 80%;
    }
    
</style>