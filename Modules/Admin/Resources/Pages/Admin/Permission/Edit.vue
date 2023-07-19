<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
  mdiAccountKey,
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

const props = defineProps({
  permission: {
    type: Object,
    default: () => ({}),
  },
})

const form = useForm({
  _method: 'put',
  name: props.permission.name,
})
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Update permission" />
    <SectionMain>
      <SectionTitleLineWithButton
        :icon="mdiAccountKey"
        title="Update permission"
        main
      >
        <BaseButton
          :route-name="route('permission.index')"
          :icon="mdiArrowLeftBoldOutline"
          label="Back"
          color="white"
          rounded-full
          small
        />
      </SectionTitleLineWithButton>
      <CardBox
        form
        @submit.prevent="form.post(route('permission.update', props.permission.id))"
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
