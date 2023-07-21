<script setup>

import { useLayoutStore } from '@/Stores/layout.js'
import { useStyleStore } from '@/Stores/style.js'
import AsideMenu from '@/Erp/Components/AsideMenu.vue'
import FooterBar from '@/Components/FooterBar.vue'
import NavBarApp from '@/Erp/Components/Mobile/NavBarApp.vue'
import Notification from '@/Erp/Components/Notification.vue'
import AppList from '@/Erp/Components/Mobile/AppList.vue'
import UserProfile from '@/Erp/Components/UserProfile.vue'
import Summary from '@/Erp/Components/Summary.vue'
import Search from '@/Erp/Components/Search.vue'
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
const closeDom = () => {
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()

}
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <NavBarApp :title="title"></NavBarApp>
        <!-- Sidebar -->
        <AsideMenu></AsideMenu>
        <main class="pl-4 pb-b h-auto pt-20 transition-position "
            :class="{ 'md:ml-16': layoutStore.isAsideLgActive,'md:ml-60' : !layoutStore.isAsideLgActive}"
            >
             <div class="mini:text-red-400 sm:text-blue-200">tesst</div>
            <i class="sidemenu-item-icon icon-contact-card"></i>
            <slot></slot>

        </main>
    </div>
    <div class="bow-old fixed top-0 left-0 w-full h-full bg-gray-300 opacity-50 z-50 hidden" @click="closeDom"></div>
    <Summary></Summary>
     <!-- Dropdown menu -->
    <Notification></Notification>
    <!-- Dropdown menu -->

    <!-- Dropdown menu -->
    <UserProfile></UserProfile>

    <Search></Search>
</template>
