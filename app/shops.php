<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
  protected $fillable = [
    'name', 'location'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
