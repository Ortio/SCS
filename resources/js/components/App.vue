<template>
    <router-view>

    </router-view>
</template>

<script>
    export default {
        name: 'App',
        props: ['data'],
        mounted () {
            // Как-то обрабатываем данные
            // console.log('Component mounted')
        },
    }
</script>
