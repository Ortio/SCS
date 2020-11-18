<template>
    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo"><a href="index.html"><img src="/images/logo.png" alt="" /></a></div>
                <ul>
                    <li class="label">Main</li>

                    <router-link
                        v-for="link in links"
                        :key="link.url"
                        tag="li"
                        active-class="active"
                        :to="link.url"
                        :exact="link.exact"
                    >
                        <a href="/">{{link.title}}</a>
                    </router-link>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Sidebar",
        props: ['value'],
        data: () => ({
            links: [
                {title: 'Home', url: '/', exact: true},
                {title: 'Orders', url: '/orders'}
            ]
        }),
        mounted () {
            // console.log(this.value);
        }

    }
</script>
