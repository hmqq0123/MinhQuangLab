<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public   $timestamp=false;
 protected $fillabel=['name_customer','phone_customer','address_customer','email_customer'];
 protected $primaryKey='id_customer';
 protected $table='customer';
}
