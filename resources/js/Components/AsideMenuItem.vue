<script setup>
import { ref, computed, onMounted } from 'vue'
import { Link, router } from '@inertiajs/vue3'
import { useStyleStore } from '@/Stores/style.js'
import { mdiMinus, mdiPlus } from '@mdi/js'
import { getButtonColor } from '@/colors.js'
import BaseIcon from '@/Components/BaseIcon.vue'
import AsideMenuList from '@/Components/AsideMenuList.vue'
import { useLayoutStore } from '@/Stores/layout.js'
import {
  mdiMonitor,
  mdiAccountSettings,
  mdiFolderAccountOutline,
  mdiAccount,
  mdiMenu
} from "@mdi/js";

const mdiIcon = {
  mdiMonitor: mdiMonitor,
  mdiAccountSettings: mdiAccountSettings,
  mdiFolderAccountOutline:mdiFolderAccountOutline,
  mdiAccount: mdiAccount,
  mdiMenu: mdiMenu
}

const props = defineProps({
  item: {
    type: Object,
    required: true
  },
  isDropdownList: Boolean,
  isAsideExpanded: Boolean
})

const itemHref = computed(() => (props.item && props.item.link) ? props.item.link : '')

const emit = defineEmits(['menu-click'])

const styleStore = useStyleStore()

const hasColor = computed(() => props.item && props.item.color)

const asideMenuItemActiveStyle = computed(() => hasColor.value ? '' : styleStore.asideMenuItemActiveStyle)

const isDropdownActive = ref(false)

const componentClass = computed(() => (
  [
    props.isDropdownList ? 'py-3 text-sm' : 'py-3',
    hasColor.value
      ? getButtonColor(props.item.color, false, true)
      : styleStore.asideMenuItemStyle,
    props.isAsideExpanded ? 'pl-1' : ''
  ]
))
onMounted(() => {console.log() });
const hasDropdown = computed(() => props.item.children)

const menuClick = event => {
  emit('menu-click', event, props.item)

  if (hasDropdown.value) {
    isDropdownActive.value = !isDropdownActive.value
  }
}

const layoutStore = useLayoutStore();

const activeInactiveStyle = computed(
  () => props.item.link == router.page.url
    ? styleStore.asideMenuItemActiveStyle
    : ''
)
</script>

<template>
  <li>
    <component
      :is="itemHref ? Link : 'div'"
      :href="itemHref"
      :target="item.target ?? null"
      class="flex cursor-pointer dark:text-slate-300 dark:hover:text-white"
      :class="componentClass"
      @click="menuClick"
    >
      <BaseIcon
        v-if="item.icon"
        :path="mdiIcon[item.icon] ? mdiIcon[item.icon] : item.icon"
        class="flex-none"
        :class="[activeInactiveStyle, layoutStore.isAsideExpanded && item.link == router.page.url ? 'text-blue-400' : '']"
        w="w-20"
        :size="18"
      />
      <span
        class="grow text-ellipsis line-clamp-1"
        :class="[activeInactiveStyle, layoutStore.isAsideExpanded ? 'hidden' : '']"
      >{{ item.name }}</span>
      <BaseIcon
        v-if="hasDropdown"
        :path="isDropdownActive ? mdiMinus : mdiPlus"
        class="flex-none"
        :class="activeInactiveStyle"
        w="w-12"
      />
    </component>
    <AsideMenuList
      v-if="hasDropdown"
      :menu="item.children"
      :class="[ styleStore.asideMenuDropdownStyle, isDropdownActive ? 'block dark:bg-slate-800/50' : 'hidden' ]"
      is-dropdown-list
    />
  </li>
</template>

<style scoped>
/* .color-aside, li a:hover{
  color: rgb(255 156 81) !important;
} */
</style>
