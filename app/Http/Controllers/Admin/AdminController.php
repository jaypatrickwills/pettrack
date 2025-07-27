<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use App\Models\TrackingUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Middleware is applied in the routes file
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Get counts for dashboard stats
        $totalTrackings = Tracking::count();
        $activeTrackings = Tracking::whereIn('status', ['pending', 'in_transit', 'delayed'])->count();
        $completedTrackings = Tracking::where('status', 'delivered')->count();
        
        // Get recent trackings
        $recentTrackings = Tracking::with('admin')->latest()->take(5)->get();
        
        // Get recent updates
        $recentUpdates = TrackingUpdate::with(['tracking', 'admin'])->latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalTrackings', 
            'activeTrackings', 
            'completedTrackings', 
            'recentTrackings',
            'recentUpdates'
        ));
    }

    /**
     * Show the admin profile.
     *
     * @return \Illuminate\View\View
     */
    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    /**
     * Update the admin profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
            'current_password' => 'nullable|required_with:password|password:admin',
            'password' => 'nullable|min:8|confirmed',
        ]);

        // Update name and email
        $admin->name = $validated['name'];
        $admin->email = $validated['email'];

        // Update password if provided
        if (isset($validated['password'])) {
            $admin->password = bcrypt($validated['password']);
        }

        $admin->save();

        return redirect()->route('admin.profile')
            ->with('success', 'Profile updated successfully.');
    }
}
