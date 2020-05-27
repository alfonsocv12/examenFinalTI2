<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Cars;
use App\ShopHasService;
use App\AppointmentService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'owner' => 'required',
            'name' => 'required',
            'vin_number' => 'required'
        ]);

        $car_id = $this->update_or_create_car($request)->id;
        $appointment = Appointment::create([
          'car_id' => $car_id,
          'shop_id' => $request->input('shop_id')
        ]);

        AppointmentService::create([
          'appointment_id' => $appointment->id,
          'shop_has_service_id' => $request->input('service_id')
        ]);

        return redirect("car/$car_id");
    }

    private function update_or_create_car($request){
      Cars::updateOrInsert(
        ['vin_number' => $request->input('vin_number')],
        ['owner' => $request->input('owner'),
         'name' => $request->input('name')]
      );

      return Cars::select('id')
        ->where('vin_number', $request->input('vin_number'))
        ->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        echo 'entro';
        AppointmentService::destroy($id);
        $car_id = $request->input('car_id');
        return redirect("car/$car_id");
    }
}
