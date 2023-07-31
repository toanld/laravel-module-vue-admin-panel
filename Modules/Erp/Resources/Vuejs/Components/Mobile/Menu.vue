<script setup>
import { reactive, computed,ref, watch,onMounted, getCurrentInstance } from 'vue'
import { usePage,Link, router } from '@inertiajs/vue3'

const checkActive = ref(router.page.url)
let menu = reactive({})
menu = computed(() => usePage().props.navigation.menu_module)
const checkExpanded = (childs) => {

    let check = false;
    childs.forEach((value, key) => {
        if(value.link == checkActive.value){
            check = true;
        }
    });
    return check;
}
</script>
<template>
    <div class="absolute bg-white w-full rounded-t-xl bottom-0 left-0 z-50 p-4">
        <div class="flex items-center py-2" :class="{'text-main' : checkExpanded(value.children),}" v-for="(value, key) in menu" :key="key">
            <i :class="value.icon" class="mr-3"></i>
            <div >
                {{ value.name }}
            </div>
        </div>
    </div>
</template>
