<template>
<div class="container mt-2">


  <v-app>
  <v-form
    ref="form"
    v-model="valid"
    lazy-validation
  >
    <v-text-field
      v-model="names"
      :rules="namesRules"
      label="Nombre completo"
      required
    ></v-text-field>

    <v-text-field
      v-model="email"
      :rules="emailRules"
      label="Correo electrónio"
      required
    ></v-text-field>

    <v-text-field
      v-model="phone"
      :rules="phoneRules"
      label="Teléfono"
      required
    ></v-text-field>

    <v-text-field
      v-model="delivery"
      :rules="deliveryRules"
      label="Dirección"
      required
    ></v-text-field>

    

    <div class="d-flex justify-content-around">
      <v-btn
        :disabled="!valid"
        color="success"
        class="mr-4"
        @click="validate"
      >
        Continuar
      </v-btn>
      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
    </div>
    
  </v-form>
  </v-app>
  </div>
</template>
<script>
  export default {
    data: () => ({
      valid: true,
      
      phone:'',
      phoneRules: [
        v => !!v || 'El teléfono es requerido',
        v => (v && v.length <= 10) || 'El teléfono es inválido',
      ],
      delivery:'',
      deliveryRules: [
        v => !!v || 'La dirección es requerida'
      ],
      names: '',
      namesRules: [
        v => !!v || 'El nombre es requerido',
      ],
      email: '',
      emailRules: [
        v => !!v || 'El correo es requerido',
        v => /.+@.+\..+/.test(v) || 'Correo inválido',
      ],
      checkbox: false,
    }),

    methods: {
      validate () {
        this.$refs.form.validate()
      },
      reset () {
        this.$refs.form.reset()
      },
      resetValidation () {
        this.$refs.form.resetValidation()
      },
    },
  }
</script>