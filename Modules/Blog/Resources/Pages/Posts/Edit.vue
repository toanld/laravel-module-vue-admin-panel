<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
  mdiMenu,
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import CardBox from "@/Components/CardBox.vue"
import FormField from '@/Components/FormField.vue'
import FormControl from '@/Components/FormControl.vue'
import BaseButton from '@/Components/BaseButton.vue'
import BaseButtons from '@/Components/BaseButtons.vue'
import editor from '@/Components/tinymce.vue'

const props = defineProps({
  data: {
    type: Object,
    default: () => ({}),
  },
  item_options: {
        type: Object,
        default: () => ({}),
    },
})

const form = useForm({
  _method: 'put',
  title: props.data.title,
  teaser: props.data.teaser,
  content: props.data.content,
  category_id: props.data.category_id,
  status: props.data.status ? true : false,
  publish_date: props.data.publish_date
})
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
