
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import router from './routes.js';
import IndexComponent from './components/IndexComponent'
import PostComponent from './components/PostComponent'
import LoginComponent from './components/LoginComponent'
const posts = new Vue({
    components: { IndexComponent, PostComponent, LoginComponent },
    router
}).$mount('#app')
