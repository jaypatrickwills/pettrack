<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use App\Models\TrackingLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackingLogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Display a listing of tracking logs.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = TrackingLog::query()->with('tracking');
        
        // Filter by tracking number if provided
        if ($request->has('tracking_number') && !empty($request->tracking_number)) {
            $query->where('tracking_number', 'like', '%' . $request->tracking_number . '%');
        }
        
        // Get tracking logs with count and latest date grouped by tracking number
        $trackingStats = DB::table('tracking_logs')
            ->select('tracking_number', 
                DB::raw('COUNT(*) as view_count'), 
                DB::raw('MAX(tracked_at) as last_viewed'))
            ->groupBy('tracking_number')
            ->orderBy('last_viewed', 'desc')
            ->paginate(15);
            
        return view('admin.tracking-logs.index', [
            'trackingStats' => $trackingStats,
            'filters' => $request->only(['tracking_number']),
        ]);
    }

    /**
     * Display the details for a specific tracking number's logs.
     *
     * @param  string  $trackingNumber
     * @return \Illuminate\View\View
     */
    public function show($trackingNumber)
    {
        // Get the tracking record
        $tracking = Tracking::where('tracking_number', $trackingNumber)->first();
        
        // Get all logs for this tracking number
        $logs = TrackingLog::where('tracking_number', $trackingNumber)
            ->orderBy('tracked_at', 'desc')
            ->paginate(20);
            
        return view('admin.tracking-logs.show', [
            'tracking' => $tracking,
            'logs' => $logs,
            'trackingNumber' => $trackingNumber
        ]);
    }

    // Other methods removed to avoid duplication
}
