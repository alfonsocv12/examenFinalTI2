<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
  protected $fillable = [
    'id', 'name', 'vin_number', 'owner'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
