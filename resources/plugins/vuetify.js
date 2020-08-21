// You still need to register Vuetify itself
// src/plugins/vuetify.js
import '@mdi/font/css/materialdesignicons.css'
import Vue from 'vue'
import Vuetify from 'vuetify/lib'

Vue.use(Vuetify)

const opts = {
    icons: {
        iconfont: 'mdi',
    },
}

export default new Vuetify(opts)