<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{

    public function index()
    {






        // [
        //     'volunteer_name' => $volunteer_name,
        //     'name' => $name,
        //     'qty'=> $qty,
        //     'price'=> $price,
        //     'main_picture'=> $main_picture

        // ]);

    }



    public function googleLogin()
    {
        return socialite::driver('google')->redirect();
    }
    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->email)->first();


            if (!$findUser) {
                $findUser = new User();
                $findUser->name = $user->name;
                $findUser->email = $user->email;
                // $findUser->password = "123456mohammad";
                $findUser->password =Hash::make( $user->password);
                $findUser->save();
               
              
            }
            Auth::login($findUser);
            // session()->put('type',$findUser->type);


            session()->put('id', $findUser->id);
            session()->put('type', $findUser->type);
           
         
            return redirect()->intended();


        } catch (Exception $e) {
            dd($e->getMessage());

        }
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $users = DB::table('volnteers')
    ->select([
        'users.id',
        'volnteers.volunteer_name',
        'categories.name',
        'volnteeritems.qty',
        'volnteers.main_picture'
    ])
    ->join('volnteeritems', 'volnteers.id', '=', 'volnteeritems.volunteer_id')
    ->join('categories', 'volnteers.category_id', '=', 'categories.id')
    ->join('users', function ($join) {
        $join->on('volnteeritems.user_id', '=', 'users.id')
            ->where('users.id', '=', Auth::user()->id);
    })
    ->get();
        $usersdetail = DB::table('volnteers')
    ->select([
        'users.id',
        'volnteers.volunteer_name',
        'categories.name',
        'volnteerdetails.price',
        'volnteers.main_picture'
    ])
    ->join('volnteerdetails', 'volnteers.id', '=', 'volnteerdetails.volunteer_id')
    ->join('categories', 'volnteers.category_id', '=', 'categories.id')
    ->join('users', function ($join) {
        $join->on('volnteerdetails.user_id', '=', 'users.id')
            ->where('users.id', '=', Auth::user()->id);
    })
    ->get();
       
        return view('profile.edit', [
            'user' => $request->user(),
            "users" => $users,
            "userdetails" =>$usersdetail
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
       
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();
        dd(session());
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended("/");
    }

}