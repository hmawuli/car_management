require('./bootstrap');

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'

if (app){
    createInertiaApp({
        resolve: name => require(`./Pages/${name}`),
        setup({ el, App, props, plugin }) {
          Vue.use(plugin)

          new Vue({
            render: h => h(App, props),
          }).$mount(el)
        },
      })
}
