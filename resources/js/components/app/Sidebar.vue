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


<!--                    <li><a class="sidebar-sub-toggle"><i class="ti-home">-->
<!--                    </i> Dashboard <span class="badge badge-primary">2</span>-->
<!--                        <span class="sidebar-collapse-icon ti-angle-down"></span></a>-->
<!--                        <ul>-->
<!--                            <li><a href="index.html">Dashboard 1</a></li>-->
<!--                            <li><a href="index1.html">Dashboard 2</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Sidebar",
        data: () => ({
            links: [
                {title: 'Home', url: '/', exact: true},
                {title: 'Orders', url: '/orders'}
            ]
        })

    }
</script>
