<script setup lang="ts">
  import { RouterLink, RouterView } from 'vue-router';
  import BannerMain from '@/components/BannerMain.vue';
  import ModalBox from '@/components/parts/ModalBox.vue';
  import Topbar from '@/components/parts/Topbar.vue';

</script>

<template>
    <ModalBox />
    <div class="iknow_tm_topbar">
      <Topbar />
    </div>
    
    <RouterView />
</template>

<!--<style lang="scss" rel="stylesheet/scss"></style>-->
<style lang="scss" rel="stylesheet/css"></style>

