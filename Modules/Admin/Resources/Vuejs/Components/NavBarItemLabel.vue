<script setup>
import BaseIcon from '@admin/Components/BaseIcon.vue'

defineProps({
  icon: {
    type: String,
    default: null
  },
  label: {
    type: String,
    required: false
  },
  isDesktopIconOnly: Boolean
})
</script>

<template>
  <slot />
  <BaseIcon
    v-if="icon"
    :path="icon"
    class="transition-colors"
  />
  <span
    class="px-2 transition-colors"
    :class="{ 'lg:hidden':isDesktopIconOnly && icon }"
  >{{ label }}</span>
</template>
