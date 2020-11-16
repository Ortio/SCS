<template>
    <div class="all-main-tpl">

        <Sidebar />
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
    export default {
        name: "MainLayout",
        components: {Sidebar}
    }
</script>

