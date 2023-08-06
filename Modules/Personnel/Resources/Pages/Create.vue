<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import { ref, reactive } from 'vue'
import {
  mdiArrowLeftBoldOutline
} from "@mdi/js"
import {
    gender,
    military_service,
    marital_status,
    people,
    religious,
    level_school,
    level_academic
} from './data.js'
import LayoutErp from "@erp/Layouts/LayoutErp.vue"
import SectionMain from "@erp/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@erp/Components/SectionTitleLineWithButton.vue"
import CardBox from "@erp/Components/CardBox.vue"
import BaseInput from "@erp/Components/BaseInput.vue"
import BaseInputSearch from "@erp/Components/BaseInputSearch.vue"
import FormSelect from "@erp/Components/FormSelect.vue"
import BaseButton from '@erp/Components/BaseButton.vue'
import BaseButtons from '@erp/Components/BaseButtons.vue'
import Datepicker from '@erp/Components/Datepicker.vue'
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
    job_bank_id: null,
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
        show : true,
        name : 'code',
        text : 'Mã nhân viên',
        value: '',
        type: 'text',
        required: true
    },
    {
        show : true,
        name : 'attendace_code',
        text : 'Mã chấm công',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'code_storage',
        text : 'Mã hồ sơ',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'name',
        text : 'Họ và tên',
        value: '',
        type: 'text',
        required: true
    },
    {
        show : true,
        name : 'birthday',
        text : 'Ngày sinh',
        value: '',
        type: 'date',
    },
    {
        show : true,
        name : 'gender',
        text : 'Giới tính',
        value: null,
        type: 'select',
        data: gender()
    },
    {
        show : true,
        name : 'military_service',
        text : 'Nghĩa vụ quân sự',
        value: null,
        type: 'select',
        data: military_service()
    },
    {
        show : true,
        name : 'place_of_birthday',
        text : 'Nơi sinh',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'origin_state',
        text : 'Nguyên quán',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'private_code',
        text : 'CMT/Căn cước/Hộ chiếu',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'private_code_date',
        text : 'Ngày cấp',
        value: '',
        type: 'date',
    },
    {
        show : true,
        name : 'private_code_place',
        text : 'Nơi cấp',
        value: '',
        type: 'search',
        url: '',
    },
    {
        show : true,
        name : 'nationality',
        text : 'Quốc tịch',
        value: '',
        type: 'search',
        url: '',
    },
    {
        show : true,
        name : 'marital_status',
        text : 'Tình trạng hôn nhân',
        value: null,
        type: 'select',
        data: marital_status()
    },
    {
        show : true,
        name : 'people',
        text : 'Dân tộc',
        value: null,
        type: 'select',
        data: people()
    },
    {
        show : true,
        name : 'religious',
        text : 'Tôn giáo',
        value: null,
        type: 'select',
        data: religious()
    },
    {
        show : true,
        name : 'job_bank_account',
        text : 'Số tài khoản',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'job_bank_account_name',
        text : 'Tên tài khoản',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'job_bank_id',
        text : 'Ngân hàng',
        value: null,
        type: 'select',
    },
    {
        show : true,
        name : 'job_tax',
        text : 'Mã số thuế cá nhân',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'cost_center',
        text : 'Mã đồng bộ',
        value: '',
        type: 'text',
        required: false
    },
    {
        show : true,
        name : 'job_date_join',
        text : 'Ngày vào',
        value: '',
        type: 'date',
    },
    {
        show : true,
        name : 'job_reldate_join',
        text : 'Ngày ký HĐLĐ chính thức',
        value: '',
        type: 'date',
    },
    {
        show : true,
        name : 'level_school',
        text : 'Trình độ phổ thông',
        value: null,
        type: 'select',
        data : level_school()
    },
    {
        show : true,
        name : 'level_academic',
        text : 'Trình độ học vấn cao nhất',
        value: null,
        type: 'select',
        data: level_academic()
    },
    {
        show : true,
        name : 'live_manager_id',
        text : 'Người quản lý trực tiếp',
        value: '',
        type: 'search',
        url: '',
    },
    {
        show : true,
        name : 'labor_group',
        text : 'Loại lao động',
        value: null,
        type: 'select',
    },
    {
        show : true,
        name : 'gps_location_ids',
        text : 'Địa điểm chấm công GPS',
        value: null,
        type: 'select',
    },
])
const col = ref(2)
const gap = ref(2)
const ratio = ref(21)
const showEdit = ref(false)
const edit = () => {
    gap.value = 6
    showEdit.value = true
}

