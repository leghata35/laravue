/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('add-task', require('./components/AddTaskComponent.vue').default);
Vue.component('edit-task', require('./components/EditTaskComponent.vue').default);

import Home from './components/HomeComponent.vue';
import Tasks from './components/TasksComponent.vue';

Vue.use(VueRouter)



const routes = [
    {
        path: '/home',
        component: Home
    },
    {
        path: '/tasks',
        component: Tasks
    }
];

const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    router: router,
});
