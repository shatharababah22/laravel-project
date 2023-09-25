<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Volnteer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Volnteerdetail;
use App\Models\Volnteeritem;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   if(auth()->user()x)
        $category = Category::select('*', DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('concat(LEFT(description, 100),"...") as shorter_description'))->get();

// 
$allitem =0;

$usersCount = User::count();

$items = Volnteeritem::all();
foreach($items as $item){
    $allitem += $item->qty;
}




        // 
            $alldonation =0;
            foreach ($category as $cat) {
            // Use get() to retrieve the records after applying the where filter
            $products = Volnteer::select('*')
                ->where('category_id', $cat->id)
                ->get();
        
            $price = 0;
            $donate = 0;
        
                foreach ($products as $value) {
                $price += $value->price;
                $volnteerDetails = Volnteerdetail::where('volunteer_id', $value->id)->get();
                foreach ($volnteerDetails as $sara) {
                    $donate += $sara->price;

                }
            }
            
        
            // Assign the total price to the category object
            $cat->price = $price;
            $cat->donate = $donate;
            $alldonation += $donate;
        }
        $category->alldonation = $alldonation;
        $category->it = $allitem;
        $category->usersCount = $usersCount;
        $category->life = $allitem+(intval($alldonation/15));
        



        // $category = Category::all();
        return view('pages.index')->with('category', $category);
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function categoryfilter(Request $request)
    {
        $query = Category::query();
        if (isset($request->filltercategory) && $request->filltercategory != null) {
            $query->where('name', $request->filltercategory);
        }

        $categories = $query->get();
        return view('pages.causes', ['categories' => $categories]);
    }




}