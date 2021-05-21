<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
 public   $timestamp=false;
 protected $fillabel=['name_product','ram_product','rom_product','camera_product'];
 protected $primaryKey='id_product';
 protected $table='product';
}
