<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Volnteer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
class AdminLoginController extends Controller
{

    // Show the login form

    public function showLoginForm()
    {
       if (session()->has("adminid")) {
      
        $recordCount = User::count();
        $volunteercount = Volnteer::count();
        $items = Volnteer::select(DB::raw('SUM(volnteeritems.qty) as total_qty'))
        ->join('volnteeritems', 'volnteers.id', '=', 'volnteeritems.volunteer_id')
        ->join('categories', 'volnteers.category_id', '=', 'categories.id')
        ->join('users', 'users.id', '=', 'volnteeritems.user_id')
        ->value('total_qty');

        $mouny = Volnteer::select('users.name', 'users.email', 'volnteers.volunteer_name',
        'volnteerdetails.price')
       ->join('volnteerdetails', 'volnteers.id', '=', 'volnteerdetails.volunteer_id')
       ->join('categories', 'volnteers.category_id', '=', 'categories.id')
       ->join('users', 'users.id', '=', 'volnteerdetails.user_id')
       ->get();
     
        $totalPrice = $mouny->sum('price');
        $todos = session('todos', []);
        
        
        
        view()->share([
            'todos' => $todos,
            'recordCount' => $recordCount,
            'items' => $items,
            'totalPrice' => $totalPrice,
            'volunteercount' => $volunteercount
        ]);
    
        return view('Dash.Home');

  
        
        

       }else{
        return view("Admin.auth.adminlodin");
       }
    }


    // Handle the login request
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                Password::min(8)->mixedCase()->numbers()->symbols(),
            ], // Adjust the password requirements as needed.
        ]);
        $admin = Admin::where('email', $request->email)->first();
    

        if ($admin) {
            if (Hash::check($request->password, $admin->password)) {
                $request->session()->put('adminid', $admin->id);
            
                return redirect('/dash');
            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }

    }

    // Add a logout action if needed
    public function logout()
    {
       session()->pull("adminid");

        return redirect('/dash'); // You can customize the redirection
    }


    
    
    public function store(Request $request)
    {
        // Check if the 'todos' session key exists and initialize it if not
        if (!session()->has('todos')) {
            session(['todos' => []]);
        }
    
        // Add the new task to the 'todos' session array
        $todos = session('todos');
        $todos[] = $request->input('todo1');
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }
    
    
    public function destroy($todo)
    {
        // Retrieve tasks from the session
        $todos = session('todos', []);
    
        // Check if the task exists in the array and remove it
        if (($key = array_search($todo, $todos)) !== false) {
            unset($todos[$key]);
        }
    
        // Store the updated tasks back in the session
        session(['todos' => $todos]);
    
        return redirect()->route('todos.index');
    }

}
