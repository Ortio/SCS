require('./bootstrap');
window.Vue = require('vue');
import VueRouter from "vue-router";
import { DropdownPlugin, TablePlugin } from 'bootstrap-vue';
Vue.use(DropdownPlugin);
Vue.use(TablePlugin);
Vue.use(VueRouter)

// import route from './route';
import router from './router';
import App from "./components/App";

// import Lang from "./lang";


// const button = document.querySelector('#button');
// const tooltip = document.querySelector('#tooltip');
// createPopper(button, tooltip, {
//     placement: 'right',
// });

// Vue.component('table-component', require('./components/TableComponent').default);
// Vue.component('app-component', require('./components/AppComponent.vue').default);

new Vue({
    el: "#app",
    render: h=>h(App),
    router,
    // template: "<table-component/>",
    // components: {},
});

// console.log(route('home'));
// console.log(Lang.get('auth.failed'));



// console.log(data);
// const app = new Vue({
//     el: '#app'
// });
