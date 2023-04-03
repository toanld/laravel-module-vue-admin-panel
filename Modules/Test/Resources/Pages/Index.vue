<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
    mdiPlus,
    mdiCogOutline,
    mdiSquareEditOutline,
    mdiTrashCan,
    mdiAlertBoxOutline,
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import CardBox from "@/Components/CardBox.vue"
import BaseButtons from "@/Components/BaseButtons.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import Pagination from "@/Components/Admin/Pagination.vue"
import Sort from "@/Components/Admin/Sort.vue"

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
        formDelete.delete(route("test.destroy", id))
    }
}
console.log(props.datas);
</script>

<template>
    <LayoutAuthenticated>
        <Head title="datas" />
        <SectionMain>
            <SectionTitleLineWithButton
                title="Test"
                main
            >
                <BaseButton
                    v-if="can.create"
                    :route-name="route('test.create')"
                    :icon="mdiPlus"
                    label="Add"
                    color="info"
                    rounded-full
                    small
                />
            </SectionTitleLineWithButton>
            <NotificationBar
                v-if="$page.props.flash.message"
                color="success"
                :icon="mdiAlertBoxOutline"
            >
                {{ $page.props.flash.message }}
            </NotificationBar>
            <CardBox class="mb-6" has-table>
                <table>
                    <thead>
                    <tr>
                        <th>
                            STT
                        </th>
                        <th>
                            <Sort label="Name" attribute="name" />
                        </th>
                        <th>
                            Description
                        </th>
                        <th v-if="can.edit || can.delete || can.manage">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="(item,index) in datas.data" :key="item.id">
                        <td data-label="STT">
                            {{ (index+props.datas.from)}}
                        </td>
                        <td data-label="Name">
                            {{ item.name }}
                        </td>
                        <td data-label="Description">
                            {{ item.description }}
                        </td>
                        <td
                            v-if="can.edit || can.delete || can.manage"
                            class="before:hidden lg:w-1 whitespace-nowrap"
                        >
                            <BaseButtons type="justify-start lg:justify-end" no-wrap>
                                <BaseButton
                                    v-if="can.edit"
                                    :route-name="route('test.edit', item.id)"
                                    color="info"
                                    :icon="mdiSquareEditOutline"
                                    small
                                />
                                <BaseButton
                                    v-if="can.delete"
                                    color="danger"
                                    :icon="mdiTrashCan"
                                    small
                                    @click="destroy(item.id)"
                                />
                            </BaseButtons>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="py-4">
                    <Pagination :data="datas" />
                </div>
            </CardBox>
        </SectionMain>
    </LayoutAuthenticated>
</template>
