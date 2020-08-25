<template>
<v-app>
    <div class="container mt-4">
        <span>SERVICES</span>
    </div>
    <v-row >
        <v-col
        v-for=" service in services"
        :key="service.title"
        class="col-md-6"
        >


        <v-card class="mx-auto" max-width="344">
            <v-img :src="service.image | imagePipe"></v-img>

            <v-card-title>
                {{ service.title }}
            </v-card-title>

            <v-card-subtitle>
                Proyectos realizados : {{ service.projects }}
            </v-card-subtitle>
        </v-card>
        </v-col>
    </v-row>
</v-app>
</template>

<script>
export default {
    data: () => ({
        show: false,
        services: []
    }),

    mounted() {
        axios.get('api/services')
            .then( resp => {
                this.services = resp.data.services;
            })
    },

    filters: {
        imagePipe(image){
            if(!image){
                return 'https://cdn.vuetifyjs.com/images/parallax/material2.jpg';
            }
            return `/storage/${image}`;
        }
    }
}
</script>
