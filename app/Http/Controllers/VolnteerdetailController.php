<?php

namespace App\Http\Controllers;

use App\Models\Volnteerdetail;
use App\Models\Volnteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolnteerdetailController extends Controller
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
            $volnteerDetails = VolnteerDetail::where('volunteer_id', $id)->get();
            $price = 0;
            foreach($volnteerDetails as $volnteerDetail){
    $price+=$volnteerDetail->price;
            }
    
            return view('pages.fund volunteer')->with("price",$price)->with("volnteer",$volnteer);
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
     * @param  \App\Models\Volnteerdetail  $volnteerdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteerdetail $volnteerdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volnteerdetail  $volnteerdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Volnteerdetail $volnteerdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteerdetail  $volnteerdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteerdetail $volnteerdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volnteerdetail  $volnteerdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volnteerdetail $volnteerdetail)
    {
        //
    }
}
