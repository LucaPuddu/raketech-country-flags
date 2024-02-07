import ziggyRoute from 'ziggy-js'
import axios from 'axios'

let fetchedOptions

function checkInit() {
  if (!fetchedOptions) {
    throw new Error('Routes must be initialized first.')
  }
}

export const init = async function () {
  if (!fetchedOptions) {
    fetchedOptions = await axios.get('/api/routes').then((res) => res.data)
  }
}

export const route = (name, params, absolute) => {
  checkInit()

  return ziggyRoute(name, params, absolute, fetchedOptions)
}

export const ZiggyVue = (routeMethod = 'route') => {
  checkInit()

  return {
    install(app, options = fetchedOptions) {
      const r = (name, params, absolute, config = options) =>
        ziggyRoute(name, params, absolute, config)

      app.mixin({
        methods: {
          [routeMethod]: r
        }
      })

      if (parseInt(app.version) > 2) {
        app.provide(routeMethod, r)
      }
    }
  }
}
