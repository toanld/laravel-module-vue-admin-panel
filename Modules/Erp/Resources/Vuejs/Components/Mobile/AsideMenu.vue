<script setup>
import { reactive, computed,ref, watch,onMounted, getCurrentInstance, onUpdated } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import Menu from './Menu.vue'
let menu_bottom = reactive({})
let show = ref(false)

menu_bottom = computed(() => usePage().props.navigation.menu_bottom)

const internalInstance = getCurrentInstance()

const handleDetailMenu = (value) => {
    show.value = true
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
    internalInstance.appContext.config.globalProperties.$overflowHidenBody()

}
const handleClose = () => {
    show.value = false
    document.querySelector('.bow-old').classList.remove('block')
    document.querySelector('.bow-old').classList.add('hidden')
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()

}
</script>
<template>
    <div class="fixed bottom-0 left-0 w-screen h-14 bg-white" v-click-outside="handleClose">
        <div class="flex items-center justify-center w-full h-full"
            :class="{
                'px-4' : menu_bottom.length == 4
            }">
            <div v-for="(value, key) in menu_bottom" :key="key" :class="'w-1\/'+menu_bottom.length" @click.prevent="handleDetailMenu(value)">
                    <div class="text-center text-icon"><i :class="[value.icon, value.class]"></i></div>
                    <div class="text-center text-mini text-icon" >{{ value.name }}</div>
            </div>
        </div>
    </div>
    <Transition name="slide-down" >
       <Menu   v-if="show"></Menu>
    </Transition >
</template>
<style type="text/css">
</style>
