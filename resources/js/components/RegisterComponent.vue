<template>
  <section class="formulario">
      <h3 v-bind:class="saved ? 'text-warning' : 'text-white'" class="titulo">
        {{message}}
      </h3>
       <form @submit.prevent="guardar">
        <div class="formulario-imputs">
          <label class="formulario-imputs__label" for="email">Tu correo electrónico</label>
          <input v-model="email"  type="text" class="formulario-imputs__input" name="email" required placeholder="Correo electrónico">

          <div class="formulario-imputs__box">
            <input type="checkbox" required class="formulario-imputs__checkbox" name="term" id="term">
            <label class="terms" for="term">Acepto la política de protección de datos personales</label>
          </div>
          <button type="submit" class="formulario-imputs__button">REGISTRARME</button>
        </div>
      </form>
    </section>
</template>

<script>
export default {
  data() {
    return {
      email:'',
      saved:false,
      message:'Regístrate y recibe los mejores consejos médicos para aumentar tu bienestar y relajación'
    }
  },

  methods: {
    guardar(){

      const params = {
        email:this.email,
      }
      this.email = '';

      axios.post('/wwwbiowellness/public/customers',params)
        .then( resp=>{
          this.message = 'Gracias por registrarte, pronto estaremos en contacto';
          this.saved = true;
        })
        .catch(error => {
        this.message = 'Gracias por registrarte, pronto estaremos en contacto';
          this.saved = true;
      })



    }
  },
}
</script>
