<script setup>
import {ref, watch, onMounted, computed} from 'vue'
import axios from 'axios'
import Loading from './Loading.vue'

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
    url : {
        type: String,
        default: ''
    },
    index: {
        type: Number,
        default: 0
    }
})
const emit = defineEmits(['update:modelValue'])
const inputValue = ref('')
const showBox = ref(false)
const loading = ref(false)
const timeOutStatus = ref(null)
const dataSearch = ref([])
const nonekp = ref(false)

onMounted(() =>{
    inputValue.value = props.modelValue
})
watch(inputValue, (newInputValue) => {
    if(newInputValue.length >= 3){
            loading.value = true;
            if(timeOutStatus.value) clearTimeout(timeOutStatus.value);
                timeOutStatus.value= setTimeout(() => {
                search();
            }, 300)
        }else{
            // this.nonekp = false;
        }
        emit('update:modelValue',inputValue.value)
})


const handleClickInput = () => {
    showBox.value = true
}
const search = () => {
    axios.get(props.url+'?keyword='+inputValue.value).then(function (response) {
       if(response.data.data.length == 0){
            nonekp.value = true
       }
       loading.value = false
    })
}

const handleSelect = (v) => {
    showBox.value = false;
    inputValue.value = v.name
}
</script>
<template>
    <div class="relative py-2" :class="[mb]">
        <input type="text" v-model="inputValue" :name="props.name" :id="'floating_outlined'+index" :class="props.name" class="block px-2.5 placeholder:opacity-0 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent bg-white rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-main dark:focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-main focus:border-main peer focus:placeholder:opacity-100" :placeholder="placeholder" :autocomplete="autocomplete"
        @click="handleClickInput"
        />
        <label :for="'floating_outlined'+index" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-main peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-3 left-1 flex items-center line-clamp-1">
            {{ title }} <span class="text-main mt-1 ml-1" v-if="required">*</span>
        </label>
         <i :class="icon" class="cursor-pointer absolute top-5 right-3 text-icon" v-if="suggest"></i>
         <Loading v-if="loading"></Loading>
        <div class="absolute visible pointer-events-auto overflow-auto left-0 w-full bg-white rounded-lg shadow-lg" v-if="showBox" :class="{'p-3': loading || nonekp || dataSearch.length > 0 }">
            <div class="overflow-y-scroll max-h-96">
                <div class="text-gray-800 font-normal" v-if="loading">Đang tìm kiếm...</div>
                <div class="text-gray-800 font-normal" v-if="nonekp">Không có kết quả nào</div>
                <div @click="handleSelect(value)" :value="value.id" class="pb-2" v-for="(value, key) in dataSearch" v-if="dataSearch.length > 0 ">{{ value.name }}</div>
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
