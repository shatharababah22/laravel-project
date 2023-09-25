<?php

namespace App\Http\Controllers;

use App\Models\Volnteeritem;
use App\Models\Volnteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolnteeritemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if (Auth::check()) {
            $volnteer = Volnteer::find($id);
       

            return view("pages.item volunteer")->with("volnteer",$volnteer);
        }else{
            return redirect()->route("login");

        }
       
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
            'number' => ['required', 'regex:/^07\d{8}$/'],
            'location' => ['required'],
            'qty' => ['required', 'numeric'],

        ]);

$volitem = new Volnteeritem;

$volitem->qty = $request->input('qty');
$volitem->number = $request->input('number');
$volitem->location = $request->input('location');
$volitem->user_id =Auth::user()->id;
$volitem->volunteer_id = $request->input('id');
    $volitem->save();
    session(['reques' => $request->qty]);

return view("pages.billitem");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function edit(Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteeritem $volnteeritem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteeritem  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volnteeritem $volnteeritem)
    {
        //
    }
}
