import axios from 'axios';
// window.axios = require('axios');
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import router from './router';

Vue.use(VueRouter);


Vue.component('navigasi', require('./components/navigasi.vue').default);



const app = new Vue({
    el: '#parsinta',
    router : new VueRouter(router),
});
