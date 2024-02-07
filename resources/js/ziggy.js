import route from 'ziggy-js'
import axios from 'axios'

export const Ziggy = async () => axios.get('/api/routes').then((res) => res.data)

export const ZiggyVue = (routeMethod = 'route') => ({
  install(app, options) {
    const r = (name, params, absolute, config = options) => route(name, params, absolute, config)

    app.mixin({
      methods: {
        [routeMethod]: r
      }
    })

    if (parseInt(app.version) > 2) {
      app.provide(routeMethod, r)
    }
  }
})
