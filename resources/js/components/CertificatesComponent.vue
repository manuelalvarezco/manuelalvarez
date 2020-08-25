<template>
<v-app>
    <div class="container mt-4">
        <span>Certificados</span>
    </div>

    <v-row>
        <v-col v-for=" certificate in certificates" :key="certificate.title" class="col-md-6">

            <v-card class="mx-auto" max-width="344">
                <v-img :src="certificate.image | imagePipe"></v-img>

                <v-card-title>
                    {{ certificate.title }}
                </v-card-title>

                <v-card-subtitle>
                    {{ certificate.school }}
                </v-card-subtitle>
                <v-card-subtitle>
                    {{ certificate.url }}
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
        certificates: []
    }),

    mounted() {
        axios.get('api/certificates')
            .then(resp => {
                this.certificates = resp.data.certificates;
            })
    },

    filters: {
        imagePipe(image) {
            if (!image) {
                return 'https://cdn.vuetifyjs.com/images/parallax/material2.jpg';
            }
            return `/storage/${image}`;
        }
    }
}
</script>
