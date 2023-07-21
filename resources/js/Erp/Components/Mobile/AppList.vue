<script setup>
import { reactive, computed,ref, onMounted, getCurrentInstance } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import BaseIcon from '@/Components/BaseIcon.vue'
// import { Tabs, Tab } from 'flowbite-vue'

import tabs from '@/Erp/Components/Tabs.vue'
import tab from '@/Erp/Components/Tab.vue'
const activeTab = ref('use')
import {
mdiCheckCircleOutline
} from "@mdi/js";
const props = defineProps({
    modelValue: {
        type: [String, Number, Boolean, Array, Object],
        default: ''
    },
})
const internalInstance = getCurrentInstance()
const emit = defineEmits(['update:modelValue'])
let menu = reactive({})


menu = computed(() => usePage().props.navigation.menu_app)

const handlePaneClick = (e) => {
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
}


const handleCloseModel = () => {
    internalInstance.appContext.config.globalProperties.$removeOverflowHidenBody()
    emit('update:modelValue', false)
}
</script>
<template>
     <!-- Apps -->
    <div
        class="fixed left-0 bg-white h-full z-50 w-full"
        id="apps-dropdown"
        >
        <div class="h-12 w-full relative flex justify-center items-center border-b border-gray-200">
            <i class="icon-left absolute top-2.5 left-2.5 cursor-pointer" @click="handleCloseModel"></i>
            Tất cả phân hệ
        </div>
        <div class="block text-base h-full bg-gray-100 font-medium" >
            <tabs variant="underline" v-model="activeTab" class="!px-0 bg-white" >
            <tab name="use" title="Hay dùng" class="text-main">
                <div class="text-main ">Lorem...</div>
            </tab>
            <tab name="all" title="Tất cả" >
                <div class="block">
                    <div class="max-w-full">
                        <div class=" grid grid-cols-1 overflow-y-auto h-screen pb-28 app">
                            <div v-for="(value, key) in menu" :key="key" class="m-3 bg-white rounded-lg ">
                                <div class="uppercase text-xs pl-3 pt-5 pb-3 font-bold">{{ value.name }}</div>
                                <div class="grid grid-cols-3 p-3">
                                    <div class="" v-for="(child, i) in value.children" :key="i">
                                        <a href="#" class="w-full text-center group rounded-2xl border border-white hover:border-gray-200">

                                                <i v-if="child.icon" :style="child.color" class="w-14 h-14 flex justify-center items-center !text-2xl m-auto flex-none group-hover:text-white rounded-xl" :class="child.icon"></i>
                                            <div class="text-center w-full mt-2">
                                                <div class="text-sm text-gray-200 text-gray-800 h-6">
                                                    {{ child.name }}
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </tab>
            <tab name="user" title="Cá nhân" >
                <div class="block rounded-lg bg-white m-3">
                    <div class="uppercase text-xs pl-3 pt-5 pb-3 font-bold">
                        Tiện ích
                    </div>
                    <div class="flex items-center px-3">
                         <i style="color: #15c872; background-color: #15c87214;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-coins mr-4" ></i>

                        <div class="w-full h-14 flex items-center border-b border-b-gray-100 mr-2">
                            Ứng lương
                        </div>
                    </div>
                    <div class="flex items-center px-3">
                         <i style="color: #15c872; background-color: #15c87214;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-up-right mr-4" ></i>

                        <div class="w-full h-14 flex items-center mr-2">
                            Lộ trình thăng tiến
                        </div>
                    </div>
                </div>
            </tab>
          </tabs>
        </div>

    </div>

</template>
<style type="text/css">

.slide-enter-active {
  transition: all 0.3s ease-out;
}

.slide-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-enter-from,
.slide-leave-to {
  transform: translateX(-300px);
  opacity: 0;
}

.app::-webkit-scrollbar
{
    width: 0px;
    background-color: white;
}
</style>
