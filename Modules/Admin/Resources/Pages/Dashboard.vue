<script setup>
import { Head } from '@inertiajs/vue3'
import { computed, ref, onMounted } from 'vue'
import { useMainStore } from '@/Stores/main'
import * as chartConfig from '@/Components/Charts/chart.config.js'
import LineChart from '@admin/Components/Charts/LineChart.vue'
import SectionMain from '@admin/Components/SectionMain.vue'
import CardBoxWidget from '@admin/Components/CardBoxWidget.vue'
import CardBox from '@admin/Components/CardBox.vue'
import TableSampleClients from '@admin/Components/TableSampleClients.vue'
import NotificationBar from '@admin/Components/NotificationBar.vue'
import BaseButton from '@admin/Components/BaseButton.vue'
import CardBoxTransaction from '@admin/Components/CardBoxTransaction.vue'
import CardBoxClient from '@admin/Components/CardBoxClient.vue'
import LayoutAuthenticated from '@admin/Layouts/LayoutAuthenticated.vue'
import SectionTitleLineWithButton from '@admin/Components/SectionTitleLineWithButton.vue'
import SectionBannerStarOnGitHub from '@admin/Components/SectionBannerStarOnGitHub.vue'
const chartData = ref(null)
const fillChartData = () => {
  chartData.value = chartConfig.sampleChartData()
}
onMounted(() => {
  fillChartData()
})
const mainStore = useMainStore()

/* Fetch sample data */
mainStore.fetch('clients')
mainStore.fetch('history')

const clientBarItems = computed(() => mainStore.clients.slice(0, 4))
const transactionBarItems = computed(() => mainStore.history)
</script>

<template>
  <LayoutAuthenticated>
    <Head title="Dashboard" />
    <SectionMain>

    </SectionMain>
  </LayoutAuthenticated>
</template>
