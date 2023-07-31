<script setup>
import { reactive, computed,ref, watch,onMounted, getCurrentInstance, onUpdated } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import Menu from './Menu.vue'
import UserProfile from './UserProfile.vue'
let menu_bottom = reactive({})
let showMenu = ref(false)
let showUser = ref(false)

menu_bottom = computed(() => usePage().props.navigation.menu_bottom)
const internalInstance = getCurrentInstance()

const handleDetailMenu = (value) => {
   switch(value.summary) {
      case 'user':
        showUser.value = true
        break;
      case 'menu':
        showMenu.value = true
        break;
    }
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
    internalInstance.appContext.config.globalProperties.$overflowHidenBody()

}
const handleClose = () => {
    showMenu.value = false
    showUser.value = false
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()

}
</script>
<template>
    <div class="fixed bottom-0 left-0 w-screen h-14 bg-white" >
        <div class="flex items-center justify-center w-full h-full"
            :class="{
                'px-4' : menu_bottom.length == 4
            }">
            <div v-for="(value, key) in menu_bottom" :key="key" class="w-1/2" :class="'w-1/'+menu_bottom.length" @click.prevent="handleDetailMenu(value)">
                    <div class="text-center text-icon"><i :class="[value.icon, value.class]"></i></div>
                    <div class="text-center text-mini text-icon" >{{ value.name }}</div>
            </div>
        </div>
    </div>
    <div>
        <div class="absolute w-screen h-screen top-0 left-0 z-50" v-if="showMenu" @click="handleClose"></div>
        <Transition name="slide-down" >
           <Menu  v-if="showMenu"></Menu>
        </Transition >
    </div>
    <div>
        <div class="absolute w-screen h-screen top-0 left-0 z-50" v-if="showUser" @click="handleClose"></div>
        <Transition name="slide-down" >
           <UserProfile   v-if="showUser"></UserProfile>
        </Transition >
    </div>
</template>
<style type="text/css">
</style>
