<template>
<v-app>

    <v-app-bar color="indigo text-white" dark :elevation="1" class="navbar">
        <v-app-bar-nav-icon id="navbar-mobile" @click="drawer = true"></v-app-bar-nav-icon>
        <v-spacer id="navbar-spacer__mobile"></v-spacer>
        <v-toolbar-title>
            <a class="text-white text-decoration-none" href="/">Manuel Álvarez</a>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <div class="navbar-web__options">
            <v-btn class="text-decoration-none" href="/" text>Home</v-btn>
            <v-btn class="text-decoration-none" href="/about"  text>About</v-btn>
            <v-btn class="text-decoration-none" href="/services"  text>Services</v-btn>
            <v-btn class="text-decoration-none" href="/blog" text>Blog</v-btn>
        </div>

        <v-spacer></v-spacer>
        <div class="navbar-web__options">

            <v-btn class="text-decoration-none" href="/login"  text color="white--text">Login</v-btn>
        </div>
    </v-app-bar>

    <v-navigation-drawer v-model="drawer" absolute temporary>
        <v-list>
            <v-list-item>
                <v-list-item-avatar>
                    <v-img src="https://avatars2.githubusercontent.com/u/29968638?s=460&u=dc1f14def82e7452a7b0fbb8ab657d047a90dcc6&v=4"></v-img>
                </v-list-item-avatar>
            </v-list-item>

            <v-list-item link>
                <v-list-item-content>
                    <v-list-item-title class="title">Manuel Álvarez</v-list-item-title>
                    <v-list-item-subtitle>hola@manuelalvarez.co</v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>
        </v-list>
        <v-list nav dense>

            <v-list-item-group active-class="deep-purple--text text--accent-4">
                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-home</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title >
                        <a class="text-decoration-none" href="/">Home</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-account</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a class="text-decoration-none" href="/about">About</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-contacts</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a class="text-decoration-none" href="/services">Services</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-blogger</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a class="text-decoration-none" href="/blog">Blog</a>
                    </v-list-item-title>
                </v-list-item>

            </v-list-item-group>
        </v-list>
        <template v-slot:append>
            <div class="pa-2">
                <v-btn href="/login" color="indigo white--text" block>Login</v-btn>
            </div>
        </template>
    </v-navigation-drawer>
</v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: false,
        mobile: false,
    }),
}
</script>

<style scoped>
.v-application,
.navbar {
    max-height: 70px;
}
</style>
