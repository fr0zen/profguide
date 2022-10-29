import Vue from 'vue'

import App from './App.vue';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';
import { routes } from './routes';
import VuePageTransition from 'vue-page-transition'

Vue.use(VuePageTransition)

Vue.use(VueRouter);
Vue.use(VueAxios, axios);
import SimpleVueValidation from 'simple-vue-validator';
const Validator = SimpleVueValidation.Validator;

Vue.use(SimpleVueValidation, {mode: 'conservative'});

const router = new VueRouter({
    mode: 'history',
    routes: routes,
    scrollBehavior() {
        return {x: 0, y: 0}
    }
});

import TextareaAutosize from 'vue-textarea-autosize'

Vue.use(TextareaAutosize)

/**
 * or
 */
Vue.prototype.$vuescrollConfig = {
    bar: {
        background: '#000'
    }
};
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});