const reset = () => {
    formDefault.map(value => {
        value.show = true
        value.value = ''
    })
}
const submit = () => {
    formDefault.map(data => {
        form[data.name] = data.value
    })
    console.log(form)
    // form.post(route('personnel.store'))
}
</script>

<template>
    <LayoutErp
        :title="title">
    <Head title="Create personnel" />
    <SectionMain class="!p-0">
        <div class="w-full bg-white px-6 py-3 flex items-center">
            <i class="icon-settings cursor-pointer" @click="edit"></i>
            <div class="ml-2 flex items-center" v-if="showEdit">
                <div class="bg-bghover mr-3 cursor-pointer hover:bg-bghover text-main text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-main border border-main inline-flex items-center justify-center" @click="col=1,gap=3,ratio=1">1:1</div>
                <div class="bg-bghover mr-3 cursor-pointer hover:bg-bghover text-main text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-main border border-main inline-flex items-center justify-center" @click="col=2,gap=6,ratio=21">2:1</div>
                <div class="bg-bghover mr-3 cursor-pointer hover:bg-bghover text-main text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-main border border-main inline-flex items-center justify-center" @click="col=2,gap=6,ratio=1">2:2</div>
                <div class="bg-bghover mr-3 cursor-pointer hover:bg-bghover text-main text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-main border border-main inline-flex items-center justify-center" @click="col=3,gap=6,ratio=31">3:1</div>

                <div class="bg-bghover mr-3 cursor-pointer hover:bg-bghover text-main text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-main border border-main inline-flex items-center justify-center" @click="col=3,gap=6,ratio=1">3:3</div>
            </div>
        </div>
      <CardBox
       :class="{
            'border border-gray-800 border-dashed' : showEdit
        }"
        form
        @submit.prevent="submit"
      >

      <div :class="'w-[550px] gap grid grid-cols-'+col+' gap-'+gap">

        <div class="form" v-for="(value, key) in formDefault" :key="key" :value="key+1"
            :class="{
                'col-span-3' : (key+1)%4 == 0 && ratio == 31,
                'col-span-2' : (key+1)%3 == 0 && ratio == 21
            }">
            <BaseInput
                v-if="value.show && value.type == 'text'"
                :title="value.text"
                v-model="value.value"
                :name="value.name"
                :required="value.required"
                autocomplete="off"
                :index="key"
                mb="mb-0"
              >
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer"  v-if="showEdit" @click="value.show = false" ></i>
                </div>
               <!-- <div class="text-red-400 text-sm absolute -bottom-3 left-0" >
                  sdsadsad
                </div> -->
            </BaseInput>
            <FormSelect
                v-if="value.show && value.type == 'select'"
                :title="value.text"
                :name="value.name"
                 v-model:id="value.value"
                icon="icon-expand-arrow"
                :index="key"
                :suggest="true"
                :data="value.data"
                autocomplete="off"
                mb="mb-0"
            >
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer" v-if="showEdit"  @click="value.show = false" ></i>
                </div>
            </FormSelect>
            <Datepicker
                v-if="value.show && value.type == 'date'"
                :title="value.text"
                :name="value.name"
                v-model="value.value"
                :index="key"
                mb="mb-0"
                :label="true">
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer"  v-if="showEdit" @click="value.show = false" ></i>
                </div>
            </Datepicker>
            <BaseInputSearch
                v-if="value.show && value.type == 'search'"
                :title="value.text"
                :name="value.name"
                 v-model="value.value"
                 :index="key"
                icon="icon-search "
                autocomplete="off"
                mb="mb-0"
                :suggest="true"
                >
                <div class="text-red-400 text-sm absolute top-6 -right-5" >
                  <i class="icon-cancel-circle cursor-pointer"  v-if="showEdit" @click="value.show = false" ></i>
                </div>
            </BaseInputSearch>
        </div>
      </div>
        <template #footer>
            <div v-if="showEdit" >
            <div class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border rounded ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white border-blue-600 dark:border-blue-500 hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 py-2 px-3 mr-3 last:mr-0 mb-3" @click="reset">Khôi phục</div>
                <div class="inline-flex cursor-pointer justify-center items-center whitespace-nowrap focus:outline-none transition-colors focus:ring duration-150 border rounded ring-blue-700 bg-blue-600 dark:bg-blue-500 text-white border-blue-600 dark:border-blue-500 hover:bg-blue-700 hover:border-blue-700 hover:dark:bg-blue-600 hover:dark:border-blue-600 py-2 px-3 mr-3 last:mr-0 mb-3" @click="showEdit = false, gap=2">Save</div>
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
