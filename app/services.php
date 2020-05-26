<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
  protected $fillable = [
    'name'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
