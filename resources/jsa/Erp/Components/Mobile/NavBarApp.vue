<script setup>
import Notification from '@/Erp/Components/Mobile/Notification.vue'
import AppList from '@/Erp/Components/Mobile/AppList.vue'
import UserProfile from '@/Erp/Components/UserProfile.vue'
import { useLayoutStore } from '@/Stores/layout.js'
import { reactive, computed,ref,getCurrentInstance, onMounted } from 'vue'

import { usePage,Link, router } from '@inertiajs/vue3'

const internalInstance = getCurrentInstance()
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
const show = ref(false)
const showNoti = ref(false)

let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_top)
const closeDom = () => {
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()

}
const handleNotificationClick = (e) => {
    internalInstance.appContext.config.globalProperties.$overflowHidenBody()
    showNoti.value = !showNoti.value
    console.log(showNoti.value)
}
const handleMenuLeft = () => {
  layoutStore.isAsideLgActive = false
}
const showApp = () => {
    internalInstance.appContext.config.globalProperties.$overflowHidenBody()
    show.value = !show.value
}
</script>
<template>
    <nav class="bg-white border-b border-gray-200  dark:bg-gray-800 dark:border-gray-700 fixed left-0 right-0 top-0 z-40"
        :class="{
            'md:ml-16' : layoutStore.isAsideLgActive,
            'md:ml-60' : !layoutStore.isAsideLgActive
        }">
        <div class="flex flex-wrap items-center">
            <div class="flex items-center w-full">
                <div class="flex justify-between  w-full items-center group relative py-2.5">
                    <button
                        @click="showApp"
                        type="button"

                        class="w-9 h-9 flex items-center justify-center group text-gray-500 rounded-lg hover:text-gray-900 hover:bg-bghover group dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700  dark:focus:ring-main"
                    >
                        <span class="sr-only">app</span>
                        <!-- Icon -->
                        <i class="icon-thumbnails text-icon dark:text-white group-hover:text-main"></i>

                    </button>
                    <span class="font-medium">{{ title }}</span>
                    <button
                        @click="handleNotificationClick"
                        type="button"
                        class="w-9 h-9 flex items-center justify-center gourp ml-1.5 p-2 text-gray-500 rounded-lg group hover:text-gray-900 hover:bg-bghover dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        >
                        <span class="sr-only">View notifications</span>
                        <i class="icon-notify text-icon dark:text-white group-hover:text-main"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <Transition name="slide">
       <AppList  v-model="show" v-if="show"></AppList>
    </Transition >
    <Transition name="slide-right">
        <Notification v-model="showNoti" v-if="showNoti"></Notification>
    </Transition >

</template>

