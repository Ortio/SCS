<template>
    <div class="all-main-tpl" :class="{'sidebar-hide': !isOpen}" >

        <Sidebar/>
        <Header @hideSidebar = "isOpen = !isOpen" />

        <div class="content-wrap">
            <div class="main">
                <section id="main-content">
                    <router-view />
                </section>
            </div>
        </div>
    </div>

</template>

<script>
    // import Orders from "../components/Orders";
    import Sidebar from "../components/app/Sidebar";
    import Header from "../components/app/Header";
    export default {
        name: "MainLayout",
        data: ()=>({
            isOpen: true,
        }),
        components: {Sidebar, Header}
    }
</script>

