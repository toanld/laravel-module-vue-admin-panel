<script setup>
import {ref, watch, onMounted, computed} from 'vue'
import axios from 'axios'
const props = defineProps({
    name: {
        type: String,
        required: true
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
    id: {
        type: Number,
        default : 0
    },
    tooltip: {
        type: Boolean,
        default: false
    },
    message: {
        type: String,
        default: ''
    },
    icon: {
        type: String,
        default: ''
    },
    suggest : {
        type : Boolean,
        default: false
    },
    autocomplete: {
        type: String,
        default: 'on'
    },
    data: {
        type: Object,
        default: () => {}
    },
    index: {
        type: Number,
        default: 0
    }
})
const emit = defineEmits(['update:modelValue','update:id'])
const inputValue = ref('')
const showBox = ref(false)
const idv = ref(0)
const loading = ref(false)
const timeOutStatus = ref(null)
const icon = ref('')
onMounted(() =>{
    inputValue.value = props.modelValue
    idv.value = props.id
    icon.value = props.icon
})

watch([inputValue, idv], ([newInputValue, newIdv], [prevInputValue, prevIdv]) => {
    if(newInputValue){
        emit('update:modelValue',inputValue.value)
    }
    if(newIdv){
      emit('update:id',idv.value)
    }
});

const filterData = computed(() => {
    return props.data.filter(function (value) {
            var name = value.name;
            return name.indexOf(inputValue.value) !== -1;
    })
})


const handleClickInput = () => {
    showBox.value = true
}

const handleSelect = (v) => {
    showBox.value = false;
    inputValue.value = v.name
    idv.value = v.id
    icon.value = 'icon-multiply'
}
const del = () => {
    inputValue.value = ''
    icon.value = 'icon-expand-arrow'
}
</script>
<template>
    <div class="relative py-2" :class="[mb]">
        <input type="text" v-model="inputValue" :name="props.name" :id="'floating_outlined'+index" :class="props.name" class="block px-2.5 placeholder:opacity-0 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent bg-white rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-main dark:focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-main focus:border-main peer focus:placeholder:opacity-100" :placeholder="placeholder" :autocomplete="autocomplete"
        @click="handleClickInput"
       />
        <label :for="'floating_outlined'+index" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-main peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-3 left-1 flex items-center line-clamp-1">
            {{ title }}
            <i class="icon-questions ml-1 cursor-pointer" v-if="tooltip" data-tooltip-target="tooltip-default"></i>

        </label>
         <i :class="icon" class="cursor-pointer absolute top-5 right-3 text-icon" @click="del" v-if="suggest"></i>
        <div v-if="tooltip" id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium transition-opacity duration-300 bg-white rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            {{ message }}
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="absolute visible z-30 pointer-events-auto overflow-auto left-0 w-full bg-white p-3 rounded-lg shadow-lg "
            v-if="showBox"
            >
            <div class="overflow-y-scroll max-h-96">
                 <div @click="handleSelect(value)" :value="value.id" class="p-2 cursor-pointer" v-for="(value, key) in filterData">{{ value.name }}</div>
            </div>
        </div>
        <slot></slot>
    </div>
</template>
<style lang='scss'>
    .a{
        @apply block px-2.5 placeholder:opacity-0 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent bg-white rounded-lg border-2 border-gray-300 appearance-none dark:text-white dark:border-main dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-main focus:placeholder:opacity-100;
    }
</style>
