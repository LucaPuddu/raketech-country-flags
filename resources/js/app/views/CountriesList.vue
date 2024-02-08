<script setup lang="ts">
import { onBeforeMount, onMounted, ref } from 'vue'
import { useCountryStore } from '@/app/stores/country'

interface Country {
  name: string
  code: string
  flag: {
    url?: string | null
    alt?: string | null
  }
}

const store = useCountryStore()
const countries = ref<null | Country[]>(null)

const minimumFlagSize = 120
const minimumFlagSizePx = `${minimumFlagSize}px`
const lazyLoadAfter = ref(minimumFlagSize / 4)

onBeforeMount(async () => {
  countries.value = await store.list()
})

onMounted(() => {
  // Very rough way of taking larger screen into accounts, to minimize flash of content
  if (document.body.clientWidth >= 1800) {
    lazyLoadAfter.value = minimumFlagSize / 2
  }
})
</script>

<template>
  <div class="p-4">
    <h1
      class="uppercase text-4xl font-semibold mb-12 tracking-wider sm:text-center text-brand dark:text-brand-dark"
    >
      All World Flags
    </h1>

    <ul class="grid list gap-8" v-if="countries">
      <li v-for="(country, i) in countries" :key="country.code">
        <img
          :loading="i > lazyLoadAfter ? 'lazy' : undefined"
          :src="country.flag?.url ?? undefined"
          :alt="country.flag?.alt ?? country.name"
          class="mx-auto"
          :width="minimumFlagSize"
          :height="minimumFlagSize"
        />
        <p class="p-1 text-center break-words">{{ country.name }}</p>
      </li>
    </ul>

    <p v-else>Loading...</p>
  </div>
</template>

<style scoped lang="postcss">
.list {
  grid-template-columns: repeat(auto-fit, minmax(v-bind(minimumFlagSizePx), 1fr));
}
</style>
