<script setup>

import { useLayoutStore } from '@erp/Stores/layout.js'
import { useStyleStore } from '@erp/Stores/style.js'
import AsideMenu from '@erp/Components/Mobile/AsideMenu.vue'
import NavBarApp from '@erp/Components/Mobile/NavBarApp.vue'
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

// initialize components based on data attribute selectors
// onMounted(() => {
//     initFlowbite();
// })
const layoutStore = useLayoutStore()

defineProps({
    title: String
})

</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <NavBarApp :title="title"></NavBarApp>
        <!-- Sidebar -->
        <main class="pl-4 pb-b h-auto pt-20 transition-position "
            :class="{ 'md:ml-16': layoutStore.isAsideLgActive,'md:ml-60' : !layoutStore.isAsideLgActive}"
            >
             <div class="mini:text-red-400 sm:text-blue-200">tesst</div>
            <i class="sidemenu-item-icon icon-contact-card"></i>
            <slot></slot>

        </main>
        <AsideMenu></AsideMenu>
    </div>
    <div class="bow-old fixed top-0 left-0 w-full h-full bg-gray-300 opacity-50 z-40 hidden"></div>

</template>
