<template>
<v-app>
    <v-container fluid>
        <v-row>
            <v-col cols="2" sm="2">
                <v-row class="align-items-center">

                    <v-btn icon @click="heartClick()" :color="heartColor">
                        <v-icon>mdi-heart</v-icon>
                    </v-btn>
                    <span>{{ hearts }}</span>
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
        <v-row>
            <v-chip class="ma-2" label>
                Empleo
            </v-chip>
            <v-chip class="ma-2" label>
                Desarrollador
            </v-chip>
            <v-chip class="ma-2" label>
                Colombia
            </v-chip>
            <v-chip class="ma-2" label>
                Trabajo Remoto
            </v-chip>
        </v-row>


    </v-container>
</v-app>
</template>

<script>
export default {
    props: ["likes", "hearts", "id"],
    data: () => ({
        heartColor:'',
        uptColor:'',
        showComent : false,
        newLikes : 0
    }),

    mounted(){
        console.log('likes ',this.likes);
        console.log('hearts ',this.hearts);
    },

    computed:{
        allLikes(){
            return Number(this.likes) + this.newLikes;
        }
    },

    watch:{
        allLikes(newValue, oldValue){
            return newValue;

        }
    },

    methods: {

        heartClick(post){
            this.heartColor = 'pink';
        },

        upClick(){
             this.uptColor = 'primary';
             this.newLikes +=1;


             const body = {
                 likes: this.allLikes,
                 id: this.id
             }

            console.log(body);


            axios.post('/api/posts-update',body)
                .then( resp => console.log(resp))
        }
    }
}
</script>

<style scoped>
    .v-application,
    .v-application--wrap{
        max-height: 200px!important;
    }
</style>
