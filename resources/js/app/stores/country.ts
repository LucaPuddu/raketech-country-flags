import { ref } from 'vue'
import { defineStore } from 'pinia'
import { Countries } from '@/app/services/api'

export const useCountryStore = defineStore('country', () => {
  const countries = ref([])

  async function list() {
    if (!countries.value || countries.value.length === 0) {
      countries.value = await Countries.list()
    }

    return countries.value
  }

  return { list }
})
