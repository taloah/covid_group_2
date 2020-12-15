<?php

namespace App\Http\Controllers\API;
use App\Models\Appoinment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Appoinment_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Appoinment::all();
    }
    //Retorna Datos.

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appoinments = new Appoinment();
        $appoinments->doctor_id = $request["doctor_id"];
        $appoinments->patient_id = $request["patient_id"];
        $appoinments->exmans_id = $request["exmans_id"];
        $appoinments->user_id = $request["user_id"];
        $appoinments->date_appointment = $request["date_appointment"];
        $appoinments->hour_appointment = $request["hour_appointment"];
        $appoinments->attended = $request["attended?"];
        $appoinments->save();
    }
    //Ingresa Datos a la tabla 

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appoinments =  Appoinment::find($id);
        $appoinments->doctor_id = $request["doctor_id"];
        $appoinments->patient_id = $request["patient_id"];
        $appoinments->exmans_id = $request["exmans_id"];
        $appoinments->user_id = $request["user_id"];
        $appoinments->date_appointment = $request["date_appointment"];
        $appoinments->hour_appointment = $request["hour_appointment"];
        $appoinments->attended = $request["attended?"];
        $appoinments->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appoinments =  Appoinment::find($id);
        $appoinments->delete();
        return redirect('/');
    }
}
