<?php

namespace App\Http\Controllers;

use App\Models\Avis_stat;
use Illuminate\Http\Request;

class Avis_statController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Avis_stat::all();
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
            'Telephone'=>'required',
            'Identifiant'=>'required',
            'Code_avis'=>'required',
            'Jaime'=>'required',
            'Id_code'=>'required'
        ]);
        return Avis_stat::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Avis_stat::find($id);
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
        $Avistat = Avis_stat::find($id);
        $Avistat -> update($request->all());
        return $Avistat;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Avis_stat::destroy($id);
    }
}
