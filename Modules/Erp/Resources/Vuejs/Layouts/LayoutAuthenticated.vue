<script setup>
import { useLayoutStore } from '@erp/Stores/layout.js'
import { useStyleStore } from '@erp/Stores/style.js'
import NavBar from '@erp/Components/NavBar.vue'
import AsideMenu from '@erp/Components/AsideMenu.vue'
import FooterBar from '@erp/Components/FooterBar.vue'

const styleStore = useStyleStore()

const layoutStore = useLayoutStore()
</script>

<template>
  <div :class="{ 'dark': styleStore.darkMode, 'overflow-hidden lg:overflow-visible': layoutStore.isAsideMobileExpanded }">
    <div
      :class="[{ 'ml-60 lg:ml-0': layoutStore.isAsideMobileExpanded }, layoutStore.isAsideExpanded ? 'xl:pl-20' : 'xl:pl-60']"
      class="pt-14 w-screen transition-position lg:w-auto bg-gray-50 dark:bg-slate-800 dark:text-slate-100"
    >
      <NavBar :class="[{ 'ml-60 lg:ml-0': layoutStore.isAsideMobileExpanded }, layoutStore.isAsideExpanded ? 'xl:pl-20' : 'xl:pl-60']" />
      <AsideMenu />
      <slot />
      <FooterBar />
    </div>
  </div>
</template>
