<template>
<v-app>
    <v-container fluid>
        <v-row>
            <v-col cols="2" sm="2">
                <v-row class="align-items-center">

                    <v-btn icon>
                        <v-icon>mdi-heart</v-icon>
                    </v-btn>
                    <span>23</span>
                </v-row>
            </v-col>
            <v-col cols="2" sm="2" class="ml-2">
                <v-row class="align-items-center">

                    <v-btn icon>
                        <v-icon>mdi-thumb-up</v-icon>
                    </v-btn>
                    <span>23</span>
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
    data: () => ({
        rules: [
            value => !!value || 'Required.',
            value => (value || '').length <= 50 || 'Max 20 characters',
        ],
        showComent : false,
    }),

    methods: {
        toogleShowComents(){
            this.showComent = !this.showComent;
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
