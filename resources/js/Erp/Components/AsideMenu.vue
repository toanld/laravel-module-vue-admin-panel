<script setup>
import { reactive, computed,ref } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import BaseIcon from '@/Components/BaseIcon.vue'
import { useLayoutStore } from '@/Stores/layout.js'

import {
  mdiMonitor,
  mdiAccountSettings,
  mdiFolderAccountOutline,
  mdiAccount,
  mdiMenu,
  mdiMinus,
  mdiPlus,
  mdiStore,
  mdiPostOutline,
  mdiChevronUp,
  mdiChevronDown
} from "@mdi/js";

const mdiIcon = {
  mdiMonitor: mdiMonitor,
  mdiAccountSettings: mdiAccountSettings,
  mdiFolderAccountOutline:mdiFolderAccountOutline,
  mdiAccount: mdiAccount,
  mdiMenu: mdiMenu,
  mdiMinus: mdiMinus,
  mdiPlus: mdiPlus,
  mdiStore: mdiStore,
  mdiPostOutline: mdiPostOutline,
  mdiChevronUp: mdiChevronUp,
  mdiChevronDown : mdiChevronDown
}
const checkActive = ref(router.page.url)
let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_module)


const layoutStore = useLayoutStore()

const isMenuNavBarActive = ref(false)

const menuOpenLg = () => {
  layoutStore.isAsideLgActive = !layoutStore.isAsideLgActive
}
const cssTop = (value) => {
    if(document.getElementById('hover-'+value)){
        return document.getElementById('hover-'+value).offsetTop +'px'
    }
    return '64px'
}
</script>
<template>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-position -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        :class="{ 'lg:w-16' : layoutStore.isAsideLgActive}"
        aria-label="Sidenav"
        id="drawer-navigation"
        >
        <div class="overflow-y-auto py-5 h-full bg-white dark:bg-gray-800">
            <form action="#" method="GET" class="md:hidden mb-2">
                <label for="sidebar-search" class="sr-only">Search</label>
                <div class="relative">
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
                        name="search"
                        id="sidebar-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search"
                    />
                </div>
            </form>
            <div class="justify-between items-center mb-3 py-2 px-5 lg:flex md:flex sm:hidden">
                 <div class="cursor-pointer" @click="menuOpenLg">
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
                </div>
                <a href="https://flowbite.com" class="flex items-center justify-between" :class="{ 'hidden' : layoutStore.isAsideLgActive}">
                    <img
                        src="https://flowbite.s3.amazonaws.com/logo.svg"
                        class="mr-3 h-8"
                        alt="Flowbite Logo"
                    />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>

            </div>
                <ul class="space-y-2" data-accordion="open">
                    <li v-for="(value, key) in menu" :key="key" class="px-3 group" :id="'hover-'+value.text">
                        <div v-if="value.children">
                             <button
                                    type="button"
                                    class="flex items-center relative p-2 w-full text-base font-medium text-gray-900 rounded-lg transition ease-in-out duration-75  hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    :data-accordion-target="'#dropdown-'+value.text"
                                    :aria-controls="'#dropdown-'+value.text"

                                >

                                <svg
                                    aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    v-html="value.icon"
                                >
                                </svg>
                                <span :class="{
                                        'flex-1 ml-3 text-left whitespace-nowrap' :true,
                                        'text-red' : checkActive == value.link,
                                        'hidden' : layoutStore.isAsideLgActive
                                    }"

                                >{{ value.name }}</span
                                >

                                <svg
                                    data-accordion-icon
                                    aria-hidden="true"
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                                <ul class="group-hover:block fixed bg-white z-100 top-20 border border-gray-300 rounded -right-56 w-56 hidden shadow-lg shadow-gray-500/50  p-2 space-y-2 "  v-if="layoutStore.isAsideLgActive" :style="'top:'+ cssTop(value.text)+';'">
                                    <li v-for="(chil, key) in value.children" :key="key">
                                        <a
                                            href="#"
                                            :class="{
                                                'flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' :true,
                                                'text-red-400' : checkActive == chil.link
                                            }"
                                        >{{ chil.name }}</a
                                        >
                                    </li>
                                </ul>
                            </button>
                            <ul :id="'dropdown-'+value.text" class="hidden py-2 space-y-2 " v-show="!layoutStore.isAsideLgActive">
                                <li v-for="(chil, key) in value.children" :key="key">
                                    <a
                                        href="#"
                                        :class="{
                                            'flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' :true,
                                            'text-red-400' : checkActive == chil.link
                                        }"
                                    >{{ chil.name }}</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div v-else>
                            <a
                                href="#"
                                class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                     v-html="value.icon"
                                >

                                </svg>
                                <span :class="{
                                        'ml-3' : true,
                                        'text-red' : checkActive == value.link
                                    }">{{ value.name }}</span>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>

        </aside>
</template>


<!--  <script setup>
import { reactive, computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
import { useLayoutStore } from '@/Stores/layout.js'
import AsideMenuLayer from '@/Erp/Components/AsideMenuLayer.vue'
import OverlayLayer from '@/Components/OverlayLayer.vue'

let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_module)
const layoutStore = useLayoutStore()
</script>

<template>

  <AsideMenuLayer
    v-if="Object.keys(menu).length"
    :menu="menu"
    :class="[layoutStore.isAsideMobileExpanded ? 'left-0' : '-left-60 lg:left-0', {'lg:hidden xl:flex': !layoutStore.isAsideLgActive}, layoutStore.isAsideExpanded ? 'w-20' : 'w-60']"
  />
  <OverlayLayer
    v-show="layoutStore.isAsideLgActive"
    z-index="z-30"
    @overlay-click="layoutStore.isAsideLgActive = false"
  />
</template>
 -->
