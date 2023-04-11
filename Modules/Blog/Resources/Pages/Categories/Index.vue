<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
    mdiLink,
    mdiPlus,
    mdiSquareEditOutline,
    mdiTrashCan,
    mdiAlertBoxOutline,
    mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@/Components/SectionTitleLineWithButton.vue"
import BaseButton from "@/Components/BaseButton.vue"
import CardBox from "@/Components/CardBox.vue"
import BaseButtons from "@/Components/BaseButtons.vue"
import NotificationBar from "@/Components/NotificationBar.vue"
import ItemList from "@modules/Blog/Resources/Components/ItemList.vue"

const props = defineProps({
    items: {
        type: Object,
        default: () => ({}),
    },
    menu: {
        type: Object,
        default: () => ({}),
    },
    can: {
        type: Object,
        default: () => ({}),
    },
})




</script>

<template>
    <LayoutAuthenticated>
        <Head :title="$myTrans('Category blog')" />
        <SectionMain>
            <SectionTitleLineWithButton
                :title="$myTrans('Danh mục blog')"
                main
            >
                <BaseButtons type="justify-start lg:justify-end" no-wrap>
                    <BaseButton
                        :route-name="route('blog.categories.index')"
                        :icon="mdiArrowLeftBoldOutline"
                        label="Back"
                        color="white"
                        rounded-full
                        small
                    />
                </BaseButtons>
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
                            Name
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Enable
                        </th>
                        <th v-if="can.edit || can.delete">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <template v-for="item in items">
                        <ItemList :item="item" :menu="menu" :can="can" :level=0 />
                    </template>
                    </tbody>
                </table>

            </CardBox>
        </SectionMain>
    </LayoutAuthenticated>
</template>
