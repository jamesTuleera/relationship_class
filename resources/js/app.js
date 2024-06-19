import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from './Layouts/Layout.vue'
import {ZiggyVue} from '../../vendor/tightenco/ziggy'


import "bootstrap/dist/css/bootstrap.min.css"
import '../Assets/style.css'
import '../../public/pub_style.css'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    let page =  pages[`./Pages/${name}.vue`]
    page.default.page = page.default.page || Layout
    return page
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue)
      .mount(el)
  },

  progress: {

    // The color of the progress bar...
    color: 'red',

    // Whether to include the default NProgress styles...
    includeCSS: true,

    // Whether the NProgress spinner will be shown...
    showSpinner: true,
  },
  // ...
})
