<script setup>

import { useLayoutStore } from '@/Stores/layout.js'
import { useStyleStore } from '@/Stores/style.js'
import AsideMenu from '@/Erp/Components/AsideMenu.vue'
import FooterBar from '@/Components/FooterBar.vue'
import NavBar from '@/Erp/Components/NavBar.vue'
import Notification from '@/Erp/Components/Notification.vue'
import AppList from '@/Erp/Components/AppList.vue'
import UserProfile from '@/Erp/Components/UserProfile.vue'
import Summary from '@/Erp/Components/Summary.vue'

const layoutStore = useLayoutStore()
defineProps({
    title: String
})
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <NavBar :title="title"></NavBar>
        <!-- Sidebar -->
        <AsideMenu></AsideMenu>
        <main class="p-4 h-auto pt-20 transition-position"
            :class="{ 'md:ml-20': layoutStore.isAsideLgActive,'md:ml-60' : !layoutStore.isAsideLgActive}"
            >
            <slot></slot>
        </main>
    </div>
    <div class="bow-old fixed top-0 left-0 w-full h-full bg-gray-100 opacity-50 z-50 hidden"></div>
    <Summary></Summary>
     <!-- Dropdown menu -->
    <Notification></Notification>
    <!-- Dropdown menu -->
    <AppList></AppList>
    <!-- Dropdown menu -->
    <UserProfile></UserProfile>
</template>
