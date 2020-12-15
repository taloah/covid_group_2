<?php

namespace App\Http\Controllers\API;
use App\Models\Examn;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Examn_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Examn::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examn = new Examn();
        $examn->name = $request["name"];
        $examn->description = $request["description"];
        $examn->price = $request["price"];
        $examn->save();

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
        $examn =  Examn::find($id);
        $examn->name = $request["name"];
        $examn->description = $request["description"];
        $examn->price = $request["price"];
        $examn->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examn =  Examn::find($id);
        $examn->delete();
        return redirect('/');   
     }
}
