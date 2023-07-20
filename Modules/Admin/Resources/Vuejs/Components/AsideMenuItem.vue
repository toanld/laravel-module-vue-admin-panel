<script setup>
import { ref, computed, onMounted } from 'vue'
import { Link, router } from '@inertiajs/vue3'
import { useStyleStore } from '@admin/Stores/style.js'
import { getButtonColor } from '@admin/colors.js'
import BaseIcon from '@admin/Components/BaseIcon.vue'
import AsideMenuList from '@admin/Components/AsideMenuList.vue'
import { useLayoutStore } from '@admin/Stores/layout.js'
import {
  mdiMonitor,
  mdiAccountSettings,
  mdiFolderAccountOutline,
  mdiAccount,
  mdiMenu,
  mdiMinus,
  mdiPlus,
  mdiStore,
  mdiPostOutline
} from "@mdi/js";

const mdiIcon = {
  mdiMonitor: mdiMonitor,
  mdiAccountSettings: mdiAccountSettings,
  mdiFolderAccountOutline:mdiFolderAccountOutline,
  mdiAccount: mdiAccount,
  mdiMenu: mdiMenu,
  mdiMinus: mdiMinus,
  mdiPlus: mdiPlus,
  mdiStore: mdiStore,
  mdiPostOutline: mdiPostOutline
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
onMounted(() => { });
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
  <li v-if="item.name">

    <component
      :is="itemHref ? Link : 'div'"
      :href="itemHref"
      :target="item.target ?? null"
      class="flex cursor-pointer"
      :class="componentClass"
      @click="menuClick"
    >
      <!-- <BaseIcon
        v-if="item.icon"
        :path="mdiIcon[item.icon] ? mdiIcon[item.icon] : item.icon"
        class="flex-none"
        :class="[activeInactiveStyle, layoutStore.isAsideExpanded && item.link == router.page.url ? 'text-blue-400' : '']"
        :w="layoutStore.isAsideExpanded ? 'w-20' : 'w-10'"
        :size="24"
      /> -->
      <span v-if="item.icon"
        class="flex-none inline-flex justify-center items-center h-6"
        :class="[activeInactiveStyle,
          layoutStore.isAsideExpanded && item.link == router.page.url ? 'text-blue-400' : '',
          layoutStore.isAsideExpanded ? 'w-20' : 'w-10' ]"
        >
        <svg
          viewBox="0 0 24 24"
          :width="18"
          :height="18"
          class="inline-block"
          v-html="item.icon"
        >
        </svg>
      </span>
      <span
        class="flex-1 ml-3 text-left whitespace-nowrap"
        :class="[activeInactiveStyle, layoutStore.isAsideExpanded ? 'hidden' : '']"
      >{{ item.name }}</span>
      <BaseIcon
        v-if="hasDropdown"
        :path="isDropdownActive ? mdiMinus : mdiPlus"
        class="flex-none"
        :class="[activeInactiveStyle, layoutStore.isAsideExpanded ? 'hidden' : '']"
        w="w-12"
      />
    </component>
    <AsideMenuList
      v-if="hasDropdown"
      :menu="item.children"
      :class="[ styleStore.asideMenuDropdownStyle, isDropdownActive ? 'block' : 'hidden' ]"
      is-dropdown-list
    />
  </li>
</template>

<style scoped>
/* .color-aside, li a:hover{
  color: rgb(255 156 81) !important;
} */
</style>
