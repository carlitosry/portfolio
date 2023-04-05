<script lang="ts">
import type { ISection } from './../../interfaces/ISection';
import { Component, Prop, Vue } from "vue-facing-decorator";

@Component
export default class TabNav extends Vue {
    @Prop({default: []}) 
    readonly sections: ISection[] = [];

}
</script>

<template>
    <ul>
      <li v-for="item in sections" :class="{ 'active' : item.isActive }" :key="item">
        <i v-html="item.icon" class="svg replaced-svg">
        </i>
        <span>{{ item.title }}</span>
        <a class="iknow_tm_full_link" :href="item.href"></a>
      </li>
    </ul>
</template>