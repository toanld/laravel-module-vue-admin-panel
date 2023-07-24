<script setup>
import { useLayoutStore } from '@admin/Stores/layout.js'
import { useStyleStore } from '@admin/Stores/style.js'
import NavBar from '@admin/Components/NavBar.vue'
import AsideMenu from '@admin/Components/AsideMenu.vue'
import FooterBar from '@admin/Components/FooterBar.vue'

const styleStore = useStyleStore()

const layoutStore = useLayoutStore()
</script>

<template>
    <div class="antia   liased bg-gray-50 dark:bg-gray-900">
        <NavBar :title="title"></NavBar>
        <!-- Sidebar -->
        <AsideMenu></AsideMenu>
        <main class="pl-4 pb-b h-auto pt-20 transition-position "
              :class="{ 'md:ml-16': layoutStore.isAsideLgActive,'md:ml-60' : !layoutStore.isAsideLgActive}"
        >
            <div class="mini:text-red-400 sm:text-blue-200" @click="clickNotify">fdssssssssss</div>
            <i class="sidemenu-item-icon icon-contact-card"></i>
            <slot></slot>

        </main>
    </div>
    <div class="bow-old fixed top-0 left-0 w-full h-full bg-gray-300 opacity-50 z-50 hidden" @click="closeDom"></div>
    <Summary></Summary>
    <!-- Dropdown menu -->
    <Notification></Notification>
    <!-- Dropdown menu -->
    <AppList></AppList>
    <!-- Dropdown menu -->
    <UserProfile></UserProfile>
    <Search></Search>
</template>
