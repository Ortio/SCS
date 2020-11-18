require('./bootstrap');
window.Vue = require('vue');
import VueRouter from "vue-router";
import { DropdownPlugin, TablePlugin } from 'bootstrap-vue';
import router from './router';
import App from "./App";
import dateFilter from "./filters/date.filter";


Vue.use(VueRouter);
Vue.use(TablePlugin, DropdownPlugin);
Vue.filter('date', dateFilter);

new Vue({
    el: "#app",
    render: h=>h(App),
    router,
});

// console.log(route('home'));
// console.log(Lang.get('auth.failed'));



// console.log(data);
// const app = new Vue({
//     el: '#app'
// });
