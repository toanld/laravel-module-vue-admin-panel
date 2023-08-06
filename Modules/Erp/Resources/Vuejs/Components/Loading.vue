<script setup>
import { computed } from 'vue'

const props = defineProps({
  w: {
    type: String,
    default: 'w-full'
  },
  h: {
    type: String,
    default: 'h-0.5'
  },
  top: {
    type: String,
    default: ''
  }
})

const spanClass = computed(() => `relative overflow-hidden rounded-2xl bg-gray-200 before:content-[''] before:absolute before:-left-1/2 before:h-0.5  before:w-1/3 before:bg-main before:rounded-2xl   ${props.w} ${props.h}  ${props.top}`)
</script>

<template>
    <div class="loader-line" :class="spanClass"></div>
</template>
<style type="text/css">
    .loader-line {
        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
    }
    .loader-line:before {

        -webkit-animation: lineAnim 1s linear infinite;
        -moz-animation: lineAnim 1s linear infinite;
        animation: lineAnim 1s linear infinite;
        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
    }
    @keyframes lineAnim {
        0% {
            left: -40%;
        }
        50% {
            left: 20%;
            width: 80%;
        }
        100% {
            left: 100%;
            width: 100%;
        }
    }
</style>
