<script setup>
import {ref, watch, onMounted} from 'vue'
const props = defineProps({
    name: {
        type: String,
        required: true
    },
    required : {
        type: Boolean,
        default: false
    },
    title: {
        type: String,
        required: true
    },
    placeholder: {
        type: String,
        default: 'Nhập dữ liệu'
    },
    mb: {
        type: String,
        default: 'mb-8'
    },
    modelValue: {
        type: [String, Number, Boolean, Array, Object],
        default: ''
    },
    tooltip: {
        type: Boolean,
        default: false
    },
    message: {
        type: String,
        default: ''
    },
    autocomplete: {
        type: String,
        default: 'on'
    },
    index: {
        type: Number,
        default: 0
    }
})
const emit = defineEmits(['update:modelValue'])
const inputValue = ref('')
onMounted(() =>{
    inputValue.value = props.modelValue
})
watch(inputValue, (newInputValue) => {
    emit('update:modelValue',inputValue.value)
})
</script>
<template>
    <div class="relative py-2" :class="[mb]">
        <input type="text" v-model="inputValue" :name="name" :id="'floating_outlined'+index" class="block px-2.5 placeholder:opacity-0 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent bg-white rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-main dark:focus:border-main focus:outline-none focus:ring-1 focus:ring-main focus:border-main peer focus:placeholder:opacity-100" :autocomplete="autocomplete" :placeholder="placeholder" />
        <label :for="'floating_outlined'+index" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-main peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-3 left-1 flex items-center line-clamp-1">
            {{ title }} <span class="text-main mt-1 ml-1" v-if="required">*</span>
            <i class="icon-questions ml-1 cursor-pointer" v-if="tooltip" data-tooltip-target="tooltip-default"></i>
        </label>
        <div v-if="tooltip" id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium transition-opacity duration-300 bg-white rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            {{ message }}
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <slot></slot>

    </div>
</template>
