<script lang="ts">
  import BannerMain from '../components/BannerMain.vue';
  import MainMenu from '../components/MainMenu.vue';
  import SectionItem from '../components/SectionItem.vue';
  import { SectionRepository } from '../services/SectionRepository';
  import { Component, Prop, Vue } from "vue-facing-decorator";


  @Component
  export default class HomeView extends Vue {
    @Prop({required: true}) 
    section: ISection | null;

    sectionRepository = new SectionRepository();
    sections: ISection[] = [];

    mounted() {
      this.sectionRepository.getAll()
        .then(response => {
          this.sections = response.data;
        })
        .catch(error => {
          console.log(error);
        });
      }

  }

</script>

<template>
   <BannerMain>
      <template #mainMenu>
        <MainMenu />
      </template>
    </BannerMain>

    <div class="container">
      <div class="iknow_tm_mainpart opened">
        <template v-for="section in sections" :key="section">
          <SectionItem :section="section"></SectionItem>
        </template>
      </div>
    </div>
</template>
