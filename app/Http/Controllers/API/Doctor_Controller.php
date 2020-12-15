<?php

namespace App\Http\Controllers\API;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Doctor_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Doctor::all();
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
        $doctor = new Doctor();
        $doctor->user_id = $request["user_id"];
        $doctor->name = $request["name"];
        $doctor->about = $request["about"];
        $doctor->save();

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
        $doctor =  Doctor::find($id);
        $doctor->user_id = $request["user_id"];
        $doctor->name = $request["name"];
        $doctor->about = $request["about"];
        $doctor->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor =  Doctor::find($id);
        $doctor->delete();
        return redirect('/');
    }
}
