<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    /**
     * Create a default admin user if none exists.
     * This is for initial setup only.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setupDefaultAdmin()
    {
        if (Admin::count() > 0) {
            return redirect()->route('admin.login')
                ->with('error', 'Admin users already exist.');
        }

        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@pettrack.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        return redirect()->route('admin.login')
            ->with('success', 'Default admin user created. Email: admin@pettrack.com, Password: admin123');
    }
}
