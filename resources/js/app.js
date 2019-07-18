/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// window.$ = window.jQuery = require('jquery');
require('./bootstrap');
// window.Vue = require('vue');
import './registerPrompt';

$(document).foundation();

//Import ----

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Hello from './views/Hello'
import Home from './views/Home'
import UsersIndex from './views/UsersIndex';
import UsersEdit from './views/UsersEdit';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        {
            path: '/users/:id/edit',
            name: 'users.edit',
            component: UsersEdit,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});


import Swup from 'swup';
const swup = new Swup(); // only this line when included with script tag