<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop_has_service extends Model
{
  protected $fillable = [
    'shop_id', 'service_id', 'price',
    'hours', 'minutes'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
