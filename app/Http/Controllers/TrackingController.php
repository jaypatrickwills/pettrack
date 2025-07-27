<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\TrackingLog;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TrackingController extends Controller
{
    /**
     * Display the tracking search form.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('tracking');
    }

    /**
     * Search for a tracking by tracking number.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        $request->validate([
            'tracking_number' => 'required|string',
        ]);

        $trackingNumber = $request->input('tracking_number');
        $tracking = Tracking::where('tracking_number', $trackingNumber)->first();

        if (!$tracking) {
            // Determine which route to redirect to based on the request path
            $redirectRoute = str_contains($request->path(), 'track-pet') ? 'track-pet' : 'tracking.index';
            
            return redirect()->route($redirectRoute)
                ->with('error', 'No tracking found with the provided tracking number.');
        }

        // Log this tracking search
        TrackingLog::create([
            'tracking_id' => $tracking->id,
            'tracking_number' => $trackingNumber,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'tracked_at' => Carbon::now(),
        ]);
        
        // Get all updates for this tracking, ordered by latest first
        $updates = $tracking->updates()->orderBy('created_at', 'desc')->get();

        return view('tracking-details', [
            'tracking' => $tracking,
            'updates' => $updates,
        ]);
    }
}
