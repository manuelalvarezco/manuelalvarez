<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePayuResponses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payuResponses', function (Blueprint $table) {
            $table->id();
            $table->string('state_pol');
            $table->string('response_code_pol');
            $table->string('reference_sale');
            $table->string('reference_pol');
            $table->string('payment_method');
            $table->string('payment_method_type');
            $table->string('value');
            $table->string('tax');
            $table->string('transaction_date');
            $table->string('currency');
            $table->string('email_buyer');
            $table->string('description');
            $table->string('shipping_address');
            $table->string('shipping_city');
            $table->string('phone');
            $table->string('payment_method_id');
            $table->string('response_message_pol');
            $table->string('transaction_id');
            $table->string('payment_method_name');
            $table->string('nickname_buyer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payuResponses');
    }
}
