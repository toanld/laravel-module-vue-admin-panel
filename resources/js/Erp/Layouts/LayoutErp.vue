<script setup>

import { useLayoutStore } from '@/Stores/layout.js'
import { useStyleStore } from '@/Stores/style.js'
import AsideMenu from '@/Erp/Components/AsideMenu.vue'
import FooterBar from '@/Components/FooterBar.vue'
import NavBar from '@/Erp/Components/NavBar.vue'

const layoutStore = useLayoutStore()
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <NavBar></NavBar>
        <!-- Sidebar -->
        <AsideMenu></AsideMenu>
        <slot></slot>
    </div>
</template>
