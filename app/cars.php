<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
  protected $fillable = [
    'name', 'vin_number', 'owner'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
