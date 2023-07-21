<script setup>
import { reactive, computed,ref, onMounted } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'
import BaseIcon from '@erp/Components/BaseIcon.vue'
// import { Tabs, Tab } from 'flowbite-vue'

import tabs from '@erp/Components/Tabs.vue'
import tab from '@erp/Components/Tab.vue'
const activeTab = ref('use')
import {
mdiEarth,
mdiBookOpenPageVariantOutline,
mdiBagChecked,
mdiMonitorEdit,
mdiTransitConnectionVariant,
mdiCalendarTextOutline,
mdiClipboardTextClockOutline,
mdiLeadPencil,
mdiAccount,
mdiNoteOutline,
mdiLaptop,
mdiAccountPlus,
mdiAccountSupervisor,
mdiCheckboxMarkedCircleOutline,
mdiCurrencyUsd,
mdiFormatListChecks,
mdiFinance,
mdiSchool,
mdiBullhornOutline,
mdiMessageProcessingOutline,
mdiBagPersonal,
mdiPercentOutline,
mdiCubeOutline,
mdiBagPersonalTag,
mdiHeadset,
mdiCartVariant,
mdiClockTimeThreeOutline,
mdiVectorTriangle,
mdiXml,
mdiCheckCircleOutline
} from "@mdi/js";
const mdiIcon = {
    mdiEarth: mdiEarth,
    mdiBookOpenPageVariantOutline : mdiBookOpenPageVariantOutline,
    mdiBagChecked : mdiBagChecked,
    mdiMonitorEdit : mdiMonitorEdit,
    mdiTransitConnectionVariant : mdiTransitConnectionVariant,
    mdiCalendarTextOutline : mdiCalendarTextOutline,
    mdiClipboardTextClockOutline : mdiClipboardTextClockOutline,
    mdiLeadPencil : mdiLeadPencil,
    mdiAccount : mdiAccount,
    mdiNoteOutline : mdiNoteOutline,
    mdiLaptop : mdiLaptop,
    mdiAccountPlus : mdiAccountPlus,
    mdiAccountSupervisor : mdiAccountSupervisor,
    mdiCheckboxMarkedCircleOutline : mdiCheckboxMarkedCircleOutline,
    mdiCurrencyUsd : mdiCurrencyUsd,
    mdiFormatListChecks : mdiFormatListChecks,
    mdiFinance : mdiFinance,
    mdiSchool : mdiSchool,
    mdiBullhornOutline : mdiBullhornOutline,
    mdiMessageProcessingOutline : mdiMessageProcessingOutline,
    mdiBagPersonal : mdiBagPersonal,
    mdiPercentOutline : mdiPercentOutline,
    mdiCubeOutline : mdiCubeOutline,
    mdiBagPersonalTag : mdiBagPersonalTag,
    mdiHeadset : mdiHeadset,
    mdiCartVariant : mdiCartVariant,
    mdiClockTimeThreeOutline : mdiClockTimeThreeOutline,
    mdiVectorTriangle : mdiVectorTriangle,
    mdiXml : mdiXml,
}
let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_app)

const handlePaneClick = (e) => {
    document.querySelector('.bow-old').classList.remove('hidden')
    document.querySelector('.bow-old').classList.add('block')
}


</script>
<template>
     <!-- Apps -->
    <div
        class="hidden  shadow-3xl z-[100] border border-gray-200 overflow-hidden z-50 my-4 sm:w-11/12 md:w-11/12 lg:w-11/12 xl:w-9/12 text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:bg-gray-700 dark:divide-gray-600 rounded-xl !-left-10"
        id="apps-dropdown"

    >
        <div class="block py-2 px-4 text-base font-medium text-gray-700" >
            <tabs variant="underline" v-model="activeTab" class="" >
            <tab name="use" title="Hay dùng" class="text-main">
              <div class="text-main ">Lorem...</div>
            </tab>
            <tab name="all" title="Tất cả" >
                <div class="block">
                    <div class="max-w-full">
                        <div class="w-full grid lg:grid-cols-4 lg:gap-4 sm:grid-cols-1 sm:h-600 md:grid-cols-1 md:h-600 sm:overflow-y-auto md:overflow-y-auto">
                            <div v-for="(value, key) in menu" :key="key">
                                <div class="lg:block md:hidden uppercase text-xs pl-3 pt-5 pb-3 font-bold">{{ value.name }}</div>
                                <div class="lg:block md:hidden" v-for="(child, i) in value.children" :key="i">
                                    <a href="#" class="w-full p-3 flex items-center group rounded-2xl border border-white hover:border-gray-200">

                                            <i v-if="child.icon" :style="child.color" class="w-9 h-9 flex justify-center items-center !text-lg flex-none group-hover:text-white rounded-xl" :class="child.icon"></i>
                                       <!--  <BaseIcon
                                            :stype="child.color"
                                            v-if="child.icon"
                                            :path="mdiIcon[child.icon] ? mdiIcon[child.icon] : child.icon"
                                            class="flex-none group-hover:text-white rounded-xl"
                                            w="w-9"
                                            h="h-9"
                                            :size="18"
                                          /> -->
                                        <div class="ml-2 w-full">
                                            <div class="text-sm text-gray-200 text-gray-800 h-6 flex justify-between">
                                                {{ child.name }}
                                                <BaseIcon
                                                    :path="mdiCheckCircleOutline"
                                                    class="flex-none hidden text-gray-800 group-hover:block -mt-1"
                                                    :size="18"
                                                  />
                                            </div>
                                            <div class="text-[.7em] whitespace-nowrap text-gray-600 -mt-1">{{ child.text }}</div>

                                        </div>
                                    </a>
                                </div>

                                <div class="sm:block md:block lg:hidden">
                                    <div class="uppercase w-max text-xs pl-3 pt-5 pb-3 font-bold border-b border-b-gray-200">
                                        {{ value.name }}
                                    </div>
                                    <div class="grid grid-cols-2 gap-2">
                                        <div v-for="(child, i) in value.children" :key="i">
                                            <a href="#" class="w-full p-3 flex items-center group rounded-2xl border border-white hover:border-gray-200">

                                                    <i v-if="child.icon" :style="child.color" class="w-9 h-9 flex justify-center items-center !text-lg flex-none group-hover:text-white rounded-xl" :class="child.icon"></i>
                                                <div class="ml-2 w-full">
                                                    <div class="text-sm text-gray-200 text-gray-800 h-6 flex justify-between">
                                                        {{ child.name }}
                                                        <BaseIcon
                                                            :path="mdiCheckCircleOutline"
                                                            class="flex-none hidden text-gray-800 group-hover:block -mt-1"
                                                            :size="18"
                                                          />
                                                    </div>
                                                    <div class="text-[.7em] whitespace-nowrap text-gray-600 -mt-1">{{ child.text }}</div>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </tab>
          </tabs>
        </div>

    </div>
</template>
