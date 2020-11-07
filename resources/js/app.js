require('./bootstrap');
import { DropdownPlugin, TablePlugin } from 'bootstrap-vue';
Vue.use(DropdownPlugin);
Vue.use(TablePlugin);

// const button = document.querySelector('#button');
// const tooltip = document.querySelector('#tooltip');
// createPopper(button, tooltip, {
//     placement: 'right',
// });

Vue.component('table-component', require('./components/TableComponent').default);
Vue.component('app-component', require('./components/AppComponent.vue').default);

new Vue({
    el: "#content-vue",
    // template: "<table-component/>",
    // components: {},
});





// console.log(data);
// const app = new Vue({
//     el: '#app'
// });
