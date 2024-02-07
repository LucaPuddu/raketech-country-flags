import axios from 'axios'
import { route } from '@/ziggy'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

const Countries = {
  list: () => axios.get(route('api.countries')).then((res) => res.data)
}

export { Countries }
