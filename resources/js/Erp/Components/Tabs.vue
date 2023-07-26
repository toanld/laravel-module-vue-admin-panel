<script setup>
import { useSlots, ref , provide} from 'vue'
const props = defineProps({
  class: {
    type: String,
    default: ''
  },
  child: {
    type : Boolean,
    default : false
  }
})

const slots = useSlots()
const tabTitles = ref(slots.default().map(tab => {
    if(tab.props != null){
        return tab.props.title
    }
}))
const selectedTitle = ref(tabTitles.value[0])
const handleTab = (title) => {
    selectedTitle.value = title

}

provide('selectedTitle', selectedTitle)
</script>

<template>
   <div class="text-sm font-medium text-gray-500  dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px border-b border-gray-200 px-2 h-12" :class="class">
            <li
                v-for="title in tabTitles"
                :key="title"
                class="mr-2"
                :class="{ selected: selectedTitle === title,
                            'flex items-center justify-center h-full' : child

                        }"
                @click="handleTab(title)"
            >
                <a class="inline-block"
                :class="{
                    'p-3 border-b-2 border-transparent rounded-t-lg hover:text-main hover:border-b-main dark:hover:text-main' : !child,
                    'border-b-2 border-transparent rounded-md hover:text-main hover:border-b-white dark:hover:text-main  px-4 py-1' : child,
                    'bg-white !border-b-white' : child && selectedTitle === title,
                    'text-main border-b-main' : selectedTitle === title
                }
                    " >{{ title }}</a>

            </li>
        </ul>
        <slot />
    </div>
</template>
