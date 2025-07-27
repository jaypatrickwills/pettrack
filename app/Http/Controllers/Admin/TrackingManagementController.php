<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use App\Models\TrackingUpdate;
use App\Notifications\TrackingUpdateNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class TrackingManagementController extends Controller
{
    /**
     * Display a listing of the trackings.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $trackings = Tracking::with('admin')->latest()->paginate(10);
        return view('admin.trackings.index', compact('trackings'));
    }

    /**
     * Show the form for creating a new tracking.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.trackings.create');
    }

    /**
     * Store a newly created tracking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pet_name' => 'required|string|max:255',
            'pet_type' => 'required|string|max:255',
            'pet_breed' => 'nullable|string|max:255',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_email' => 'required|email|max:255',
            'owner_phone' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'estimated_arrival_date' => 'required|date|after_or_equal:departure_date',
            'notes' => 'nullable|string',
        ]);

        // Add admin_id to the validated data
        $validated['admin_id'] = Auth::guard('admin')->id();
        $validated['status'] = 'pending';
        $validated['current_location'] = $validated['origin'];

        // Create the tracking
        $tracking = Tracking::create($validated);

        // Create initial tracking update
        $update = TrackingUpdate::create([
            'tracking_id' => $tracking->id,
            'status' => 'pending',
            'location' => $validated['origin'],
            'description' => 'Pet tracking created and pending departure.',
            'admin_id' => Auth::guard('admin')->id(),
        ]);
        
        // Send notification to the pet owner about the new tracking
        try {
            Notification::route('mail', $validated['owner_email'])
                ->notify(new TrackingUpdateNotification($tracking, $update));
        } catch (\Exception $e) {
            // Log the error but don't stop execution
            logger('Failed to send initial tracking notification email: ' . $e->getMessage());
        }

        return redirect()->route('admin.trackings.show', $tracking)
            ->with('success', 'Tracking created successfully with tracking number: ' . $tracking->tracking_number . ' and notification sent to pet owner.');
    }

    /**
     * Display the specified tracking.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\View\View
     */
    public function show(Tracking $tracking)
    {
        $tracking->load(['admin', 'updates' => function ($query) {
            $query->with('admin')->latest();
        }]);
        
        return view('admin.trackings.show', compact('tracking'));
    }

    /**
     * Show the form for editing the specified tracking.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\View\View
     */
    public function edit(Tracking $tracking)
    {
        return view('admin.trackings.edit', compact('tracking'));
    }

    /**
     * Update the specified tracking in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Tracking $tracking)
    {
        $validated = $request->validate([
            'pet_name' => 'required|string|max:255',
            'pet_type' => 'required|string|max:255',
            'pet_breed' => 'nullable|string|max:255',
            'origin' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'owner_name' => 'required|string|max:255',
            'owner_email' => 'required|email|max:255',
            'owner_phone' => 'required|string|max:255',
            'departure_date' => 'required|date',
            'estimated_arrival_date' => 'required|date|after_or_equal:departure_date',
            'notes' => 'nullable|string',
        ]);

        // Store old values before updating
        $oldValues = $tracking->getAttributes();
        
        // Update tracking
        $tracking->update($validated);
        
        // Create a tracking update entry to document the change
        $description = 'Pet tracking information updated.';
        $update = TrackingUpdate::create([
            'tracking_id' => $tracking->id,
            'status' => $tracking->status, // Keep current status
            'location' => $tracking->current_location, // Keep current location
            'description' => $description,
            'admin_id' => Auth::guard('admin')->id(),
        ]);
        
        // Send notification if email changed or any other significant details changed
        if ($oldValues['owner_email'] != $validated['owner_email'] || 
            $oldValues['pet_name'] != $validated['pet_name'] ||
            $oldValues['destination'] != $validated['destination'] ||
            $oldValues['estimated_arrival_date'] != $validated['estimated_arrival_date']) {
            
            // Send to the new email address
            Notification::route('mail', $tracking->owner_email)
                ->notify(new TrackingUpdateNotification($tracking, $update));
        }

        return redirect()->route('admin.trackings.show', $tracking)
            ->with('success', 'Tracking updated successfully.');
    }

    /**
     * Remove the specified tracking from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tracking $tracking)
    {
        $tracking->delete();

        return redirect()->route('admin.trackings.index')
            ->with('success', 'Tracking deleted successfully.');
    }

    /**
     * Show the form for adding a new update to the tracking.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\View\View
     */
    public function createUpdate(Tracking $tracking)
    {
        return view('admin.trackings.create-update', compact('tracking'));
    }

    /**
     * Store a new update for the tracking.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUpdate(Request $request, Tracking $tracking)
    {
        $validated = $request->validate([
            'status' => 'required|in:pending,in_transit,delivered,delayed',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Add tracking_id and admin_id to the validated data
        $validated['tracking_id'] = $tracking->id;
        $validated['admin_id'] = Auth::guard('admin')->id();

        // Create the tracking update
        $update = TrackingUpdate::create($validated);

        // Update the tracking status and current location
        $tracking->update([
            'status' => $validated['status'],
            'current_location' => $validated['location'],
        ]);
        
        // Always send notification for status updates to the pet owner
        try {
            Notification::route('mail', $tracking->owner_email)
                ->notify(new TrackingUpdateNotification($tracking, $update));
        } catch (\Exception $e) {
            // Log the error but don't stop execution
            logger('Failed to send tracking update email: ' . $e->getMessage());
        }

        return redirect()->route('admin.trackings.show', $tracking)
            ->with('success', 'Tracking update added successfully and notification sent to pet owner.');
    }
}
