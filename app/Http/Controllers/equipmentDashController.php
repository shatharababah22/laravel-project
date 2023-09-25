<?php

namespace App\Http\Controllers;

use App\Models\Volnteer;

use App\Models\Volnteerdetail;
use App\Models\Volnteeritem;
use Illuminate\Http\Request;

class equipmentDashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $equipment= Volnteer::where('category_id', 2)->get();
        return view('Dash.Equipment', compact('equipment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dash.addequ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        
        $request->validate([
            'volunteer_name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required',
            'main_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         
            'price' => 'required|numeric',

        ]);

        $input = [
            'volunteer_name' => $request->input('volunteer_name'),
            'description' => $request->input('description'),
            'category_id' => '2', // Setting category_id to the default value '1'
            'price' => $request->input('price'), // Assuming 'price' is the correct key
        ];
        

        if ($image = $request->file('main_picture')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['main_picture'] = "$profileImage";
        }

        Volnteer::create($input);

        return redirect()->route('equipment.index')->with('success','Equipment added successfully.');



        // Volnteer::create([
        //     'volunteer_name' => $request->volunteer_name,
        //     'category_id' => $request->category_id,
        //     'price' => $request->price,
        //     'description' => $request->description,
        //     'main_picture'=>'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg'
        // ]);

        // return redirect()->route('equipment.index')->with(['success' => 'created successfully
        // ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Volnteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volnteer $volnteer,$id )
    {
        $volnteer = Volnteer::findOrFail($id);

    return view('Dash.equipshow')->with('volnteer', $volnteer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $ser = Volnteer::select('*')->find($id); 

        // return redirect()->route('services.editserv',['data'=>$ser]);
        $data =Volnteer::find($id);
        return view('Dash.editequ', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Volnteer  $volnteeritem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volnteer $equipment)
    {
        $request->validate([
            'volunteer_name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'description' => 'required',
            // 'main_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
            'price' => 'required|numeric',

        ]);
        $input = [
            'volunteer_name' => $request->input('volunteer_name'),
            'description' => $request->input('description'),
            'category_id' => '2', // Setting category_id to the default value '1'
            'price' => $request->input('price'), // Assuming 'price' is the correct key
        ];
        
       
        if ($image = $request->file('main_picture')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['main_picture'] = "$profileImage";
        }else{
            $input['main_picture']= $equipment->main_picture;
            
        }

        $equipment->update($input);

        return redirect()->route('equipment.index')
                        ->with('success','Equipment updated successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Volunteer  $volnteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = Volnteerdetail::select('*')
        ->where('volunteer_id', $id)
        ->get();
        $items = Volnteeritem::select('*')
        ->where('volunteer_id', $id)
        ->get();
        if ($details->count()== 0 && $items->count()==0) {
          ;

            // Redirect to the 'category.index' route
            Volnteer::destroy($id);
            return redirect()->route('equipment.index')->with(['deleted' => 'Equipment deleted successfully
            ']);
            
        }else{

            return redirect()->route('equipment.index')->with(['cancel' => "This item has donations you can not delete it"]);
        }

       
        
    }
}
