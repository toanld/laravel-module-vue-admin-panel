<script setup>
import BaseIcon from '@erp/Components/BaseIcon.vue'
import { ref, watch, onMounted } from 'vue'
import {
mdiCircleSlice8
} from "@mdi/js";

const arrColor = ref({
        'blue'      : '#6e62ff',
        'pink'      : '#ff4b91',
        'orange'    : '#fb6900',
        'light'     : '#00b4ed',
        'green'     : '#89b900',
        'red'       : '#f94949',
        'violet'    : '#ca58ff',
        'sky'       : '#02bba5',
        'amber'     : '#ff9c51',
    })
const colorMain = ref('red')
let showColor = ref(false)
onMounted(() => {
    console.log(arrColor.value)
    changeColor()
})
watch(colorMain, (newColor) => {
    changeColor()
})
const changeColor = () => {
    document.documentElement.style.setProperty('--color-main', arrColor.value[colorMain.value]);
    document.documentElement.style.setProperty('--color-bg-hover', arrColor.value[colorMain.value]+'14');
}
const handleColorClick = (color) => {
    colorMain.value = color
}
const handleChangeColorClick = () => {
    showColor.value = true
}
const handleClose = () => {
    showColor.value = false
}
</script>
<template>
    <!-- Dropdown menu -->
    <div
        class="absolute bg-white w-full rounded-t-xl bottom-0 left-0 z-50 "
        id="dropdown"
    >
        <div class="py-3 px-4 border-b border-b-gray-200">
            <div class="flex-shrink-0 flex items-center">
                <img
                    class="w-11 h-11 rounded-full mr-2"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                    alt="Joseph McFall avatar"
                />
                <span class="block text-sm text-gray-900 truncate dark:text-white">Name</span>
            </div>

        </div>
        <ul
            class="py-1 text-gray-700 dark:text-gray-300"
            aria-labelledby="dropdown"
        >
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center px-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-coins flex-none text-gray-800 group-hover:block mr-2"></i>
                <div class="w-full border-b border-b-gray-200 h-12 flex items-center">Ứng lương</div>
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center px-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-settings flex-none text-gray-800 group-hover:block mr-2"></i>

                <div class="w-full border-b border-b-gray-200 h-12 flex items-center">Cài đặt hệ thống</div>
                </a>
            </li>

            <li class="px-3 border-b border-b-gray-200">
                <a
                    href="#"
                    class="flex items-center px-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-up-right flex-none text-gray-800 group-hover:block mr-2"></i>
                <div class="w-full  h-12 flex items-center">Lộ trình thăng tiến</div>
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center px-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-board flex-none text-gray-800 group-hover:block mr-2"></i>

                <div class="w-full border-b border-b-gray-200 h-12 flex items-center">Dashboard</div>
                </a>
            </li>
            <li class="px-3 group relative " @click="handleChangeColorClick" v-click-outside="handleClose">
                <a
                    href="#"
                    class="flex items-center px-2 rounded-lg text-sm group-hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white "
                >
                <div class="flex items-center justify-center w-full">
                    <i class="icon icon-theme flex-none text-gray-800  mr-2"></i>
                    <div class="w-full border-b border-b-gray-200  h-12 flex items-center">Đổi màu giao diện</div>
                </div>
                <div class="absolute right-5 top-3">
                    <BaseIcon
                        :path="mdiCircleSlice8"
                        class="flex-none text-main mr-1"
                        :size="18"
                      />

                </div>
                </a>
                 <Transition name="slide-down" >
                    <div v-if="showColor" class="fixed bottom-0 left-0 w-full h-44 bg-white shadow shadow-2xl grid grid-cols-3 gap-3 p-5 justify-items-center items-center z-50">
                        <div class="color-m blue cursor-pointer w-8 h-8 relative rounded-full" :class="{'selected' : key == colorMain }" :style="'background:'+color+';'" v-for="(color, key) in arrColor" :key="key" @click="handleColorClick(key)"></div>
                    </div>
                </Transition >
            </li>
            <li class="px-3 h-11 relative">
                <a
                    href="#"
                    class="flex px-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center w-full">
                    <i class="icon icon-google-translate flex-none text-gray-800 group-hover:block mr-2"></i>
                    <div class="w-full border-b border-b-gray-200  h-12 flex items-center">Ngôn ngữ</div>

                </div>
                <div class="mr-2 absolute right-5 top-3">VN</div>
                </a>
            </li>

        </ul>
        <ul
            class="py-1 text-gray-700 dark:text-gray-300"
            aria-labelledby="dropdown"
            >
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex items-center rounded-lg px-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <i class="icon icon-key flex-none text-gray-800 group-hover:block mr-2"></i>
                    <div class="w-full border-b border-b-gray-200  h-12 flex items-center">Đổi mật khẩu</div>
                </a>
            </li>
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex items-center  rounded-lg px-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <i class="icon icon-export flex-none text-gray-800 group-hover:block mr-2"></i>
                    <div class="w-full   h-12 flex items-center">Đăng xuất</div>
                </a>
            </li>
        </ul>
    </div>
</template>
<style lang="css">
    .color-m{
            transition: transform .2s;
    }
    .color-m:hover{
        transform: scale(1.15);
    }
    .color-m.selected:before {
        position: absolute;
        font-family: 'Flaticon';
        content: "\ea4f";
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        color: #fff;
        font-size: 1.3em;
    }
</style>
