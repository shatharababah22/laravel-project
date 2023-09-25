<?php

namespace App\Http\Controllers;
use App\Models\Volnteer;
use App\Models\Volnteerdetail;
use Illuminate\Http\Request;

class VolnteerdetailDashhController extends Controller
{
    public function index()
    {
        $users = Volnteer::select('users.name', 'users.email', 'volnteers.volunteer_name',
         'volnteerdetails.price')
        ->join('volnteerdetails', 'volnteers.id', '=', 'volnteerdetails.volunteer_id')
        ->join('categories', 'volnteers.category_id', '=', 'categories.id')
        ->join('users', 'users.id', '=', 'volnteerdetails.user_id')
        ->get();
     
            //  dd($users1);  

            return view("Dash.detail")->with("users",$users);
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
