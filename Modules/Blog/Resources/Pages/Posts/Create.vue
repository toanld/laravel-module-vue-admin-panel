<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
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
import FormCheckRadioGroup from '@admin/Components/FormCheckRadioGroup.vue'
import editor from '@admin/Components/Tinymce.vue'
import Vue3TagsInput from 'vue3-tags-input'

const props = defineProps({
    item_options: {
        type: Object,
        default: () => ({}),
    },
})

const form = useForm({
  title: '',
  teaser: '',
  content: '',
  category_id: 0,
  status: true,
  publish_date: null,
  tags: [],
  image: null
})

function handleChangeTag(tags) {
  form.tags = tags;
  }
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Create blog" />
    <SectionMain>
      <SectionTitleLineWithButton
        title="Add blog"
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
        @submit.prevent="form.post(route('blog.store'))"
      >
        <FormField
          label="Title"
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
          label="Content"
          :class="{ 'text-red-400': form.errors.content }"
        >
          <editor v-model="form.content" :error="form.errors.content"></editor>

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

        <FormCheckRadioGroup
              v-model="form.status"
              name="status"
              :options="{ enabled: 'Enabled' }"
          />

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
