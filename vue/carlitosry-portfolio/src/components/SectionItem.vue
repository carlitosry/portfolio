<script lang="ts">
import type ISection from '@/interfaces/ISection';
import { Component, Prop, Vue } from "vue-facing-decorator";
import TabContent from '@/components/widgets/TabContent.vue'

@Component({
    components: {
        TabContent
    }
})
export default class SectionItem extends Vue {
    @Prop({required: true}) 
    section: ISection | null;

}
</script>

<template>
    <TabContent v-if="section" :content="section">
        <template #leftSide>
            <div v-html="section.leftSide"></div>
        </template>
    </TabContent>
</template>