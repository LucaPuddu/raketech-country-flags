<script setup lang="ts">
import { onBeforeMount, ref } from 'vue'
import { useCountryStore } from '@/app/stores/country'

interface Country {
  name: string
  code: string
  flag: {
    url?: string | null
    alt?: string | null
  }[]
}

const store = useCountryStore()
const countries = ref<null | Country[]>(null)

onBeforeMount(async () => {
  countries.value = await store.list()
})
</script>

<template>
  <ul v-if="countries">
    <li v-for="country in countries" :key="country.code">{{ country.code }}</li>
  </ul>

  <p v-else>Loading...</p>
</template>

<style scoped></style>
