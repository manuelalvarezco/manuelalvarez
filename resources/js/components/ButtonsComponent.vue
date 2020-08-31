<template>
<v-app>
    <v-container fluid>
        <v-row>
            <v-col cols="2" sm="2">
                <v-row class="align-items-center">

                    <v-btn icon @click="heartClick()" :color="heartColor">
                        <v-icon>mdi-heart</v-icon>
                    </v-btn>
                    <span>{{ allHearts }}</span>
                </v-row>
            </v-col>
            <v-col cols="2" sm="2" class="ml-2">
                <v-row class="align-items-center">

                    <v-btn icon @click="upClick()" :color="uptColor">
                        <v-icon>mdi-thumb-up</v-icon>
                    </v-btn>
                    <span>{{ allLikes }}</span>
                </v-row>
            </v-col>
        </v-row>

    </v-container>
</v-app>
</template>

<script>
export default {
    props: ["likes", "hearts", "id",'tags'],
    data: () => ({
        newTags:[],
        heartColor: '',
        uptColor: '',
        showComent: false,
        newLikes: 0,
        newHearts: 0,
        countLikes: 0,
        countHearts: 0
    }),

    computed: {
        allLikes() {
            return Number(this.likes) + this.newLikes;
        },

        allHearts() {
            return Number(this.hearts) + this.newHearts;
        },

        allTags(){
            return this.newTags = this.tags;
        }
    },

    watch: {
        allLikes(newValue, oldValue) {
            return newValue;

        }
    },

    methods: {

        heartClick(post) {
            this.heartColor = 'pink';

            if (this.newHearts < 1) {

                this.newHearts += 1;

                const body = {
                    hearts: this.allHearts,
                    id: this.id
                }

                axios.post('/api/posts-update', body)
                    .then(resp => {
                        if (resp.status === 'Ok') {
                            this.countHearts += 1;
                        }
                    })

            }

            return;

        },

        upClick() {
            this.uptColor = 'primary';

            if (this.newLikes < 1) {

                this.newLikes += 1;

                const body = {
                    likes: this.allLikes,
                    id: this.id
                }

                axios.post('/api/posts-update', body)
                    .then(resp => {
                        if (resp.status === 'Ok') {
                            this.countLikes += 1;
                        }
                    })
            }

            return;
        }
    }
}
</script>

<style scoped>
.v-application,
.v-application--wrap {
    max-height: 80px !important;
}
</style>
