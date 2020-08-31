/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from '../plugins/vuetify'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('toolbar-component', require('./components/ToolbarComponent.vue').default);
Vue.component('main-component', require('./components/MainComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('sidenav-component', require('./components/SidenavComponent.vue').default);
Vue.component('toolbar-dashboard-component', require('./components/ToolbarDashboardComponent.vue').default);
Vue.component('layout-component', require('./components/LayoutComponent.vue').default);
Vue.component('buttons-component', require('./components/ButtonsComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
Vue.component('services-component', require('./components/ServicesComponent.vue').default);
Vue.component('cetificates-component', require('./components/CertificatesComponent.vue').default);
Vue.component('contact-component', require('./components/ContactComponent.vue').default);
Vue.component('customers-component', require('./components/CustomerComponent.vue').default);
Vue.component('tags-component', require('./components/TagComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify: Vuetify,
    el: '#app',
});