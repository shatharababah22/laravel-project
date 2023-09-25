<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;
use Illuminate\Http\Request;

class VolunteerDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $allVolun = Volnteer::all();
        return view('Dash.volunteers', compact('allVolun'));  
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
        $vol= new Volnteer;
        $vol->namevolunteer_name=$request->volunteer_name;
        $vol->description=$request->description;
        $vol->category_id=$request->category_id;
        $vol->price=$request->price;
        $vol->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteer $volnteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volnteer $volnteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteer $volnteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volnteer::where(['id'=>$id])->delete();
        return redirect()->route('all_volunteers')->with (['success'=>'job deleted successfully']);
       
    }
}
