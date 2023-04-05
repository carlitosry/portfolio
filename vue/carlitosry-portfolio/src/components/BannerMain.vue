<script setup lang="ts">
  import Banner from '../components/parts/Banner.vue';
  import AnimateBackground from '../components/widgets/AnimateBackground.vue';
</script>

<template>
  <!---BANNER MAIN--->
  <div class="iknow_tm_hero">
    <div class="background_shape opened"></div>
    
    <!---BANNER MAIN--->
    <div class="hero_content">
        <div class="container">
          <div class="content_inner">
            <Banner />
            <slot name="mainMenu"></slot>
          </div>
        </div>
    </div>
    
    <!-- ANIMATION OBJECTS BACKGROUNG -->
    <AnimateBackground />
  </div>
</template>
