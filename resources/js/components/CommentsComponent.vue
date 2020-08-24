<template>
<v-app>
    <v-container fluid>
        <v-divider></v-divider>
        <v-row class="justify-content-between align-items-center">
            <small>Commentarios</small>
            <v-btn icon @click="toogleShowComents">
                <v-icon>mdi-comment</v-icon>
            </v-btn>

        </v-row>
        <v-form v-if="showComent">
            <v-textarea class="mx-2" label="Insertar" rows="2" :rules="rules"></v-textarea>
            <v-row class="justify-content-end">
                <v-btn class="white--text" color="indigo white--text" outlined>Comentar</v-btn>
            </v-row>
        </v-form>
        <div class="comments-box d-flex flex-column mt-4 ml-2">
            <div class="comments-item d-flex flex-column">
                <span class="mt-4 text-muted">Author of “Enjoli,” NOTHING GOOD CAN COME FROM THIS, and the forthcoming EXIT INTERVIEW, a memoir of ambition, work, and Amazon. www.kristicoulter.com</span>
                <em>23 Aug 2020</em>
            </div>
            <v-divider></v-divider>
            <div class="comments-item d-flex flex-column">
                <span class="mt-4 text-muted">Author of “Enjoli,” NOTHING GOOD CAN COME FROM THIS, and the forthcoming EXIT INTERVIEW, a memoir of ambition, work, and Amazon. www.kristicoulter.com</span>
                <em>23 Aug 2020</em>
            </div>
        </div>
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
        showComent: false,
    }),

    methods: {
        toogleShowComents() {
            this.showComent = !this.showComent;
        }
    }
}
</script>

<style scoped>

</style>
