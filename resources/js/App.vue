<template>
    <component :is="layout">
<!--        <router-view />-->
    </component>
</template>

<script>
    // import Sidebar from "./components/app/Sidebar";

    import EmptyLayout from "./layouts/EmptyLayout";
    import MainLayout from "./layouts/MainLayout";
    export default {
        name: 'App',
        // props: ['data'],
        mounted () {
            // Как-то обрабатываем данные
            // console.log('Component mounted')
        },
        computed: {
            layout() {
                // console.log(this.$route.meta.layout);
                return (this.$route.meta.layout || 'Empty') + '-layout';
                // return this.$route.meta.layout;
            }
        },
        components: {MainLayout, EmptyLayout}
    }
</script>
<!--<style lang="css">-->
<!--    @import "/public/css/app.css";-->
<!--</style>-->
