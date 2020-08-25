<template>
<v-app>
    <v-form ref="form" v-model="valid" lazy-validation>

        <v-text-field v-model="email" :rules="emailRules" label="E-mail"></v-text-field>

        <v-text-field type="password" v-model="password" :rules="passwordRules" label="Password" required></v-text-field>

        <v-btn :disabled="!valid" color="indigo white--text" class="mr-4" @click="login(routeHome)" block>
            Login
        </v-btn>

    </v-form>
</v-app>
</template>

<script>
export default {
    props: ["routeHome"],
    data: () => ({
        valid: true,
        password: '',
        passwordRules: [
            v => !!v || 'Password is required',
        ],
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],
    }),

    methods: {
        validate() {
            this.$refs.form.validate()
        },

        login(linkDashboard) {

            const body = {
                email: this.email,
                password: this.password
            };
            axios.post('/login', body)
                .then(resp => {
                    window.location.href = '/dashboard/home';
                })
                .catch(resp => console.log('WTF???'))
        }
    },
}
</script>
