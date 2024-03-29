<script setup>
import { useStyleStore } from '@erp/Stores/style.js'
import { Link } from '@inertiajs/vue3'
import { computed } from 'vue'

const props = defineProps({
  href: {
    type: String,
    default: null
  },
  routeName: {
    type: String,
    default: null
  },
  type: {
    type: String,
    default: 'flex'
  },
  activeColor: {
    type: String,
    default: null
  },
  isDesktopIconOnly: Boolean,
  dropdown: Boolean,
  active: Boolean
})

const is = computed(() => {
  if (props.href) {
    return 'a'
  }

  if (props.routeName) {
    return Link
  }

  return 'div'
})

const styleStore = useStyleStore()

const activeColor = props.activeColor ?? `${styleStore.navBarItemLabelActiveColorStyle} dark:text-slate-400`

const activeClass = computed(
  () => props.routeName && route().current(props.routeName) ? props.activeColor : null
)

const componentClass = computed(() => {
  const base = [
    props.type,
    props.active
      ? activeColor
      : `${styleStore.navBarItemLabelStyle} dark:text-white dark:hover:text-slate-400 ${styleStore.navBarItemLabelHoverStyle}`
  ]

  if (props.type === 'block') {
    base.push('lg:flex')
  }

  if (!props.dropdown) {
    base.push('py-2', 'px-3')
  } else {
    base.push('p-0', 'lg:py-2', 'lg:px-3')
  }

  if (props.isDesktopIconOnly) {
    base.push('lg:w-16', 'lg:justify-center')
  }

  return base
})
</script>

<template>
  <component
    :is="is"
    class="items-center grow-0 shrink-0 relative cursor-pointer"
    :class="[componentClass, activeClass]"
    :href="routeName ? route(routeName) : href"
  >
    <slot />
  </component>
</template>
