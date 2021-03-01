
require('./bootstrap');

// Vue Js
window.Vue = require('vue').default;

// V-form
import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);
window.Form = Form;

// Vue Router
import VueRouter from "vue-router";

Vue.use(VueRouter);

// Routes
import {routes} from "./routes/routes";

const router = new VueRouter({
    routes,
    mode: 'history'
});

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('dashboard', require('./components/backend/Dashboard').default);


const app = new Vue({
    el: '#app',
    router
});
