<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicesList extends Model
{
  protected $table = 'services_list';
  
  protected $fillable = [
    'appointment_id', 'service_id'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
