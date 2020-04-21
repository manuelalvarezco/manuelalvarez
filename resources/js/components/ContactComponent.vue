
<template>
    <v-app>

    <v-form
      ref="form"
      v-model="valid"
      :lazy-validation="lazy"
    >
      <v-text-field
        v-model="names"
        :rules="namesRules"
        label="Nombres"
        required
      ></v-text-field>

      <v-text-field
        v-model="email"
        :rules="emailRules"
        label="Correo Electrónico"
        required
      ></v-text-field>

      <v-text-field
        v-model="phone"
        :rules="phoneRules"
        label="Teléfono"
        required
      ></v-text-field>

      <v-textarea
          solo
          v-model="message"
          :rules="messageRules"
          label="Mensaje"
        ></v-textarea>

      <v-checkbox
        v-model="checkbox"
        :rules="[v => !!v || 'Acepta para continuar!']"
        label="Acepto términos y condiciones"
        required
      ></v-checkbox>



      <v-btn
      :disabled="!valid"
      class="btn-block"
        color="primary"
        @click="guardar"
      >
       ENVIAR
      </v-btn>

      <v-overlay
          :absolute="absolute"
          :opacity="opacity"
          :value="overlay"
        >
        <div class="d-flex justify-content-center flex-column align-items-center">
            <h3>Gracias!</h3>
          <v-btn @click="overlay = false" class="mx-2" fab dark small color="teal">
            <v-icon dark>done</v-icon>
        </v-btn>
        </div>
        </v-overlay>


    </v-form>
    <div class="mt-2">
        <v-progress-linear
        v-if="spiner"
      indeterminate
      color="cyan"
    ></v-progress-linear>
    </div>





    </v-app>
</template>

<style scoped>
.theme--light.v-application {
    @media screen and(min-width: 767px) {
        width: 400px!important;
    }
}
</style>

<script>
  export default {
    data: () => ({
        overlay: false,
        absolute: true,
        opacity: .7,
        spiner:false,
      valid: true,
      names: '',
      namesRules: [
        v => !!v || 'El nombre es requerido',
      ],
      phone: '',
      phoneRules: [
        v => !!v || 'El teléfono es requerido',
        v => (v && v.length <= 10) || 'El telefono debe ser válido',
      ],
      message: '',
      messageRules: [
        v => !!v || 'El mensaje es requerido',
      ],
      email: '',
      emailRules: [
        v => !!v || 'El correo es requerido',
        v => /.+@.+\..+/.test(v) || 'Debe ser un correo válido',
      ],
      checkbox: false,
      lazy: false,
    }),


    methods: {

      validate () {
        this.$refs.form.validate()
      },

      guardar(){
          this.spiner = true;

          let params = {
              'names':this.names,
              'email':this.email,
              'phone':this.phone,
              'message':this.message,

          }
          axios.post('/wwwbiowellness/public/customers',params)
            .then( resp=>{
                this.spiner=false;
                this.overlay = true;
                this.$refs.form.reset()
            })
      },

      reset () {
        this.$refs.form.reset()
      },
      resetValidation : () => {
        this.$refs.form.resetValidation()
      },


    },
  }
</script>
