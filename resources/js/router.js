import VueRouter from "vue-router";
import Orders from './components/Orders';
// Orders = Vue.component('app-component', require('./components/AppComponent.vue').default);

export default new VueRouter({
    routes : [
        {
            path : '/',
            component: Orders
        }
    ],
    mode : 'history',
})

