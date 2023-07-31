<script setup>
import { reactive, computed,ref, watch,onMounted, getCurrentInstance } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import BaseIcon from '@erp/Components/BaseIcon.vue'
// import { Tabs, Tab } from 'flowbite-vue'
import IconM from '@erp/Components/IconM.vue'

import tabs from '@erp/Components/Tabs.vue'
import tab from '@erp/Components/Tab.vue'
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
const showColor = ref(false)
let menu = reactive({})


menu = computed(() => usePage().props.navigation.menu_app)
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
const handlePaneClick = (e) => {
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
}

const handleShowColor = () => {
    showColor.value = !showColor.value
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
                <div class="overflow-y-auto h-screen app w-full pb-24">
                    <div class="block rounded-lg bg-white m-3">
                        <div class="uppercase text-xs pl-3 pt-5 pb-3 font-bold">
                            Tiện ích
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                                <i style="color: #8b0ae4; background-color: #8b0ae414;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-coins mr-4" ></i>

                                <div class="w-full h-14 flex items-center border-b border-b-gray-100 mr-2">
                                    Ứng lương
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                                 <i style="color: #15c872; background-color: #15c87214;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-up-right mr-4" ></i>

                                <div class="w-full h-14 flex items-center mr-2">
                                    Lộ trình thăng tiến
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="block rounded-lg bg-white m-3">
                        <div class="uppercase text-xs pl-3 pt-5 pb-3 font-bold">
                            Cài đặt và hỗ trợ
                        </div>
                        <div class=" px-3">
                            <a href="#" class="flex items-center">
                                 <i style="color: #f24141; background-color: #f2414114;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon icon-settings mr-4" ></i>

                                <div class="w-full h-14 flex items-center border-b border-b-gray-100 mr-2">
                                    Cài đặt hệ thống
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                             <i style="color: #8b0ae4; background-color: #8b0ae414;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-coins mr-4" ></i>

                            <div class="w-full h-14 flex items-center border-b border-b-gray-100 mr-2">
                                Dashboard
                            </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center" @click="handleShowColor">
                                <i style="color: #20afff; background-color: #20afff14;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-theme mr-4" ></i>

                                <div class="w-full h-14 flex items-center mr-2">
                                    Đổi màu giao diện
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                                <i style="color: #15c872; background-color: #15c87214;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-google-translate mr-4" ></i>

                                <div class="w-full h-14 flex items-center mr-2">
                                    Ngôn ngữ
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                                <i style="color: #8b0ae4; background-color: #8b0ae414;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-key mr-4" ></i>

                                <div class="w-full h-14 flex items-center mr-2">
                                    Đổi mật khẩu
                                </div>
                            </a>
                        </div>
                        <div class="px-3">
                            <a href="#" class="flex items-center">
                                <i style="color: #ff0000; background-color: #ff000014;" class="w-11 h-11 flex justify-center items-center !text-xl m-auto flex-none group-hover:text-white rounded-xl icon-export mr-4" ></i>

                                <div class="w-full h-14 flex items-center mr-2">
                                    Đăng xuất
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </tab>
            <tab name="lt" title="Lối tắt" class="bg-white -mt-2">
                <tabs variant="underline" class=" m-2 py-2 bg-gray-100" child=true>
                    <tab name="use" title="Hay dùng">
                        <div>s</div>
                    </tab>
                    <tab name="save" title="Đã lưu">
                        <div class="w-full p-2">
                            <div class="flex p-2 hover:bg-gray-100 group gap-1 flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 px-1">
                                    <i class="icon-filters"></i>
                                </div>
                                <div>
                                    <div>Danh sách nhân sự thuộc Ban điều hành</div>
                                    <div class="whitespace-no-wrap text-gray-600 overflow-hidden text-xs">Hồ sơ nhân sự</div>
                                </div>
                                <div class="bookmark-item-actions gap-3 pl-3 pr-3 absolute right-0 top-0 bottom-0 inline-flex items-center overflow-hidden z-10 opacity-0 max-w-0 rounded-r-lg group-hover:max-w-xs group-hover:opacity-100 group-hover:bg-gray-100  delay-100 " style="transition: max-width .2s ease-in,opacity .2s ease-in;">
                                <div class="bookmark-action transition ease-in duration-100 cursor-pointer" title="Thêm vào danh sách hay dùng">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 0 1034 1024" width="1em" height="1em">
                                       <path fill="currentColor" d="M511.998 115.41c12.2109 0 23.3555 6.94727 28.7324 17.9092l120.585 245.863l239.347 35.2354c11.9766 1.7627 21.9346 10.1348 25.7275 21.6318s0.772461 24.1514 -7.80371 32.6963l-179.46 178.794l60.0791 264.631
                                    c2.75586 12.1338 -1.77148 24.7588 -11.6055 32.3799s-23.1934 8.84961 -34.2529 3.15332l-241.348 -124.301l-241.347 124.301c-11.0605 5.69629 -24.418 4.4668 -34.252 -3.15332s-14.3604 -20.2451 -11.6064 -32.3799l60.0811 -264.631l-179.46 -178.794
                                    c-8.57715 -8.54492 -11.5967 -21.1992 -7.80371 -32.6963s13.751 -19.8691 25.7275 -21.6318l239.344 -35.2354l120.589 -245.863c5.37598 -10.9609 16.5205 -17.9092 28.7266 -17.9092zM511.998 220.08l-99.2695 202.401
                                    c-4.64062 9.46191 -13.6426 16.0322 -24.0693 17.5674l-192.872 28.3936l146.797 146.253c7.80273 7.77344 11.0586 19.0117 8.62109 29.751l-48.792 214.912l194.934 -100.399c9.19531 -4.73242 20.1094 -4.73242 29.3037 0l194.935 100.399l-48.7939 -214.912
                                    c-2.43555 -10.7393 0.819336 -21.9785 8.62305 -29.751l146.795 -146.253l-192.87 -28.3936c-10.4277 -1.53516 -19.4297 -8.10449 -24.0674 -17.5674z"></path>
                                    </svg>
                                </div>
                                <div class="bookmark-action ease-in duration-100 cursor-pointer"  title="Sửa lối tắt">
                                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="16px" height="16px"><path d="M 36 5.0097656 C 34.205301 5.0097656 32.410791 5.6901377 31.050781 7.0507812 L 8.9160156 29.183594 C 8.4960384 29.603571 8.1884588 30.12585 8.0253906 30.699219 L 5.0585938 41.087891 A 1.50015 1.50015 0 0 0 6.9121094 42.941406 L 17.302734 39.974609 A 1.50015 1.50015 0 0 0 17.304688 39.972656 C 17.874212 39.808939 18.39521 39.50518 18.816406 39.083984 L 40.949219 16.949219 C 43.670344 14.228094 43.670344 9.7719064 40.949219 7.0507812 C 39.589209 5.6901377 37.794699 5.0097656 36 5.0097656 z M 36 7.9921875 C 37.020801 7.9921875 38.040182 8.3855186 38.826172 9.171875 A 1.50015 1.50015 0 0 0 38.828125 9.171875 C 40.403 10.74675 40.403 13.25325 38.828125 14.828125 L 36.888672 16.767578 L 31.232422 11.111328 L 33.171875 9.171875 C 33.957865 8.3855186 34.979199 7.9921875 36 7.9921875 z M 29.111328 13.232422 L 34.767578 18.888672 L 16.693359 36.962891 C 16.634729 37.021121 16.560472 37.065723 16.476562 37.089844 L 8.6835938 39.316406 L 10.910156 31.521484 A 1.50015 1.50015 0 0 0 10.910156 31.519531 C 10.933086 31.438901 10.975086 31.366709 11.037109 31.304688 L 29.111328 13.232422 z"></path>
                                    </svg>
                                </div><div class="bookmark-action ease-in duration-100 cursor-pointer" title="Xóa khỏi danh sách lối tắt">

                                <svg xmlns="http://www.w3.org/2000/svg" class="ease-in duration-100" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="-10 0 1034 1024" width="1em" height="1em">
                                   <path fill="currentColor" d="M414.753 181.333c-4.59082 0 -8.66699 2.93848 -10.1191 7.29297l-18.9014 56.707h252.536l-18.9004 -56.707c-1.45117 -4.35449 -5.53027 -7.29297 -10.1211 -7.29297h-194.493h-0.000976562zM705.733 245.333h190.268c17.6729 0 32 14.3271 32 32s-14.3271 32 -32 32
                                h-55.3936l-32.7139 490.641c-5.60156 84.0498 -75.4082 149.359 -159.646 149.359h-272.497c-84.2344 0 -154.042 -65.3096 -159.645 -149.359l-32.71 -490.641h-55.3965c-17.6729 0 -32 -14.3271 -32 -32s14.3271 -32 32 -32h190.269l25.6484 -76.9453
                                c10.1631 -30.4893 38.6973 -51.0547 70.835 -51.0547h194.493c32.1406 0 60.6719 20.5654 70.835 51.0547l25.6514 76.9453h0.00195312zM776.462 309.333h-528.923l32.4258 486.387c3.3623 50.4287 45.2471 89.6133 95.7881 89.6133h272.497
                                c50.543 0 92.4287 -39.1846 95.791 -89.6133l32.4219 -486.387h-0.000976562zM426.668 416c-17.6729 0 -32 14.3271 -32 32v298.667c0 17.6729 14.3271 32 32 32s32 -14.3271 32 -32v-298.667c0 -17.6729 -14.3271 -32 -32 -32zM629.334 448v170.667
                                c0 17.6729 -14.3271 32 -32 32s-32 -14.3271 -32 -32v-170.667c0 -17.6729 14.3271 -32 32 -32s32 14.3271 32 32z"></path>
                                </svg></div></div>
                            </div>
                        </div>
                    </tab>
                    <tab name="create" title="Tạo nhanh">
                        <div class="w-full p-2 overflow-y-auto h-screen block app pb-54">
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-coins"></i>
                                </div>
                                <div>Ứng lương</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-questions-circle"></i>
                                </div>
                                <div>Yêu cầu hỗ trợ</div>
                                <IconM></IconM>
                            </div>
                            <div class="h-px w-full bg-gray-100 my-2"></div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-paste"></i>
                                </div>
                                <div>Công việc</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-project"></i>
                                </div>
                                <div>Dựa án</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-workflow"></i>
                                </div>
                                <div>Công việc quy trình</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-clipboard"></i>
                                </div>
                                <div>Đơn từ</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-manager"></i>
                                </div>
                                <div>Hồ sơ ứng viên</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-calendar"></i>
                                </div>
                                <div>Lịch phỏng vấn</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-contract-job"></i>
                                </div>
                                <div>Hợp đồng lao động</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-price-list"></i>
                                </div>
                                <div>Đơn hàng bán</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-reply-arrow"></i>
                                </div>
                                <div>Phiếu thu</div>
                                <IconM></IconM>
                            </div>
                            <div class="flex p-2 hover:bg-gray-100 group gap-3
                                flex rounded-lg justify-start items-center relative">
                                <div class="flex items-center justify-center flex-shrink-0 text-gray-600 pl-2 py-1.5">
                                    <i class="icon-forward-arrow"></i>
                                </div>
                                <div>Phiếu chi</div>
                                <IconM></IconM>
                            </div>
                         </div>
                    </tab>
                </tabs>
                <div class="absolute bottom-0 left-0 w-full h-10 bg-white border-t border-t-gray-200 flex justify-center items-center text-main uppercase">
                     <div class="icon-plus-circle mr-2  !text-2xl text-main transition duration-150 ease-out hover:ease-in cursor-pointer "></div>
                    Thêm mới
                </div>
            </tab>
          </tabs>
        </div>
        <div class="fixed bottom-0 left-0 w-screen h-screen " v-show="showColor" @click="handleShowColor">
            <div class="bg-gray-200 opacity-50 absolute bottom-0 left-0 w-screen h-screen" v-if="showColor"></div>
            <Transition name="slide-down">
            <div class="absolute bottom-0 left-0 w-screen bg-white rounded-t-xl" v-if="showColor">
                <div class="relative flex justify-center items-center font-bold h-14" @click="handleShowColor">
                    <i class="icon-left absolute left-3 top-3 font-normal"></i>
                    Đổi màu giao diện
                </div>
                <div class=" grid grid-cols-3 px-10 py-6 justify-center gap-4 border-t border-t-gray-200" >
                    <div class="color-m blue cursor-pointer w-8 h-8 relative rounded-full" :class="{'selected' : key == colorMain }" :style="'background:'+color+';'" v-for="(color, key) in arrColor" :key="key" @click="handleColorClick(key)"></div>
                </div>
            </div>
            </Transition>
        </div>
    </div>

</template>
<style type="text/css">
.slide-down-enter-active {
  transition: all 0.3s ease-out;
}

.slide-down-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-down-enter-from,
.slide-down-leave-to {
  transform: translateY(100px);
  opacity: 0;
}

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

.slide-right-enter-active {
  transition: all 0.3s ease-out;
}

.slide-right-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-right-enter-from,
.slide-right-leave-to {
  transform: translateX(300px);
  opacity: 0;
}
.app::-webkit-scrollbar
{
    width: 0px;
    background-color: white;
}
</style>
