<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $fillable = [
      'car_id', 'created_at', 'updated_at'
    ];

    protected $hidden = [
      'deleted_at'
    ];

    protected $cast = [

    ];
}
