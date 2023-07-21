<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3"
import {
    mdiMenu,
    mdiArrowLeftBoldOutline
} from "@mdi/js"
import LayoutAuthenticated from "@admin/Layouts/LayoutAuthenticated.vue"
import SectionMain from "@admin/Components/SectionMain.vue"
import SectionTitleLineWithButton from "@admin/Components/SectionTitleLineWithButton.vue"
import CardBox from "@admin/Components/CardBox.vue"
import FormField from '@admin/Components/FormField.vue'
import FormControl from '@admin/Components/FormControl.vue'
import FormCheckRadioGroup from '@admin/Components/FormCheckRadioGroup.vue'
import BaseButton from '@admin/Components/BaseButton.vue'
import BaseButtons from '@admin/Components/BaseButtons.vue'

const props = defineProps({
    data: {
        type: Object,
        default: () => ({}),
    },
    item_options: {
        type: Object,
        default: () => ({}),
    },
})

const form = useForm({
    name: '',
    uri: '',
    description: '',
    enabled: true,
    parent_id: '',
    weight: ''
})

</script>

<template>
    <LayoutAuthenticated>
        <Head :title="$myTrans('Thêm mới danh mục blog')" />
        <SectionMain>
            <SectionTitleLineWithButton
                :title="$myTrans('Thêm danh mục blog')"
                main
            >
                <BaseButton
                    :route-name="route('blog.categories.index', data.id)"
                    :icon="mdiArrowLeftBoldOutline"
                    label="Back"
                    color="white"
                    rounded-full
                    small
                />
            </SectionTitleLineWithButton>
            <CardBox
                form
                @submit.prevent="form.post(route('blog.categories.store', data.id))"
            >
                <FormField
                    label="Tiêu đề"
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

                <FormField
                    label="Mô tả"
                    :class="{ 'text-red-400': form.errors.description }"
                >
                    <FormControl
                        v-model="form.description"
                        type="text"
                        placeholder="Enter Description"
                        :error="form.errors.description"
                    >
                        <div class="text-red-400 text-sm" v-if="form.errors.description">
                            {{ form.errors.description }}
                        </div>
                    </FormControl>
                </FormField>
                <FormCheckRadioGroup
                    v-model="form.enabled"
                    name="enabled"
                    :options="{ enabled: 'Enabled' }"
                />
                <FormField
                    label="Parent Item"
                    :class="{ 'text-red-400': form.errors.parent_id }"
                >
                    <FormControl
                        v-model="form.parent_id"
                        type="select"
                        placeholder="--ROOT--"
                        :error="form.errors.parent_id"
                        :options="item_options"
                    >
                        <div class="text-red-400 text-sm" v-if="form.errors.parent_id">
                            {{ form.errors.parent_id }}
                        </div>
                    </FormControl>
                </FormField>
                <FormField
                    label="Weight"
                    :class="{ 'text-red-400': form.errors.weight }"
                >
                    <FormControl
                        v-model="form.weight"
                        type="text"
                        placeholder="Enter Weight"
                        :error="form.errors.weight"
                    >
                        <div class="text-red-400 text-sm" v-if="form.errors.weight">
                            {{ form.errors.weight }}
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
