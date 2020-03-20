<template>
        <b-navbar toggleable="md" id="top-menu">
            <b-navbar-brand href="#"><img :src="'/img/micnoi-logo.png'"></b-navbar-brand>
            <b-navbar-nav class="registro-header">
                <b-nav-item>REGISTRATE<br><span class="exp-txt10">GRATIS</span></b-nav-item>
            </b-navbar-nav>
            <b-navbar-toggle target="nav-collapse" class="ml-auto hidden-sm-up float-xs-right"></b-navbar-toggle>

            <b-collapse id="nav-collapse" class="flex-column" is-nav>
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto" right>
                    <b-nav-item class="p-2" href="/">#INICIO</b-nav-item>
                    <b-nav-item class="p-2" href="/musician-list">#MUSICXS</b-nav-item>
                    <b-nav-item class="p-2" href="/offer-list">#OFFERS</b-nav-item>
                    <b-nav-item class="p-2" href="/help">#AYUDA</b-nav-item>
                </b-navbar-nav>
                <b-navbar-nav class="ml-auto flex-row" right>
                    <b-nav-item class="p-2" href="/about-us" to="/about-us">#QUIENES SOMOS</b-nav-item>
                    <b-nav-item class="p-2">#FANS</b-nav-item>
                    <b-nav-item class="p-2">#BLOG</b-nav-item>
                    <b-nav-item class="p-2">#PUBLICIDAD</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
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
