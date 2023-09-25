<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
     
             // Display user login view otherwise.
            Redirect::setIntendedUrl(url()->previous());
            return view('auth.login');
        
    }
                                    
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => [
                'required',
                Rules\Password::min(8)->mixedCase()->numbers()->symbols(),
            ],
        ]);

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        
      
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
     
        return redirect()->intended("/");
        
    }
}
