<script setup>
import Notification from '@/Erp/Components/Notification.vue'
import AppList from '@/Erp/Components/AppList.vue'
import UserProfile from '@/Erp/Components/UserProfile.vue'
import { useLayoutStore } from '@/Stores/layout.js'
import { reactive, computed,ref, onMounted } from 'vue'

import { usePage,Link, router } from '@inertiajs/vue3'

defineProps({
    title: String
})
const checkActive = ref(router.page.url)
onMounted(() => {
    if(checkActive.value.charAt(0) === "/"){
        checkActive.value = checkActive.value.slice(1);
    }
    if(checkActive.value.indexOf("?") == 0){
        checkActive.value = checkActive.value.substring(0, checkActive.value.indexOf("?"));
    }
    let array = checkActive.value.split("/");
    checkActive.value = array[0];
})
const layoutStore = useLayoutStore()

let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_top)
const closeDom = () => {
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')

}
const handlePaneClick = (e) => {
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
}
</script>
<template>
    <nav class="bg-white border-b border-gray-200 px-4  dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-40" v-click-outside="closeDom"
        :class="{
            'md:ml-20' : layoutStore.isAsideLgActive,
            'md:ml-64' : !layoutStore.isAsideLgActive
        }">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center w-64">
                <button
                    data-drawer-target="drawer-navigation"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-x mr-2 py-2.5 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                >
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        aria-hidden="true"
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <a href="https://flowbite.com" class="flex items-center justify-between mr-4 md:hidden py-2.5">
                    <img
                        src="https://flowbite.s3.amazonaws.com/logo.svg"
                        class="mr-3 h-8"
                        alt="Flowbite Logo"
                    />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center group relative py-2.5">
                    <div class="w-8 h-8 rounded-full border border-main flex items-center justify-center cursor-pointer mr-2 group-hover:shadow group-hover:shadow-red-500 group-hover:border-main group-hover:bg-main transition-all">
                        <svg class="w-[14px] h-[14px] text-main transition-all group-hover:rotate-90 dark:text-white group-hover:text-white e" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                        </svg>
                    </div>
                    {{ title }}
                    <ul class="hidden p-3 space-y-2 w-48 rounded-lg bg-white group-hover:block group-hover:absolute group-hover:top-12 shadow-3xl group-hover:left-0">
                        <li v-for="(value, key) in menu" :key="key" class="">
                            <a
                                href="#"
                                :class="{
                                    'flex items-center text-sm p-2 pl-4 w-full rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-main dark:text-white dark:hover:bg-gray-700' :true,
                                    'text-main' : checkActive == value.text
                                }"
                            >{{ value.name }}</a
                            >
                        </li>
                        <li class="border-t">
                            <a :class="{

                                    ' mt-2 flex items-center text-sm p-2 pl-4 w-full rounded-lg transition duration-75 group hover:bg-gray-100 hover:text-main dark:text-white dark:hover:bg-gray-700' :true,
                                }"
                                href="#">Cài đặt</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center lg:order-2 py-2.5" >
                 <form action="#" method="GET" class="hidden md:block md:pl-2">
                    <label for="topbar-search" class="sr-only">Search</label>
                    <div class="relative md:w-60 md:w-96 mr-3">
                        <div
                            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                        >
                            <svg
                                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                ></path>
                            </svg>
                        </div>
                        <input
                            type="text"
                            name="email"
                            id="topbar-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Search"
                        />
                    </div>
                </form>
                <button
                    type="button"
                    data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-1 text-gray-500 rounded-lg md:hidden hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    >
                    <span class="sr-only">Toggle search</span>
                    <svg  class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"></path>
                    </svg>
                </button>
                <button
                    @click="handlePaneClick"
                    type="button"
                    data-dropdown-toggle="summary-dropdown"
                    class="p-2 mr-1  gourp uppercase text-main border border-main flex items-center justify-center text-xs rounded-lg group hover:text-main hover:bg-red-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    >
                    <span class="sr-only">summary</span>
                    <!-- Bell icon -->
                    Lối tắt
                    <svg class=" text-main ml-2 w-[14px] h-[14px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                  </svg>
                </button>
                <a
                    href="#"
                    class="p-2 mr-1 text-gray-500 rounded-lg group hover:text-gray-900 hover:bg-red-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    >
                    <span class="sr-only">home</span>
                    <!-- Bell icon -->
                    <svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M3 8v10a1 1 0 0 0 1 1h4v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5h4a1 1 0 0 0 1-1V8M1 10l9-9 9 9"/>
                  </svg>
                </a>
                 <button
                    @click="handlePaneClick"
                    type="button"
                    data-dropdown-toggle="notification-dropdown"
                    class="p-2 mr-1 text-gray-500 rounded-lg group hover:text-gray-900 hover:bg-red-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    >
                    <span class="sr-only">View notifications</span>
                    <!-- Bell icon -->
                    <svg
                        aria-hidden="true"
                        class="w-6 h-6 group-hover:text-main"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                        ></path>
                    </svg>
                </button>
                <button
                    @click="handlePaneClick"
                    type="button"
                    data-dropdown-toggle="apps-dropdown"
                    class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-red-100 group dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700  dark:focus:ring-main"
                >
                    <span class="sr-only">View notifications</span>
                    <!-- Icon -->
                    <svg
                        class="w-6 h-6 group-hover:text-main"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                        ></path>
                    </svg>
                </button>
                 <button
                    @click="handlePaneClick"
                    type="button"
                    class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button"
                    aria-expanded="false"
                    data-dropdown-toggle="dropdown"
                >
                    <span class="sr-only">Open user menu</span>
                    <img
                        class="w-8 h-8 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                        alt="user photo"
                    />
                </button>

            </div>
        </div>
    </nav>
</template>
