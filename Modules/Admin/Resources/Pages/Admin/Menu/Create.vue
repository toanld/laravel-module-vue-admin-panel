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

const form = useForm({
  name: '',
  machine_name: '',
  description: ''

})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Create menu" />
    <SectionMain>
      <SectionTitleLineWithButton
        :icon="mdiMenu"
        title="Add menu"
        main
      >
        <BaseButton
          :route-name="route('menu.index')"
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form
        @submit.prevent="form.post(route('menu.store'))"
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
          label="Machine Name"
          :class="{ 'text-red-400': form.errors.machine_name }"
        >
          <FormControl
            v-model="form.machine_name"
            type="text"
            placeholder="Enter Machine Name"
            :error="form.errors.name"
          >
            <div class="text-red-400 text-sm" v-if="form.errors.machine_name">
              {{ form.errors.machine_name }}
            </div>
          </FormControl>
        </FormField>
        <FormField
          label="Description"
          :class="{ 'text-red-400': form.errors.description }"
        >
          <FormControl
            v-model="form.description"
            type="text"
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
