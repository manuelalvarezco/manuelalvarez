<template>
<v-app>
    <v-tabs background-color="white" color="indigo ighten-5" right show-arrows>
        <v-tab>Angular</v-tab>
        <v-tab>Laravel</v-tab>
        <v-tab>Vue</v-tab>
        <v-tab-item>
            <v-container fluid>
                <v-row dense>
                    <v-col v-for="project in angular" :key="project.title" :lg="4" :md="6" :sm="12">
                        <v-card class="mx-auto" max-width="500">
                            <v-list-item>
                                <v-list-item-avatar color="grey">
                                    <v-img src="https://avatars2.githubusercontent.com/u/29968638?s=460&u=dc1f14def82e7452a7b0fbb8ab657d047a90dcc6&v=4">
                                    </v-img>
                                </v-list-item-avatar>
                                <v-list-item-content>
                                    <v-list-item-title class="headline">{{project.title}}</v-list-item-title>
                                    <v-list-item-subtitle>{{project.tecnology}}</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>

                            <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" height="200px"></v-img>

                            <v-card-text>
                                {{project.body | slice }}
                            </v-card-text>

                            <v-card-actions>
                                <v-btn :href="'/project/'+ project.slug " text color="deep-purple accent-4">
                                    Read
                                </v-btn>

                                <v-spacer></v-spacer>
                                <v-btn icon>
                                    <v-icon>mdi-heart</v-icon>
                                </v-btn>
                                <v-btn icon>
                                    <v-icon>mdi-share-variant</v-icon>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-tab-item>
        <v-tab-item>
            <v-container fluid>
                <v-row dense>
                    <v-col v-for="project in laravel" :key="project.title" :lg="4" :md="6" :sm="12">
                        <v-card class="mx-auto" max-width="500">
                            <v-list-item>
                                <v-list-item-avatar color="grey">
                                    <v-img src="https://avatars2.githubusercontent.com/u/29968638?s=460&u=dc1f14def82e7452a7b0fbb8ab657d047a90dcc6&v=4">
                                    </v-img>
                                </v-list-item-avatar>
                                <v-list-item-content>
                                    <v-list-item-title class="headline">{{project.title}}</v-list-item-title>
                                    <v-list-item-subtitle>{{project.tecnology}}</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>

                            <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" height="200px"></v-img>

                            <v-card-text>
                                {{project.body | slice }}
                            </v-card-text>

                            <v-card-actions>
                                <v-btn :href="'/project/'+ project.slug " text color="deep-purple accent-4">
                                    Read
                                </v-btn>

                                <v-spacer></v-spacer>
                                <v-btn icon>
                                    <v-icon>mdi-heart</v-icon>
                                </v-btn>
                                <v-btn icon>
                                    <v-icon>mdi-share-variant</v-icon>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-tab-item>
        <v-tab-item>
            <v-container fluid>
                <v-row dense>
                    <v-col v-for="project in vue" :key="project.title" :lg="4" :md="6" :sm="12">
                        <v-card class="mx-auto" max-width="500">
                            <v-list-item>
                                <v-list-item-avatar color="grey">
                                    <v-img src="https://avatars2.githubusercontent.com/u/29968638?s=460&u=dc1f14def82e7452a7b0fbb8ab657d047a90dcc6&v=4">
                                    </v-img>
                                </v-list-item-avatar>
                                <v-list-item-content>
                                    <v-list-item-title class="headline">{{project.title}}</v-list-item-title>
                                    <v-list-item-subtitle>{{project.tecnology}}</v-list-item-subtitle>
                                </v-list-item-content>
                            </v-list-item>

                            <v-img src="https://cdn.vuetifyjs.com/images/cards/house.jpg" height="200px"></v-img>

                            <v-card-text>
                                {{project.body | slice }}
                            </v-card-text>

                            <v-card-actions>
                                <v-btn :href="'/project/'+ project.slug " text color="deep-purple accent-4">
                                    Read
                                </v-btn>

                                <v-spacer></v-spacer>
                                <v-btn icon>
                                    <v-icon>mdi-heart</v-icon>
                                </v-btn>
                                <v-btn icon>
                                    <v-icon>mdi-share-variant</v-icon>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-tab-item>

    </v-tabs>

</v-app>
</template>

<script>
export default {
    data: () => ({
        angular: [],
        laravel: [],
        vue: [],
    }),

    mounted() {
        axios.get('api/projects/angular')
            .then(
                resp => this.angular = resp.data
            );

        axios.get('api/projects/laravel')
            .then(
                resp => this.laravel = resp.data
            );

        axios.get('api/projects/vue')
            .then(
                resp => this.vue = resp.data
            );
    },

    filters: {
        slice: function (value) {
            if (!value) return ''
            value = value.toString()
            return value.substring(0, 140) + '...';
        }
    }
}
</script>
