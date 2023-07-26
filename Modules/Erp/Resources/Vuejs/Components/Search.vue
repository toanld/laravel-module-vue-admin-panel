<script setup>
import { ref } from "vue"
// import { Tabs, Tab } from 'flowbite-vue'
const activeTab = ref('save')

import tabs from '@erp/Components/Tabs.vue'
import tab from '@erp/Components/Tab.vue'
import IconM from '@erp/Components/IconM.vue'

</script>
<template>
      <!-- Notifications -->
    <div
        class="w-500 hidden overflow-hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow-lg dark:divide-gray-600 dark:bg-gray-700 rounded !-left-24"
        id="search-dropdown"
    >
        <div class="flex-shrink-0 flex flex-row justify-between items-center p-3 text-gray-900 border-b border-b-gray-200">
            <div>Tìm kiếm</div>
            <i class="icon-multiply cursor-pointer text-main "></i>
        </div>
    </div>

</template>
