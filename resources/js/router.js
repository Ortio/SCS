import VueRouter from "vue-router";
import MainPage from "./views/MainPage";
import Orders from './components/Orders';
// Orders = Vue.component('app-component', require('./components/AppComponent.vue').default);

export default new VueRouter({
    routes : [
        {
            path : '/',
            name: 'home',
            component: () => import('./views/MainPage'),
            // component: MainPage,
            meta: {layout: 'Main'}
        },
        {
            path : '/orders',
            name: 'orders',
            component: () => import('./components/Orders'),
            meta: {layout: 'Main'}
        },
        {
            path : '/orders/:id',
            name: 'order',
            component: () => import('./components/Orders'),
            meta: {layout: 'Main'}
        },
    ],
    mode : 'history',
})

