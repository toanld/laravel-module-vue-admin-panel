<script setup>
import { router } from '@inertiajs/vue3'
import { mdiLogout, mdiClose, mdiMenu } from '@mdi/js'
import { computed } from 'vue'
import { useLayoutStore } from '@admin/Stores/layout.js'
import { useStyleStore } from '@admin/Stores/style.js'
import AsideMenuList from '@admin/Components/AsideMenuList.vue'
import AsideMenuItem from '@admin/Components/AsideMenuItem.vue'
import BaseIcon from '@admin/Components/BaseIcon.vue'

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
    id="aside"
    class="fixed flex z-40 top-0 h-screen transition-position overflow-hidden"
  >
    <div
      :class="styleStore.asideStyle"
      class=" flex-1 flex flex-col overflow-hidden dark:bg-slate-900 backg"
    >
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
      <div
        :class="styleStore.darkMode ? 'aside-scrollbars-[slate]' : styleStore.asideScrollbarsStyle"
        class="flex-1 overflow-y-auto overflow-x-hidden"
      >
        <AsideMenuList
          :menu="menu"
          @menu-click="menuClick"
        />
      </div>

      <ul>
        <AsideMenuItem
          :item="logoutItem"
          @menu-click="logoutItemClick"
          :isAsideExpanded="true"
        />
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
