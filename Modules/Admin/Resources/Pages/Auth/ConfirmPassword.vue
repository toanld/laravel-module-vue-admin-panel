<script setup>
import { useForm, Head } from '@inertiajs/vue3'
import { ref } from 'vue'
import LayoutGuest from '@admin/Layouts/LayoutGuest.vue'
import SectionFullScreen from '@admin/Components/SectionFullScreen.vue'
import CardBox from '@admin/Components/CardBox.vue'
import FormControl from '@admin/Components/FormControl.vue'
import FormField from '@admin/Components/FormField.vue'
import BaseDivider from '@admin/Components/BaseDivider.vue'
import BaseButton from '@admin/Components/BaseButton.vue'
import FormValidationErrors from '@admin/Components/FormValidationErrors.vue'

const form = useForm({
  password: ''
})

const passwordInput = ref(null)

const submit = () => {
  form.post(route('password.confirm'), {
    onFinish: () => {
      form.reset()

      passwordInput.value?.focus()
    }
  })
}
</script>

<template>
  <LayoutGuest>
    <Head title="Secure Area" />

    <SectionFullScreen
      v-slot="{ cardClass }"
      bg="purplePink"
    >
      <CardBox
        :class="cardClass"
        form
        @submit.prevent="submit"
      >
        <FormValidationErrors />

        <FormField>
          <div class="mb-4 text-sm text-gray-600">
            This is a secure area of the application. Please confirm your password before continuing.
          </div>
        </FormField>

        <FormField
          label="Password"
          label-for="password"
          help="Please enter your password to confirm"
        >
          <FormControl
            id="password"
            @set-ref="passwordInput = $event"
            v-model="form.password"
            type="password"
            required
            autocomplete="current-password"
          />
        </FormField>

        <BaseDivider />

        <BaseButton
          type="submit"
          color="info"
          label="Confirm"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        />
      </CardBox>
    </SectionFullScreen>
  </LayoutGuest>
</template>
