<script setup>
import { reactive, computed,ref } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import { useLayoutStore } from '@erp/Stores/layout.js'


const checkActive = ref(router.page.url)
let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_module)


const layoutStore = useLayoutStore()

const isMenuNavBarActive = ref(false)

const menuOpenLg = () => {
  layoutStore.isAsideLgActive = !layoutStore.isAsideLgActive
}
const cssTop = (value, key) => {
    if(document.getElementById('hover-'+value)){
        if(key > 0){
            let targetElement = document.querySelector('#hover-'+value)
            let height = 0
            let num = 68.8 * key;
            let previousElement = targetElement.previousElementSibling
            for (var i = 0; i < key; i++) {
                height += previousElement.clientHeight
                previousElement = previousElement.previousElementSibling
            }
             return document.getElementById('hover-'+value).offsetTop - height + num +'px'
        }else{
             return document.getElementById('hover-'+value).offsetTop +'px'
        }
    }
    return '60px'
}

const checkExpanded = (childs) => {

    let check = false;
    childs.forEach((value, key) => {
        if(value.link == checkActive.value){
            check = true;
        }
    });
    return check;
}
</script>
<template>
    <aside
        class="fixed top-0 left-0 z-40 w-60 h-screen mini:mt-61 sm:mt-61 md:mt-0 mini:bg-white sm:bg-white transition-transform -translate-x-full md:bg-[#edf1f8] md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        :class="{ 'md:w-[70px] sm:w-60' : layoutStore.isAsideLgActive}"
        aria-label="Sidebar"
        id="logo-sidebar"
        >
        <div class="overflow-y-auto h-full dark:bg-gray-800">
            <form action="#" method="GET" class="md:hidden  px-2 py-4 ">
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
                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-main focus:border-main block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Tìm kiếm"
                    />
                </div>
            </form>
            <div class="justify-between items-center mb-3 py-2 px-5 lg:flex md:flex mini:hidden sm:hidden h-12"
                :class="{ 'lg:justify-center' : layoutStore.isAsideLgActive}"
                >
                 <div class="cursor-pointer sm:hidden md:block" @click="menuOpenLg">
                     <svg
                        aria-hidden="true"
                        class="w-6 h-6 text-gray-800 dark:text-white"
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
                <ul class="space-y-2" data-accordion="collapse">
                    <li v-for="(value, key) in menu" :key="key" class="px-2 group " :id="'hover-'+value.text">
                        <div v-if="value.children.length > 0" class="flow-root">
                             <button
                                    type="button"
                                    class="flex items-center justify-center relative py-2 px-1 w-full font-normal rounded-lg transition ease-in-out duration-75 bg-inherit dark:text-white"
                                    :aria-expanded="checkExpanded(value.children)"
                                    :data-accordion-target="'#dropdown-'+value.text"
                                    :aria-controls="'#dropdown-'+value.text"

                                >


                                <div class="flex justify-center items-center w-9 h-9 rounded-full group-hover:bg-main"
                                    :class="[checkExpanded(value.children) ? 'bg-main' : '']">
                                    <i v-if="value.icon" :class="[value.icon, checkExpanded(value.children) ? 'text-white' : '']" class="group-hover:text-white"></i>
                                </div>
                                <span :class="{
                                        'flex-1 ml-3 text-left whitespace-nowrap text-sm font-normal group-hover:text-main' :true,
                                        'text-main' : checkExpanded(value.children),
                                        'hidden' : layoutStore.isAsideLgActive
                                    }"

                                >{{ value.name }}</span
                                >
                                <svg
                                    data-accordion-icon
                                    aria-hidden="true"
                                    v-show="value.children.length > 0 && !layoutStore.isAsideLgActive"
                                    :class="[checkExpanded(value.children) ? 'text-main' : '']"
                                    class="w-[12px] h-[12px] dark:text-white group-hover:text-main  rotate-180 shrink-0"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 14 8">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                                </svg>

                                <ul class="group-hover:block transition-height fixed bg-white z-100 top-20 border border-gray-300 rounded right-0 left-[70px] w-56  shadow-lg shadow-gray-500/50  hidden group-hover:p-2 space-y-2"  v-if="layoutStore.isAsideLgActive" :style="'top:'+ cssTop(value.text, key)+';'">
                                    <li v-for="(chil, key) in value.children" :key="key" >
                                        <a
                                            href="#"
                                            :class="{

                                                'text-gray-900 flex items-center text-sm p-2 w-full rounded-lg transition duration-75 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700' :true,
                                                '!text-main bg-bghover hover:bg-red-100' : checkActive == chil.link
                                            }"
                                        >
                                            {{ chil.name }}
                                        </a
                                        >
                                    </li>
                                </ul>
                            </button>
                            <a  href="#"
                                :class="{
                                    'flex items-center group-hover:text-main justify-center text-mini text-gray-500' : true,
                                    '!text-main' : checkExpanded(value.children)
                                }" v-if="layoutStore.isAsideLgActive"
                                >{{ value.summary }}
                            </a>
                            <ul :id="'dropdown-'+value.text" class=" hidden py-2 space-y-2 w-48 sm:mr-2 md:mr-2 lg:mr-2 float-right border-l border-l-[#edf1f8] group-hover:border-l-red-200 before:content-[''] group-hover:before:h-3 group-hover:before:w-px group-hover:before:bg-red-200 group-hover:before:absolute group-hover:before:-top-2 group-hover:before:-left-px relative"
                            :class="{'!border-l-red-200 before:h-3 before:w-px before:bg-red-200 before:absolute before:-top-2 before:-left-px' :checkExpanded(value.children),
                            }"
                             v-show="!layoutStore.isAsideLgActive">
                                <li v-for="(chil, key) in value.children" :key="key" class="pl-4">
                                    <a
                                        href="#"
                                        :class="{
                                            'flex items-center text-sm p-2 pl-4 w-full rounded-lg transition duration-75 group hover:bg-white hover:text-main dark:text-white dark:hover:bg-gray-700' :true,
                                            'text-main bg-white' : checkActive == chil.link
                                        }"
                                    >{{ chil.name }}</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div v-else class="flow-root">
                            <a
                                href="#"
                                class="flex items-center  py-2 px-1 rounded-lg dark:text-white group"
                                :class="{'justify-center ' : layoutStore.isAsideLgActive}"
                            >
                                <div
                                    class="flex justify-center items-center w-9 h-9 rounded-full group-hover:bg-main"
                                    :class="[checkActive == value.link ? 'bg-main' : '']"
                                >
                                <i v-if="value.icon"
                                    class="flex-none group-hover:text-white text-gray-500"
                                    :class="[value.icon,checkActive == value.link ? 'text-white' : '']"
                                    >
                                </i>
                                </div>
                                <span :class="{
                                        'ml-3 text-sm group-hover:text-main text-gray-500' : true,
                                        'text-main' : checkActive == value.link
                                    }" v-if="!layoutStore.isAsideLgActive"
                                    >{{ value.name }}</span>
                            </a>
                            <a  href="#"
                                :class="{
                                    'flex items-center group-hover:text-main justify-center text-mini text-gray-500' : true,
                                    'text-main' : checkActive == value.link
                                }" v-if="layoutStore.isAsideLgActive"
                                >{{ value.summary }}
                            </a>
                        </div>
                    </li>
                </ul>

            </div>

        </aside>
</template>
