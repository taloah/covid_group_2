<?php

namespace App\Http\Controllers\API;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Patient_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Patient::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->user_id = $request["user_id"];
        $patient->names = $request["names"];
        $patient->last_names = $request["last_names"];
        $patient->phone = $request["phone"];
        $patient->age = $request["age"];
        $patient->allergies = $request["allergies"];
        $patient->diabetes = $request["diabetes"];
        $patient->hypertension = $request["hypertension"];
        $patient->IESS = $request["IESS"];
        $patient->size = $request["size"];
        $patient->weight = $request["weight"];
        $patient->take_medicine = $request["take_medicine"];
        $patient->description_medicine = $request["description_medicine"];
        $patient->save();

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patient =  Patient::find($id);
        $patient->user_id = $request["user_id"];
        $patient->names = $request["names"];
        $patient->last_names = $request["last_names"];
        $patient->phone = $request["phone"];
        $patient->age = $request["age"];
        $patient->allergies = $request["allergies"];
        $patient->diabetes = $request["diabetes"];
        $patient->hypertension = $request["hypertension"];
        $patient->IESS = $request["IESS"];
        $patient->size = $request["size"];
        $patient->weight = $request["weight"];
        $patient->take_medicine = $request["take_medicine"];
        $patient->description_medicine = $request["description_medicine"];
        $patient->save();    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient =  Patient::find($id);
        $patient->delete();
        return redirect('/');  

    }
}
