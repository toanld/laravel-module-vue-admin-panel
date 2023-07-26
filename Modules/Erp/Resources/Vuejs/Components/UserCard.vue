<script setup>
import { computed, ref } from 'vue'
import { useMainStore } from '@erp/Stores/main'
import { mdiCheckDecagram } from '@mdi/js'
import BaseLevel from '@erp/Components/BaseLevel.vue'
import UserAvatarCurrentUser from '@erp/Components/UserAvatarCurrentUser.vue'
import CardBox from '@erp/Components/CardBox.vue'
import FormCheckRadioGroup from '@erp/Components/FormCheckRadioGroup.vue'
import PillTag from '@erp/Components/PillTag.vue'

const mainStore = useMainStore()

const userName = computed(() => mainStore.userName)

const userSwitchVal = ref([])
</script>

<template>
  <CardBox>
    <BaseLevel type="justify-around lg:justify-center">
      <UserAvatarCurrentUser class="lg:mx-12" />
      <div class="space-y-3 text-center md:text-left lg:mx-12">
        <div class="flex justify-center md:block">
          <FormCheckRadioGroup
            v-model="userSwitchVal"
            name="sample-switch"
            type="switch"
            :options="{ one: 'Notifications' }"
          />
        </div>
        <h1 class="text-2xl">
          Howdy, <b>{{ userName }}</b>!
        </h1>
        <p>Last login <b>12 mins ago</b> from <b>127.0.0.1</b></p>
        <div class="flex justify-center md:block">
          <PillTag
            text="Verified"
            type="info"
            :icon="mdiCheckDecagram"
          />
        </div>
      </div>
    </BaseLevel>
  </CardBox>
</template>
