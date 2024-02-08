import './assets/app.css'

import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { ZiggyVue, init as initZiggy } from '@/ziggy.js'
import { init as initTheme } from '@/app/services/theme'

import App from './App.vue'
import router from './router'

async function initApp() {
  await initZiggy()

  const app = createApp(App)

  app.use(ZiggyVue('appRoute'))
  app.use(createPinia())
  app.use(router)

  app.mount('#app')
}

initTheme()
initApp()
