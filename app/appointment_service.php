<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentService extends Model
{

  protected $fillable = [
    'appointment_id', 'shop_has_service_id', 'status'
  ];

  protected $hidden = [
    'created_at', 'updated_at', 'deleted_at'
  ];

  protected $cast = [

  ];
}
