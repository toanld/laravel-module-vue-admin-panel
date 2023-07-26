<script setup>
import { router } from '@inertiajs/vue3'
import { mdiLogout, mdiClose, mdiMenu } from '@mdi/js'
import { computed } from 'vue'
import { useLayoutStore } from '@/Stores/layout.js'
import { useStyleStore } from '@/Stores/style.js'
import AsideMenuList from '@/Components/AsideMenuList.vue'
import AsideMenuItem from '@/Components/AsideMenuItem.vue'
import BaseIcon from '@/Components/BaseIcon.vue'

defineProps({
  menu: {
    type: Object,
    default: () => {}
  }
})

const emit = defineEmits(['menu-click'])

const layoutStore = useLayoutStore()

const styleStore = useStyleStore()

const logoutItem = computed(() => ({
  name: 'Logout',
  icon: mdiLogout,
  color: 'info',
  link: '#'
}))

const logoutItemClick = () => {
  router.post(route('logout'))
}

const menuClick = (event, item) => {
  emit('menu-click', event, item)
}
</script>

<template>
   <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav"
        id="drawer-navigation"
        >

        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
            <form action="#" method="GET" class="md:hidden mb-2">
                <label for="sidebar-search" class="sr-only">Search</label>
                <div class="relative">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            ></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        name="search"
                        id="sidebar-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search"
                    />
                </div>
            </form>
                <ul class="space-y-2" data-accordion="open">
                     <div
        :class="styleStore.asideBrandStyle"
        class="flex flex-row h-14 items-center justify-between dark:bg-slate-900 backg"
      >
        <div class="text-center flex-1 lg:text-left lg:pl-6 xl:text-center xl:pl-0" :class="{'hidden': layoutStore.isAsideExpanded}">
          <b class="font-black text-black">One</b>
        </div>
        <button
          class="hidden lg:inline-block p-3 mx-auto"
          @click.prevent="layoutStore.asideToggle()"
        >
          <BaseIcon
            :path="layoutStore.isAsideExpanded ? mdiMenu : mdiClose" size="20"
          />
        </button>
      </div>
                    <li v-for="(value, key) in menu" :key="key">
                        <div v-if="value.children">
                             <button
                                    type="button"
                                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition ease-in-out duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                                    :data-accordion-target="'#dropdown-'+value.text"
                                    :aria-controls="'#dropdown-'+value.text"

                                >

                                <svg
                                    aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                    v-html="value.icon"
                                >

                                </svg>
                                <span :class="{
                                        'flex-1 ml-3 text-left whitespace-nowrap' :true,
                                        'text-red' : checkActive == value.link
                                    }"

                                >{{ value.name }}</span
                                >

                                <svg
                                    data-accordion-icon
                                    aria-hidden="true"
                                    class="w-6 h-6"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                            <ul :id="'dropdown-'+value.text" class="hidden py-2 space-y-2 ">
                                <li v-for="(chil, key) in value.children" :key="key">
                                    <a
                                        href="#"
                                        :class="{
                                            'flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700' :true,
                                            'text-red-400' : checkActive == chil.link
                                        }"
                                    >{{ chil.name }}</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div v-else>
                            <a
                                href="#"
                                class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                     v-html="value.icon"
                                >

                                </svg>
                                <span :class="{
                                        'ml-3' : true,
                                        'text-red' : checkActive == value.link
                                    }">{{ value.name }}</span>
                            </a>
                        </div>
                    </li>
                </ul>

            </div>

        </aside>
</template>

<style>
#aside .backg{
  background: #edf1f8;
}
#aside button{
  color: initial;
}
#aside li{
  color: #768285;
}
#aside li a.text-white{
  color: white;
}
#aside li ul{
  padding-left: 30px;
}
#aside li ul ul{
  padding-left: 10px;
}
</style>
