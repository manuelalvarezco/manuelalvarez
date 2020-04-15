<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PayuResponse extends Model
{
    protected $table = 'payuResponses';

    protected $fillable = [
        'state_pol', 'response_code_pol', 'reference_sale', 'reference_pol', 'payment_method', 'payment_method_type', 'value', 'tax', 'transaction_date', 'currency', 'email_buyer', 'description', 'shipping_city','shipping_address', 'phone', 'payment_method_id', 'response_message_pol', 'transaction_id', 'payment_method_name', 'nickname_buyer',
    ];
}
