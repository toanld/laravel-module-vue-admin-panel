<script setup>
import { computed, ref, onMounted, onBeforeUnmount } from 'vue'
import {component as CKEditor} from '@ckeditor/ckeditor5-vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

const props = defineProps({
    modelValue: {
    type: [String, Number, Boolean, Array, Object],
    default: ''
  },
  error: {
    type: String,
    default: null
  }
})
const computedValue = computed({
  get: () => props.modelValue,
  set: value => {
    emit('update:modelValue', value)
  }
})
const editorData = computedValue;
const editorConfig = {
    toolbar: {
        items: [
            'undo', 'redo',
            '|', 'heading',
            '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
            '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
            '-', // break point
            '|', 'alignment',
            'link', 'uploadImage', 'blockQuote', 'codeBlock',
            '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
        ],
        shouldNotGroupWhenFull: false
    }
}

const emit = defineEmits(['update:modelValue', 'setRef'])
</script>
<template>
    <div class="relative">
        <CKEditor :editor="ClassicEditor" v-model="editorData" :config="editorConfig"></CKEditor>
    </div>
</template>
<style>
.ck-editor__editable {
    min-height: 200px;
}
</style>