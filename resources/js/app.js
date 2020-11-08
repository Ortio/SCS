require('./bootstrap');
import { DropdownPlugin, TablePlugin } from 'bootstrap-vue';
Vue.use(DropdownPlugin);
Vue.use(TablePlugin);

import VueRouter from "vue-router";
import route from './route'
// import Lang from "./lang";


// const button = document.querySelector('#button');
// const tooltip = document.querySelector('#tooltip');
// createPopper(button, tooltip, {
//     placement: 'right',
// });

Vue.component('table-component', require('./components/TableComponent').default);
Vue.component('app-component', require('./components/AppComponent.vue').default);

new Vue({
    el: "#main",
    // template: "<table-component/>",
    // components: {},
});

// console.log(route('home'));
// console.log(Lang.get('auth.failed'));



// console.log(data);
// const app = new Vue({
//     el: '#app'
// });
