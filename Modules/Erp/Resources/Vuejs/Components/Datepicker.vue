<script setup>
import { ref, onMounted, watch } from 'vue'
const props = defineProps({
    format: {
        type: String,
        default: "DD/MM/YYYY"
    },
     modelValue: {
        type: [String, Number, Boolean, Array, Object],
        default: ''
    },
    title: {
        type: String,
        default: ''
    },
    label : {
        type : Boolean,
        default: false
    },
    mb: {
        type: String,
        default: 'mb-8'
    },
    placeholder: {
        type: String,
        default: " "
    },
    index: {
        type: Number,
        default: 0
    }
})
const emit = defineEmits(['update:modelValue'])
const dateValue = ref('')
const formatter = ref({
  date: "DD/MM/YYYY",
  month: 'MM'
})
const colorText = ref(false)
const show = ref(false)

onMounted(() =>{
    formatter.value.date = props.format
})
watch(dateValue, (newInputValue) => {
    emit('update:modelValue',dateValue.value)
})
const close = () => {
    if(dateValue.value == ""){
        show.value = false
    }
    colorText.value = false
}

</script>

<template>
    <div class="relative py-2" :class="[mb]" v-click-outside="close" >
        <vue-tailwind-datepicker as-single @click="show = true, colorText=true" :id="'floating_outlined'+index"  :placeholder="placeholder" :formatter="formatter"  v-model="dateValue" class="peer h-12 focus:ring-2 focus:ring-main focus:border-main" />
        <label v-if="label"  :for="'floating_outlined'+index"  class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 top-1/2 scale-100 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 pb-1  left-1 flex items-center line-clamp-1"
            :class="{
                'scale-75 !top-2' : show,
                'text-main' : colorText
            }"
        >
            {{ title }}
        </label>
         <slot></slot>
    </div>
</template>
