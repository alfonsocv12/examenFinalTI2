<?php

namespace App\Http\Controllers;

use App\Cars;
use App\AppointmentService;
use Illuminate\Http\Request;

class CarController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('car_appointments')
          ->with('car', Cars::find($id))
          ->with(
          'services',
          AppointmentService::select(
              'appointment_services.id', 'appointment_services.status', 'shv.service',
              'shv.shop', 'shv.price', 'shv.hours',
              'shv.minutes', 'shv.description')
            ->leftJoin('appointment as app',
              'app.id', '=', 'appointment_services.appointment_id')
            ->leftJoin('shop_serviece_view as shv',
              'shv.id', '=', 'appointment_services.shop_has_service_id')
            ->where('car_id', $id)
            ->whereNull('app.deleted_at')
            ->get()
        );
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
    public function destroy($id)
    {
        //
    }
}
