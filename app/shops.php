<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
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
