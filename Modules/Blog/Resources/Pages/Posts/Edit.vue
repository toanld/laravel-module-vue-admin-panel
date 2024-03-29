<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
  mdiMenu,
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@admin/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@admin/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@admin/Components/SectionTitleLineWithButton.vue"
import CardBox from "@admin/Components/CardBox.vue"
import FormField from '@admin/Components/FormField.vue'
import FormControl from '@admin/Components/FormControl.vue'
import BaseButton from '@admin/Components/BaseButton.vue'
import BaseButtons from '@admin/Components/BaseButtons.vue'
import editor from '@admin/Components/Tinymce.vue'
import Vue3TagsInput from 'vue3-tags-input'

const props = defineProps({
  data: {
    type: Object,
    default: () => ({}),
  },
  item_options: {
        type: Object,
        default: () => ({}),
  },
  tags: {
        type: Object,
        default: () => ({}),
  },
})

const form = useForm({
  _method: 'put',
  title: props.data.title,
  teaser: props.data.teaser,
  description: props.data.description,
  category_id: props.data.category_id,
  status: props.data.status ? true : false,
  publish_date: props.data.publish_date,
  tags: props.tags,
  image: props.data.image
})

function handleChangeTag(tags) {
  form.tags = tags;
  }
function onFileChange(e) {
    form.image = e.target.files[0];
}
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Update data" />
    <SectionMain>
      <SectionTitleLineWithButton
        title="Edit"
        main
      >
        <BaseButton
          :route-name="route('blog.index')"
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form
        @submit.prevent="form.post(route('blog.update', props.data.id))"
      >
        <FormField
          label="Name"
          :class="{ 'text-red-400': form.errors.title }"
        >
          <FormControl
            v-model="form.title"
            type="text"
            placeholder="Enter title"
            :error="form.errors.title"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.title">
              {{ form.errors.title }}
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Image intro"
          :class="{ 'text-red-400': form.errors.image }"
        >
          <img class="w-16 md:w-32 lg:w-48" :src="'/storage/' + props.data.image" v-if="props.data.image">
          <input type="file" @input="form.image = $event.target.files[0]" class="block w-full text-sm text-slate-500 mt-2
            file:mr-4 file:py-2 file:px-4
            file:rounded-full file:border-0
            file:text-sm file:font-semibold
            file:bg-violet-50 file:text-violet-700
            hover:file:bg-violet-100
          "/>
        </FormField>

        <FormField
            label="Category"
            :class="{ 'text-red-400': form.errors.category_id }"
        >
            <FormControl
                v-model="form.category_id"
                type="select"
                placeholder=""
                :error="form.errors.category_id"
                :options="item_options"
            >
                <div class="text-red-400 text-sm" v-if="form.errors.category_id">
                    {{ form.errors.category_id }}
                </div>
            </FormControl>
        </FormField>

        <FormField
          label="Teaser"
          :class="{ 'text-red-400': form.errors.teaser }"
        >
          <FormControl
            v-model="form.teaser"
            type="textarea"
            placeholder="Enter teaser"
            :error="form.errors.teaser"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.teaser">
              {{ form.errors.teaser }}
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="description"
          :class="{ 'text-red-400': form.errors.description }"
        >
          <editor v-model="form.description" :error="form.errors.description"></editor>
        </FormField>

        <FormField label="Tags">
        <vue3-tags-input :tags="form.tags"
                   placeholder="enter some tags"
                   :add-tag-on-keys="[13, 188]"
                   @on-tags-changed="handleChangeTag"/>
        </FormField>

        <FormField
          label="Publish date"
          :class="{ 'text-red-400': form.errors.publish_date }"
        >
          <FormControl
            v-model="form.publish_date"
            type="datetime-local"
            :error="form.errors.publish_date"
            class="w-1/2"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.publish_date">
              {{ form.errors.publish_date }}
            </div>
          </FormControl>
        </FormField>

        <!-- <FormCheckRadioGroup
              v-model="form.status"
              name="status"
              :options="{ enabled: 'Enabled' }"
          /> -->

        <template #footer>
          <BaseButtons>
            <BaseButton
              type="submit"
              color="info"
              label="Submit"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            />
          </BaseButtons>
        </template>
      </CardBox>
    </SectionMain>
  </LayoutAuthenticated>
</template>
