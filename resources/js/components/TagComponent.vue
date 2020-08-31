<template>
<v-app>
    <v-container fluid>
        <v-select v-model="valuePost" :items="posts" label="Post">
            <template v-slot:selection="{ item }">
                <v-chip class="ma-2" label>
                    <span>{{ item }}</span>
                </v-chip>
            </template>
        </v-select>
        <v-select v-model="value" :items="tags" label="Tags" multiple>
            <template v-slot:selection="{ item }">
                <v-chip class="ma-2" label>
                    <span>{{ item }}</span>
                </v-chip>
            </template>
        </v-select>
    </v-container>
</v-app>
</template>

<script>
export default {
    data: () => ({
        tags: [],
        value: [],
        posts: [],
        valuePost:null
    }),
    mounted() {
        axios.get('/api/tags')
            .then(resp => {

                const names = [];

                for (const key in resp.data) {
                    if (resp.data.hasOwnProperty(key)) {
                        const element = resp.data[key];
                        names.push(element.name)
                    }
                }
                this.tags = names;

            })

        axios.get('/api/posts')
            .then( resp => {

                const titles = [];

                for (const key in resp.data) {
                    if (resp.data.hasOwnProperty(key)) {
                        const element = resp.data[key];
                        titles.push(element.title)
                    }
                }

                this.posts = titles;
            })
    },

    methods: {

    }


}
</script>

<style scoped>
.v-application,
.v-application--wrap {
    max-height: 200px !important;
}
</style>
