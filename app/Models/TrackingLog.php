<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tracking;

class TrackingLog extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tracking_id',
        'tracking_number',
        'ip_address',
        'user_agent',
        'tracked_at'
    ];
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'tracked_at' => 'datetime',
    ];
    
    /**
     * Get the tracking record associated with this log.
     */
    public function tracking()
    {
        // Prefer numeric FK if available, fallback to tracking_number string
        return $this->belongsTo(Tracking::class, 'tracking_id');
    }
}
