<template>
<v-app>

    <v-app-bar color="indigo" dark :elevation="1" class="navbar">
        <v-toolbar-title>Manuel Álvarez</v-toolbar-title>

        <v-spacer></v-spacer>
        <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
        <div class="navbar-web__options">
            <v-btn href="#" text color="white--text">Logout</v-btn>
        </div>

    </v-app-bar>

    <v-navigation-drawer v-model="drawer" absolute :permanent="permanent">
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
                        <v-icon>mdi-view-dashboard</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a href="/dashboard/home">Dashboard</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-account</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a href="/dashboard/profile">Profile</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-image</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a href="/dashboard/posts">Posts</a>
                    </v-list-item-title>
                </v-list-item>

                <v-list-item>
                    <v-list-item-icon>
                        <v-icon>mdi-image</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <a href="/dashboard/projects">Projects</a>
                    </v-list-item-title>
                </v-list-item>

                    <v-list-item-icon>
                        <v-switch v-model="permanent" class="ma-2"></v-switch>
                    </v-list-item-icon>


            </v-list-item-group>
        </v-list>
        <template v-slot:append>
            <div class="pa-2">
                <v-btn href="#" color="indigo white--text" block>Logout </v-btn>
            </div>
        </template>
    </v-navigation-drawer>
</v-app>
</template>

<script>
export default {
    data: () => ({
        drawer: true,
        mobile: false,
        permanent: true,
    }),
}
</script>

<style scoped>
.v-application,
.navbar {
    max-height: 70px;
}
</style>
