<script setup>
import { Head, Link, useForm,router } from "@inertiajs/vue3"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import LayoutErp from "@/Erp/Layouts/LayoutErp.vue"

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
})

const form = useForm({
    search: props.filters.search,
})

const formDelete = useForm({})

function destroy(id) {
    if (confirm("Are you sure you want to delete?")) {
        formDelete.delete(route("erp.destroy", id))
    }
}
//router.reload({ only: ['datas'] });
</script>

<template>
    <LayoutErp>

    </LayoutErp>
</template>
