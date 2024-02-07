<script setup lang="ts">
import { inject } from 'vue'

const route: Function | undefined = inject('appRoute')
</script>

<template>
  Test <template v-if="route">{{ route('api.countries') }}</template>
</template>

<style scoped></style>
