<template>
<v-app>
    <v-footer class="indigo white--text text-center" absolute dark padless>
            <v-card-text>
                <v-btn v-for="icon in icons" :key="icon" class="mx-4 white--text" icon>
                    <v-icon size="24px">{{ icon }}</v-icon>
                </v-btn>
            </v-card-text>

            <v-card-text class="white--text pt-0">
                <v-row justify="center" no-gutters>
                    <v-btn v-for="link in links " :key="link.text" :href="link.url" color="white" text class="my-2 text-decoration-none">
                        {{ link.text }}
                    </v-btn>

                </v-row>
            </v-card-text>

            <v-divider></v-divider>

            <v-card-text class="white--text">
                {{ new Date().getFullYear() }} — <strong>Manuel Álvarez</strong>
            </v-card-text>
    </v-footer>
</v-app>
</template>

<script>
export default {
    data: () => ({
        icons: [
            'mdi-facebook',
            'mdi-twitter',
            'mdi-linkedin',
            'mdi-instagram',
        ],
        links: [
            {text:'Home', url:'/'},
            {text:'About', url:'/about'},
            {text:'Services', url:'/services'},
            {text:'Blog', url:'/blog'}
        ],
    }),
}
</script>
