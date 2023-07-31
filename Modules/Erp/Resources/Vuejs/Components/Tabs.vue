<script setup>
import { useSlots, ref , provide} from 'vue'
const props = defineProps({
  class: {
    type: String,
    default: ''
  },

})

const slots = useSlots()
const tabTitles = ref(slots.default().map(tab => tab.props.title))
const selectedTitle = ref(tabTitles.value[0])
const handleTab = (title) => {
    selectedTitle.value = title

}

provide('selectedTitle', selectedTitle)
</script>

<template>
   <div class="text-sm font-medium text-gray-500  dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px border-b border-gray-200 px-2" :class="class">
            <li
                v-for="title in tabTitles"
                :key="title"
                class="mr-2"
                :class="{ selected: selectedTitle === title}"
                @click="handleTab(title)"
            >
                <a class="inline-block p-3 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" :class="{'text-main border-b-2 !border-b-main' : selectedTitle === title}" >{{ title }}</a>

            </li>
        </ul>
        <slot />
    </div>
</template>
