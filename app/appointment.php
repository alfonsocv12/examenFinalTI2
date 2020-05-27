<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';

    protected $fillable = [
      'car_id', 'shop_id', 'created_at', 'updated_at', 'deleted_at'
    ];

    protected $hidden = [
      // 'deleted_at'
    ];

    protected $cast = [

    ];
}
