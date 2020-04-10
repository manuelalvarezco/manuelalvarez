<template>
  <v-app>
    <div class="footer">
      <div class="contenedor">
        <section class="logo">
          <img class="logo-img" src="/img/icono-blanco.png" alt="biowwell">
        </section>
        <section class="formulario">
          <h3 class="titulo">
            Regístrate y recibe los mejores concejos médicos para aumentar tu bienestar y relajación
          </h3>
          <div class="formulario-imputs">
            <label class="formulario-imputs__label" for="email">Tu correo electrónico</label>
            <input type="text" class="formulario-imputs__input" placeholder="Correo electrónico">
            <div class="formulario-imputs__box">
              <input type="checkbox" class="formulario-imputs__checkbox" name="term" id="term">
              <label class="terms" for="term">Acepto la política de protección de datos personales</label>
            </div>
            <button class="formulario-imputs__button">REGISTRARME</button>
          </div>
        </section>
      </div>
    </div>
  </v-app>
</template>

<script>
export default {
  
}
</script>