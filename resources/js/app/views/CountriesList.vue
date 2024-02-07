<script setup lang="ts">
import { onBeforeMount, ref } from 'vue'
import { useCountryStore } from '@/app/stores/country'

const store = useCountryStore()
const countries = ref([])

onBeforeMount(async () => {
  countries.value = await store.list()
})
</script>

<template>
  <ul v-if="countries.length">
    <li v-for="country in countries" :key="country.code"></li>
  </ul>

  <p v-else>Loading...</p>
</template>

<style scoped></style>
