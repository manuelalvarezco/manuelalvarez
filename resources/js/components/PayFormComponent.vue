<template>
<div class="container mt-2">


  <v-app>

    <div class="container ">
      <div class="col-md-12 text-center">
        <h2 class="titulo primary-color">{{ payu.description }}</h2>
      </div>
      <div class="items-pago">
        <div class="contador">
          <div style="width:100%" class="d-flex justify-content-around">
            <button class="btn item-contador" v-on:click="res">
              -
            </button>
            <span>{{count}}</span>
            <button class="btn item-contador" v-on:click="add">
              +
            </button>
          </div>

        </div>
        <div class="amount">
          <h3 style="color:rgb(144, 141, 141)" class="titulo">
            ${{ formatPrice(payu.amount)}}
          </h3>
        </div>
      </div>
    </div>


    <form method="post" action="https://gateway.payulatam.com/ppp-web-gateway" autocomplete="off">
                        <!-- Url Pruebas: https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/ -->
                        <!-- Url Production: https://gateway.payulatam.com/ppp-web-gateway -->
      <input name="merchantId"  type="hidden"  v-model="parameters.merchantId" >
      <input name="accountId"     type="hidden"  v-model="parameters.accountId">
      <input name="description"   type="hidden"  v-model="payu.description">
      <input name="referenceCode" type="hidden" v-model="parameters.referenceCode">
      <input name="amount"        type="hidden" v-model="parameters.amount">
      <input name="tax"           type="hidden" v-model="payu.tax">
      <input name="taxReturnBase" type="hidden"  v-model="payu.taxReturnBase">
      <input name="currency"      type="hidden"  v-model="parameters.currency">
      <input name="signature"     type="hidden"  v-model="parameters.signature">
      <input name="test"          type="hidden"  v-model="payu.test">
      <input name="responseUrl"   type="hidden"  v-model="payu.responseUrl">
      <input name="shippingCountry" type="hidden"  v-model="payu.shippingCountry">
      <input name="confirmationUrl" type="hidden"  v-model="payu.confirmationUrl">

      <v-text-field
      name="buyerFullName"
      v-model="names"
      :rules="namesRules"
      label="Nombre completo"
      required
    ></v-text-field>
      <v-text-field
      name="buyerEmail"
      v-model="email"
      :rules="emailRules"
      label="Correo electrónio"
      required
    ></v-text-field>

    <v-text-field
    name="telephone"
      v-model="phone"
      :rules="phoneRules"
      label="Teléfono"
      required
    ></v-text-field>
    <v-text-field
      name="shippingCity"
      v-model="payu.shippingCity"
      :rules="deliveryRules"
      label="Ciudad de envío"
      required
    ></v-text-field>
    <v-text-field
    name="shippingAddress"
      v-model="delivery"
      :rules="deliveryRules"
      label="Dirección de envío"
      required
    ></v-text-field>
    <div class="d-flex justify-content-around">
      <v-btn
        :disabled="!valid"
        color="success"
        class="mr-4"
        type="submit"
      >
        Continuar
      </v-btn>
      <button v-on:click="cancelar" type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
    </div>
  </form>


  </v-app>
  </div>
</template>
<script>
  export default {
    data: () => ({
      count:1,
      payu:{
        price:69900,
        amount:69900,
        tax:0,
        description:'Crema Corporal Biowell',
        taxReturnBase:0,
        test:0,
        shippingCity:'',
        responseUrl:'https://ecommerce.biowell.co/site/public/gracias',
        confirmationUrl:'https://ecommerce.biowell.co/site/public/responsePayU',
        shippingCountry:'CO',
      },
      parameters:[],
      valid: true,
      phone:'',
      phoneRules: [
        v => !!v || 'El teléfono es requerido',
        v => (v && v.length <= 10) || 'El teléfono es inválido',
      ],
      city:'',
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
    mounted() {
      const amount = this.payu.amount;

      axios.post('pay',amount)
          .then(resp=>{
            this.parameters = resp.data;
          })
    },

    methods: {

      formatPrice(value) {
        let val = (value/1).toFixed(2).replace('.', ',')
        return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")
      },

      add(){
        this.count = this.count + 1;
        this.payu.amount = this.payu.price * this.count;


        this.getParameters(this.payu.amount);
      },

      res(){
        if (this.count > 1) {

          this.count = this.count  - 1;
          this.payu.amount = this.payu.price * this.count;
          this.getParameters(this.payu.amount);
        }

      },

      cancelar(){
          this.name='';
          this.email='';
          this.phone='';
          this.city='';
          this.delivery='';
      },

      getParameters(amount){


        axios.post('/site/public/pay',{'amount':amount})
          .then(resp=>{
            this.parameters = resp.data;
          })
      },


    },
  }
</script>
