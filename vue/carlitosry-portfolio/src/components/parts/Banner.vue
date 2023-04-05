<script setup lang="ts">
  const props = {
    title: '<span class="subtitle">I\'m</span> <h3 class="name">Carlos Reyes</h3> <p class="text">A passionate Fullstack Developer based In Spain</p>',
    videoLink: '#',
    profilePic: '@/assets/img/profile.jpg'
  }
</script>

<template>
  <!---MAIN INFO----->
  <div class="main_info" style="min-height: calc(100vh - 166px); padding-top: 97px;">
    <div class="left">
      <div v-html="props.title"></div>
      <div class="iknow_tm_video">
        <div class="video_inner">
          <div class="circle"></div>
          <h3 class="play">Play Video</h3>
          <a class="iknow_tm_full_link popup-youtube" :href="props.videoLink"></a>
        </div>
      </div>
    </div>
    <div class="right">
      <div class="image">
        <img :src="props.profilePic" alt="@carlitosry">
        <div class="main" style="background-image: var(--savepage-url-22);"></div>
      </div>
    </div>
  </div>
</template>
