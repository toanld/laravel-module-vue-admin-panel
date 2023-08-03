<script setup>
import { Head, Link, useForm,router } from "@inertiajs/vue3"
import LayoutErp from "@erp/Layouts/LayoutErp.vue"
import BaseInput from "@erp/Components/BaseInput.vue"
import BaseInputSearch from "@erp/Components/BaseInputSearch.vue"

import FormSelect from "@erp/Components/FormSelect.vue"

import { onMounted, ref } from 'vue'
import { initFlowbite } from 'flowbite'
onMounted(() => {
    initFlowbite();
})
const props = defineProps({
    datas: {
        type: Object,
        default: () => ({}),
    },
    filters: {
        type: Object,
        default: () => ({}),
    },
    can: {
        type: Object,
        default: () => ({}),
    },
    title: String,
    meno: String
})

const form = useForm({
    search: props.filters.search,
})

const formDelete = useForm({})

function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        formDelete.delete(route("personnel.destroy", id))
    }
}
const test = ref('sss')
const test2  = ref('')
const id = ref(0)
//router.reload({ only: ['datas'] });
const arr = ref([
    {
        id : 1,
        name : 'Đã đi'
    },
    {
        id : 2,
        name : 'Chưa đi',
    },
    {
        id : 3,
        name : 'Không phải đi'
    },
])
</script>

<template>
 <LayoutErp
    :title="title">
<div id="accordion-open" class="overflow-y-auto h-screen" >
    <div>đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.</div>
     <BaseInput
        title="Họ và tên"
        v-model="test"
        name="name"
        ></BaseInput>
        <div class="flex">
            <div class="w-1/3">
                <FormSelect
                    title="Họ và tên"
                    v-model:id="id"
                    name="old"
                    icon="icon-expand-arrow"
                    :suggest="true"
                    :data="arr"
                    >
                </FormSelect>
            </div>
            <div class="w-2/3">
                <BaseInputSearch
                    title="Nơi cấp"
                    name="private_code_place"
                    icon="icon-search"
                    v-model="test2"
                    :suggest="true"
                    url="/personnel/notifications"
                    >

                </BaseInputSearch>
            </div>
        </div>

    đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.
</div>
 </LayoutErp>
</template>

