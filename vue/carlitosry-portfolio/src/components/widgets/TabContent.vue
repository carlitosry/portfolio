<script lang="ts">
import type { ITabContent } from '@/interfaces/ITabContent';
import { Component, Prop, Vue } from "vue-facing-decorator";

@Component
export default class TabContent extends Vue {
    @Prop({default: null}) 
    readonly content: ITabContent|null = null;

}
</script>

<template>
    <template v-if="content">
        <div :id="content._id" class="iknow_tm_main_section" :class="{ 'active' : content.isActive }">
            <div class="iknow_tm_{{ content._id }}">
                <div class="left">
                    <div class="left_inner">
                        <slot name="leftSide"></slot>
                    </div>
                </div>
                <div class="right">
                    <slot name="rightSide"></slot>
                </div>
            </div>
        </div>
    </template>
</template>