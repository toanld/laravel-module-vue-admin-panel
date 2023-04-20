<script setup>
import { computed, ref, onMounted, onBeforeUnmount } from 'vue'
import editor from '@tinymce/tinymce-vue'

const emit = defineEmits(['update:modelValue', 'setRef'])

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
</script>
<template>
    <editor
        api-key="b82c46fpu6v40ajjpr5r5q1foi5jvxjd1fnj76cexqc9udbg"
        :init="{
          height: 200,
          menubar: false,
          plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
          ],
          toolbar:
            'undo redo | formatselect | bold italic underline code backcolor | \
            alignleft aligncenter alignright alignjustify | \
            bullist numlist outdent indent | removeformat | image | help',
          image_title: true,
          file_picker_types: 'image',
          images_upload_url: '/api/upload',
          convert_urls: false
          // images_upload_base_path: '/'
        }"
        v-model="computedValue"
      />
</template>
 