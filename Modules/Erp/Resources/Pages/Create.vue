<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@erp/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@erp/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@erp/Components/SectionTitleLineWithButton.vue"
import CardBox from "@erp/Components/CardBox.vue"
import FormField from '@erp/Components/FormField.vue'
import FormControl from '@erp/Components/FormControl.vue'
import BaseButton from '@erp/Components/BaseButton.vue'
import BaseButtons from '@erp/Components/BaseButtons.vue'

const form = useForm({
  name: '',
  description: ''

})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Create erp" />
    <SectionMain>
      <SectionTitleLineWithButton
        title="Add erp"
        main
      >
        <BaseButton
          :route-name="route('erp.index')"
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form
        @submit.prevent="form.post(route('erp.store'))"
      >
        <FormField
          label="Name"
          :class="{ 'text-red-400': form.errors.name }"
        >
          <FormControl
            v-model="form.name"
            type="text"
            placeholder="Enter Name"
            :error="form.errors.name"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.name">
              {{ form.errors.name }}
            </div>
          </FormControl>
        </FormField>
        <FormField
          label="Description"
          :class="{ 'text-red-400': form.errors.description }"
        >
          <FormControl
            v-model="form.description"
            type="textarea"
            placeholder="Enter Description"
            :error="form.errors.description"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.description">
              {{ form.errors.description }}
            </div>
          </FormControl>
        </FormField>
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
