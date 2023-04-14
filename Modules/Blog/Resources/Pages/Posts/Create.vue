<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
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
import FormCheckRadioGroup from '@/Components/FormCheckRadioGroup.vue'

const props = defineProps({
    item_options: {
        type: Object,
        default: () => ({}),
    },
})


const form = useForm({
  title: '',
  content: '',
  category_id: 0,
  status: true,
  publish_date: null
})
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
          label="Content"
          :class="{ 'text-red-400': form.errors.content }"
        >
          <FormControl
            v-model="form.content"
            type="textarea"
            placeholder="Enter content"
            :error="form.errors.content"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.content">
              {{ form.errors.content }}
            </div>
          </FormControl>
        </FormField>

        <FormField
          label="Publish date"
          :class="{ 'text-red-400': form.errors.publish_date }"
        >
          <FormControl
            v-model="form.publish_date"
            type="datetime-local"
            :error="form.errors.publish_date"
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
