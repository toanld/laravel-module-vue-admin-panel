<script setup>
import { computed } from 'vue'
import { containerMaxW } from '@erp/config.js';
import BaseLevel from '@erp/Components/BaseLevel.vue'
import JustboilLogo from '@erp/Components/JustboilLogo.vue'

const year = computed(() => new Date().getFullYear())
</script>

<template>
  <footer class="py-2 px-6">
    <BaseLevel :class="containerMaxW">
      <div class="text-center md:text-left">
        <b>&copy;{{ year }}, <a
          href="https://sosanhnha.com"
          target="_blank"
        >Sosanhnha.com</a></b>
      </div>
    </BaseLevel>
  </footer>
</template>
