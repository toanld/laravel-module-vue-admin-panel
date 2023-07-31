<script setup>

import { useLayoutStore } from '@erp/Stores/layout.js'
import { useStyleStore } from '@erp/Stores/style.js'
import AsideMenu from '@erp/Components/AsideMenu.vue'
import NavBar from '@erp/Components/NavBar.vue'
import Notification from '@erp/Components/Notification.vue'
import AppList from '@erp/Components/AppList.vue'
import UserProfile from '@erp/Components/UserProfile.vue'
import Summary from '@erp/Components/Summary.vue'
import Search from '@erp/Components/Search.vue'
import { onMounted, getCurrentInstance, ref } from 'vue'
import { initFlowbite } from 'flowbite'

const internalInstance = getCurrentInstance()

// initialize components based on data attribute selectors
// onMounted(() => {
//     initFlowbite();
// })
const layoutStore = useLayoutStore()

defineProps({
    title: String
})
const name = ref('')
const changeText = (e) => {
    name.value = e
}
const closeDom = () => {
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()

}
</script>

<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">

        <NavBar :title="title" @text="changeText"></NavBar>
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
    <Notification :name="name"></Notification>
    <!-- Dropdown menu -->
    <AppList></AppList>
    <!-- Dropdown menu -->
    <UserProfile></UserProfile>

    <Search></Search>
</template>
