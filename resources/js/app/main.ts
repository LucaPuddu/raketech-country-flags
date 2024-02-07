import './assets/app.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { Ziggy, ZiggyVue } from '@/ziggy.js'

import App from './App.vue'
import router from './router'

async function initApp() {
  const app = createApp(App)

  app.use(ZiggyVue('appRoute'), await Ziggy())
  app.use(createPinia())
  app.use(router)

  app.mount('#app')
}
initApp()
