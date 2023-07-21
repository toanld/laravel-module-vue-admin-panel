<script setup>
import { Head, Link, useForm,router } from "@inertiajs/vue3"
import LayoutErp from "@erp/Layouts/LayoutErp.vue"
import { onMounted } from 'vue'
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
    title: String
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
//router.reload({ only: ['datas'] });
</script>

<template>
 <LayoutErp
    :title="title">
<div id="accordion-open" class="overflow-y-auto h-screen" >
    đến ngay chi nhánh CellphoneS gần nhất để được tư vấn chọn mua bạn nhé.
</div>
 </LayoutErp>
</template>

