<template>
    <!--<div class="container">
        <img :src="'/img/micnoi_logo.png'">
    </div>-->
    <b-navbar id="top-menu" class="w-100">
        <b-navbar-brand class="w-25" href="/">
            <img :src="'/img/micnoi-logo.png'">
        </b-navbar-brand>
        <b-navbar-nav class="items-menu w-25">
            <b-nav-item>REGISTRATE GRATIS</b-nav-item>
        </b-navbar-nav>
        <div class="d-flex flex-column w-50">
            <b-navbar-nav class="items-menu d-flex flex-row justify-content-between">
                <b-nav-item class="p-2"># INICIO</b-nav-item>
                <b-nav-item class="p-2"># MUSICXS</b-nav-item>
                <b-nav-item class="p-2"># PLAYLIST</b-nav-item>
                <b-nav-item class="p-2"># AYUDA</b-nav-item>
            </b-navbar-nav>
            <b-navbar-nav class="items-menu d-flex flex-row justify-content-between">
                <b-nav-item class="p-2"># QUIENES SOMOS</b-nav-item>
                <b-nav-item class="p-2"># FANS</b-nav-item>
                <b-nav-item class="p-2"># BLOG</b-nav-item>
                <b-nav-item class="p-2"># PUBLICIDAD</b-nav-item>
            </b-navbar-nav>
        </div>
    </b-navbar>
</template>

<script>
    export default {
        name: 'TopMenu',
        data() {
            return {
                logo: '/img/micnoi-logo.png',
            }
        }
    }
</script>

<style lang="scss" scoped>
#top-menu {
    vertical-align: center;

    .items-menu a{
        color: #ffffff;
    }
}
</style>