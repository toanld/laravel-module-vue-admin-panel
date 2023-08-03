<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import { ref, reactive } from 'vue'
import {
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutErp from "@erp/Layouts/LayoutErp.vue"
import SectionMain from "@erp/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@erp/Components/SectionTitleLineWithButton.vue"
import CardBox from "@erp/Components/CardBox.vue"
import BaseInput from "@erp/Components/BaseInput.vue"
import BaseInputSearch from "@erp/Components/BaseInputSearch.vue"
import FormSelect from "@erp/Components/FormSelect.vue"
import BaseButton from '@erp/Components/BaseButton.vue'
import BaseButtons from '@erp/Components/BaseButtons.vue'
const title = ref('Tạo mới')

const form = useForm({
    code: '',
    attendace_code: '',
    code_storage: '',
    name: '',
    birthday: '',
    gender: null,
    military_service: null,
    place_of_birthday: '',
    origin_state: '',
    private_code: '',
    private_code_date: '',
    private_code_place: null,
    private_code_image_json: '',
    nationality: null,
    marital_status: null,
    people: null,
    religious: null,
    job_bank_account: '',
    job_bank_account_name: '',
    job_tax: '',
    cost_center : '',
    job_date_join: '',
    job_reldate_join: '',
    level_school: null,
    level_academic: null,
    live_manager_id: null,
    labor_group: null,
    gps_location_ids: null
})
const formDefault = reactive([
    {
        code: '',
        show : true,
        name : 'code',
        text : 'Mã nhân viên',
        value: '',
        type: 'text',
    },
    {
        code: '',
        show : true,
        name : 'gender',
        text : 'Giới tính',
        value: '',
        type: 'select',
    },
    {
        attendace_code: '',
        show : true,
        name : 'attendace_code',
        text : 'Mã chấm công',
        value: '',
        type: 'text',

    // attendace_code: '',
    // code_storage: '',
    // name: '',
    // birthday: '',
    // gender: null,
    // military_service: null,
    // place_of_birthday: '',
    // origin_state: '',
    // private_code: '',
    // private_code_date: '',
    // private_code_place: null,
    // private_code_image_json: '',
    // nationality: null,
    // marital_status: null,
    // people: null,
    // religious: null,
    // job_bank_account: '',
    // job_bank_account_name: '',
    // job_tax: '',
    // cost_center : '',
    // job_date_join: '',
    // job_reldate_join: '',
    // level_school: null,
    // level_academic: null,
    // live_manager_id: null,
    // labor_group: null,
    // gps_location_ids: null
}])
const showEdit = ref(false)
const test = () => {
    showEdit.value = true
}
const arr = ref([
    {
        id : 1,
        name : 'Nam'
    },
    {
        id : 2,
        name : 'Nữ',
    },
    {
        id : 3,
        name : 'Không xác định'
    },
])
const reset = () => {
    formDefault.map(value => {
        value.show = true
        value.value = ''
    })
}

console.log(formDefault)
</script>

<template>
    <LayoutErp
        :title="title">
    <Head title="Create personnel" />
    <SectionMain class="!p-0">
      <CardBox
       :class="{
            'border border-gray-800 border-dashed' : showEdit
        }"
        form
        @submit.prevent="form.post(route('personnel.store'))"
      >
      <div class="w-[550px]">
        <i class="icon-settings cursor-pointer" @click="test"></i>
        <div class="form" v-for="(value, key) in formDefault" :key="key">
            <BaseInput
                v-if="value.show && value.type == 'text'"
                :title="value.text"
                v-model="value.value"
                :name="value.name"
                autocomplete="off"
              >
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer"  v-if="showEdit" @click="value.show = false" ></i>
                </div>
              <!--   <div class="text-red-400 text-sm absolute -bottom-3 left-0" >
                  sdsadsad
                </div> -->
            </BaseInput>
            <FormSelect
                v-if="value.show && value.type == 'select'"
                :title="value.text"
                :name="value.name"
                 v-model:id="value.value"
                icon="icon-expand-arrow"
                :suggest="true"
                :data="arr"
                autocomplete="off"
            >
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer" v-if="showEdit"  @click="value.show = false" ></i>
                </div>
            </FormSelect>
        </div>
      </div>
        <template #footer>
            <div v-if="showEdit" >
            <div class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border rounded ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white border-blue-600 dark:border-blue-500 hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 py-2 px-3 mr-3 last:mr-0 mb-3" @click="reset">Khôi phục</div>
                <div class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border rounded ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white border-blue-600 dark:border-blue-500 hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 py-2 px-3 mr-3 last:mr-0 mb-3" @click="showEdit = false">Save</div>
            </div>
          <BaseButtons v-if="!showEdit" >
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
  </LayoutErp>
</template>
