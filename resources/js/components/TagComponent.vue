<template>
<v-app>
    <v-container fluid>
        <v-form ref="form" v-model="valid" lazy-validation>
            <v-select v-model="valuePost" :items="posts" label="Post" item-text="title" item-value="id" return-object :rules="[v => !!v || 'Item is required']">
                <template v-slot:selection="{ item }">
                    <v-chip class="ma-2" label>
                        <span>{{ item.title}}</span>
                    </v-chip>
                </template>
            </v-select>
            <v-select v-model="value" :items="tags" label="Tags" item-text="name" item-value="id"  multiple>
                <template v-slot:selection="{ item }">
                    <v-chip class="ma-2" label>
                        <span>{{ item.name }}</span>
                    </v-chip>
                </template>
            </v-select>
            <v-btn :disabled="!valid" color="primary" class="mr-4" @click="save">Submit</v-btn>
        </v-form>

    </v-container>
</v-app>
</template>

<script>
export default {
    data: () => ({
        valid: true,
        tags: [],
        value: [],
        posts: [],
        valuePost: null
    }),
    mounted() {
        axios.get('/api/tags')
            .then(resp => {
                this.tags = resp.data;
            })

        axios.get('/api/posts')
            .then(resp => {
                this.posts = resp.data;
            })
    },

    methods: {
        save(){
            const body = {
                post_id: this.valuePost.id,
                tags_id: this.value
            }

            console.log(body);

            axios.post('/api/tags',body)
                .then( resp => {
                    console.log(resp);
                })

        }
    }

}
</script>

<style scoped>
.v-application,
.v-application--wrap {
    max-height: 200px !important;
}
</style>
