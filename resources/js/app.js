/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform'
window.Form = Form;
window.Fire = new Vue();

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
    color: 'rgb(143, 255, 199)',
    failedColor: 'red',
    height: '2px'
});

Vue.component('pagination', require('laravel-vue-pagination'));

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('app', require('./components/App.vue').default);
Vue.component('home-page', require('./components/HomePage.vue').default);
Vue.component('about-page', require('./components/AboutPage.vue').default);
Vue.component('activity-page', require('./components/ActivityPage.vue').default);
Vue.component('gde-page', require('./components/GdePage.vue').default);
Vue.component('appointment-page', require('./components/AppointmentPage.vue').default);
Vue.component('gde-user', require('./components/GdeUser.vue').default);
Vue.component('gallery-page', require('./components/GalleryPage.vue').default);
Vue.component('contact-page', require('./components/ContactPage.vue').default);
Vue.component('info-page', require('./components/InfoPage.vue').default);
Vue.component('dashboard-page', require('./components/DashboardPage.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
