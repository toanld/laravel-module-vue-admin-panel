<script setup>
import BaseIcon from '@/Components/BaseIcon.vue'
import { Toggle } from 'flowbite-vue'
import { ref } from 'vue'
import {
mdiCogOutline,
mdiInformationVariantCircleOutline,
mdiNoteMultipleOutline,
mdiLogout,
mdiKeyVariant,
mdiMessageProcessingOutline,
mdiTranslateVariant,
mdiCircleSlice8
} from "@mdi/js";
const toggle = ref(true)
</script>
<template>
    <!-- Dropdown menu -->
    <div
        class="hidden !fixed z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600 rounded-xl pb-2 w-72"
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
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center py-2 px-1 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <BaseIcon
                    :path="mdiCogOutline"
                    class="flex-none text-gray-800 group-hover:block mr-1"
                    :size="18"
                  />

                Cài đặt hệ thống
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex py-2 px-1 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <BaseIcon
                    :path="mdiInformationVariantCircleOutline"
                    class="flex-none text-gray-800 group-hover:block mr-1"
                    :size="18"
                  />
                Thông tin đối soát
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex py-2 px-1 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <BaseIcon
                    :path="mdiNoteMultipleOutline"
                    class="flex-none text-gray-800 group-hover:block mr-1"
                    :size="18"
                  />
                Hướng dẫn sử dụng
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex justify-between py-2 px-1 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center">
                    <BaseIcon
                        :path="mdiNoteMultipleOutline"
                        class="flex-none text-gray-800 group-hover:block mr-1"
                        :size="18"
                      />
                    Đổi màu giao diện
                </div>
                <div>
                    <BaseIcon
                        :path="mdiCircleSlice8"
                        class="flex-none text-main group-hover:block mr-1"
                        :size="18"
                      />

                </div>
                </a>
            </li>
            <li class="px-3">
                <div
                    class="flex justify-between items-center py-2 px-1 rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center">
                    <BaseIcon
                        :path="mdiMessageProcessingOutline"
                        class="flex-none text-gray-800 group-hover:block mr-1"
                        :size="18"
                      />
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
            <li class="px-3">
                <a
                    href="#"
                    class="flex py-2 px-1 justify-between rounded-lg text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
                >
                <div class="flex items-center">
                    <BaseIcon
                        :path="mdiTranslateVariant"
                        class="flex-none text-gray-800 group-hover:block mr-1"
                        :size="18"
                      />
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
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center rounded-lg  py-2 px-1 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                <BaseIcon
                    :path="mdiKeyVariant"
                    class="flex-none text-gray-800 group-hover:block mr-1"
                    :size="18"
                  />

                    Đổi mật khẩu
                </a>
            </li>
            <li class="px-3">
                <a
                    href="#"
                    class="flex items-center  rounded-lg py-2 px-1 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >
                <BaseIcon
                    :path="mdiLogout"
                    class="flex-none text-gray-800 group-hover:block mr-1"
                    :size="18"
                  />

                    Đăng xuất
                </a>
            </li>
        </ul>
    </div>
</template>
