<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services_list extends Model
{
  protected $fillable = [
    'appointment_id', 'service_id'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}