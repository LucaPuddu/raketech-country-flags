import { createRouter, createWebHistory } from 'vue-router'

const DEFAULT_PAGE_TITLE = 'Country Flags'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      meta: { title: 'Country Flags - List' },
      component: () => import('../views/CountriesList.vue')
    }
  ]
})

// Set page title on route change
router.beforeEach((to, from, next) => {
  const title = to.meta?.title ?? DEFAULT_PAGE_TITLE

  if (typeof title === 'string') {
    document.title = title
  }
  next()
})

export default router
