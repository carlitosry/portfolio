<script lang="ts">
import WelcomeItem from './WelcomeItem.vue'
import type { ISection } from '../interfaces/ISection';
import { SectionRepository } from '../services/SectionRepository';
import { Component, Prop, Vue } from 'vue-facing-decorator';

@Component({
  components: {
    WelcomeItem
  }
})
export default class TheWelcome extends Vue {
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

  <WelcomeItem>
    <template #icon>
      <DocumentationIcon />
    </template>
    <template #heading>Documentation</template>

    Vue’s
    <a href="https://vuejs.org/" target="_blank" rel="noopener">official documentation</a>
    provides you with all information you need to get started.
  </WelcomeItem>


</template>
