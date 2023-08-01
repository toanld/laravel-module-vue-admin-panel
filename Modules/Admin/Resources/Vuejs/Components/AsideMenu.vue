<script setup>
import { reactive, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { useLayoutStore } from '@admin/Stores/layout.js'
import AsideMenuLayer from '@admin/Components/AsideMenuLayer.vue'
import OverlayLayer from '@admin/Components/OverlayLayer.vue'

let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu)
const layoutStore = useLayoutStore()
</script>

<template>

  <AsideMenuLayer
    v-if="Object.keys(menu).length"
    :menu="menu"
    :class="[layoutStore.isAsideMobileExpanded ? 'left-0' : '-left-60 lg:left-0', layoutStore.isAsideExpanded ? 'w-20' : 'w-60']"
  />
  <OverlayLayer
    v-show="layoutStore.isAsideLgActive"
    z-index="z-30"
    @overlay-click="layoutStore.isAsideLgActive = false"
  />
</template>
