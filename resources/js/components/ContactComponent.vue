<template>
<v-app>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h5 class="text-center">CONTACT</h5>
                <div class="row align-items-start">
                    <div class="col-md-6">
                        <v-form v-model="valid" :lazy-validation="lazy" @submit.prevent="guardar">

                            <div class="form-group">
                                <v-text-field label="Email" v-model="email" :rules="emailRules" type="email" id="email" name="email" aria-describedby="email"></v-text-field>
                            </div>
                            <div class="form-group">
                                <v-text-field label="Name" v-model="name" :rules="nameRules" type="text" id="name" name="name"></v-text-field>
                            </div>
                            <div class="form-group">
                                <v-textarea label="Message" solo v-model="message" :rules="messageRules" id="message" name="message"></v-textarea>
                            </div>
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <v-checkbox v-model="checkbox" :rules="[v => !!v || 'You must agree to continue!']" label="Términos" required></v-checkbox>
                                <a href="#">Ver términos</a>
                            </div>
                            <button v-show="!sent" :disabled="!valid" type="submit" class="btn btn-primary btn-block">Submit</button>
                            <button v-show="sent" type="reset" class="btn btn-success btn-block">It was sent!</button>
                        </v-form>
                    </div>
                    <div class="col-md-6 hidden-sm-and-down contact-bg">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center ma-2">
        <v-snackbar v-model="snackbar" :timeout="timeout">
            {{ text }}

            <template v-slot:action="{ attrs }">
                <v-btn color="blue" text v-bind="attrs" @click="snackbar = false">
                    Close
                </v-btn>
            </template>
        </v-snackbar>
    </div>
</v-app>
</template>

<script>
export default {
    data() {
        return {
            valid: true,
            name: '',
            nameRules: [
                v => !!v || 'Name is required',
            ],
            email: '',
            emailRules: [
                v => !!v || 'E-mail is required',
                v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
            ],
            message: '',
            messageRules: [
                v => !!v || 'Message is required',
                v => (v && v.length <= 100) || 'Name must be less than 100 characters',
            ],
            checkbox: false,
            lazy: false,
            sent: false,
            snackbar: false,
            text: 'Sent!!',
            timeout: 5000,
        }
    },

    methods: {
        validate() {
            this.$refs.form.validate()
        },
        guardar() {

            const params = {
                name: this.name,
                email: this.email,
                message: this.message
            }
            this.email = '';

            axios.post('/api/customers', params)
                .then(resp => {
                    console.log(resp);
                    if (resp.status) {
                        this.snackbar = true;
                        this.sent = true;
                        this.email = 'Your@email.com';
                        this.name = 'Your name';
                        this.message = 'Your message';
                    }
                })
                .catch(error => {
                    console.log(error);
                })

        },

        reset() {
            this.$refs.form.reset()
        },
    },
}
</script>
