<script setup>
import BaseIcon from '@/Components/BaseIcon.vue'
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
</script>
<template>
    <!-- Dropdown menu -->
    <div
        class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl pb-2 w-72"
        id="dropdown"
    >
        <div class="py-3 px-4">
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
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex items-center p-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-settings flex-none text-gray-800 group-hover:block mr-2"></i>

                Cài đặt hệ thống
                </a>
            </li>
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex p-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-bank flex-none text-gray-800 group-hover:block mr-2"></i>
                Thông tin đối soát
                </a>
            </li>
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex p-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <i class="icon icon-book flex-none text-gray-800 group-hover:block mr-2"></i>
                Hướng dẫn sử dụng
                </a>
            </li>
            <li class="px-3 group relative h-11">
                <a
                    href="#"
                    class="flex justify-between p-2 rounded-lg text-sm group-hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white "
                >
                <div class="flex items-center justify-center">
                    <i class="icon icon-theme flex-none text-gray-800  mr-2"></i>

                   <!--  <BaseIcon
                        :path="mdiNoteMultipleOutline"
                        class="flex-none text-gray-800 group-hover:block mr-1"
                        :size="18"
                      /> -->
                    Đổi màu giao diện
                </div>
                <div class="flex justify-end items-center">
                    <BaseIcon
                        :path="mdiCircleSlice8"
                        class="flex-none text-main mr-1"
                        :size="18"
                      />

                </div>
                </a>
                <div class="group-hover:absolute group-hover:top-0 group-hover:-left-48 group-hover:grid group-hover:w-48 group-hover:h-44 group-hover:bg-white group-hover:shadow group-hover:shadow-2xl grid grid-cols-3 gap-3 p-5 hidden justify-items-center items-center">
                    <div class="color-m blue cursor-pointer w-8 h-8 relative rounded-full" :class="{'selected' : key == colorMain }" :style="'background:'+color+';'" v-for="(color, key) in arrColor" :key="key" @click="handleColorClick(key)"></div>
                   <!--  <div class="color-m pink  cursor-pointer w-8 h-8 relative rounded-full selected" style="background: rgb(255, 75, 145);"></div>
                    <div class="color-m orange  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(251, 105, 0);"></div>
                    <div class="color-m lightBlue  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(0, 180, 237);"></div>
                    <div class="color-m lightGreen  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(137, 185, 0);"></div>
                    <div class="color-m red  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(249, 73, 73);"></div>
                    <div class="color-m purple  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(202, 88, 255);"></div>
                    <div class="color-m teal  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(2, 187, 165);"></div>
                    <div class="color-m lightOrange  cursor-pointer w-8 h-8 relative rounded-full" style="background: rgb(255, 156, 81);"></div> -->
                </div>
            </li>
            <li class="px-3 h-11">
                <div
                    class="flex justify-between items-center p-2 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center">
                    <i class="icon icon-chat flex-none text-gray-800 group-hover:block mr-2"></i>
                        Chat với XX
                </div>
                <div class="">
                     <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="w-9 h-5 bg-gray-200  peer-focus:ring-main dark:peer-focus:ring-main rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-main"></div>
                    </label>

                </div>
                </div>
            </li>
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex p-2 justify-between rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center">
                    <i class="icon icon-google-translate flex-none text-gray-800 group-hover:block mr-2"></i>
                        Ngôn ngữ

                </div>
                <div class="mr-2">VN</div>
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
                    class="flex items-center rounded-lg p-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <i class="icon icon-key flex-none text-gray-800 group-hover:block mr-2"></i>
                    Đổi mật khẩu
                </a>
            </li>
            <li class="px-3 h-11">
                <a
                    href="#"
                    class="flex items-center  rounded-lg p-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                    <i class="icon icon-export flex-none text-gray-800 group-hover:block mr-2"></i>
                    Đăng xuất
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
