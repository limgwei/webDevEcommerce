<template>
  <div class="home">
    
    <Slider />
    <CAbout />
  </div>
</template>

<script>
// @ is an alias to /src
import Slider from '@/components/Slider.vue'
import CAbout from '@/components/CAbout.vue'

export default {
  name: 'Home',
  components: {
    Slider,
    CAbout
  }
}
</script>
