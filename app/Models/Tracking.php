<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tracking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tracking_number',
        'pet_name',
        'pet_type',
        'pet_breed',
        'origin',
        'destination',
        'owner_name',
        'owner_email',
        'owner_phone',
        'departure_date',
        'estimated_arrival_date',
        'status',
        'current_location',
        'notes',
        'admin_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'departure_date' => 'date',
        'estimated_arrival_date' => 'date',
    ];

    /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($tracking) {
            // Generate a unique tracking number if not provided
            if (empty($tracking->tracking_number)) {
                $tracking->tracking_number = 'PT-' . date('Ymd') . '-' . strtoupper(Str::random(6));
            }
        });
    }

    /**
     * Get the admin that created this tracking.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    /**
     * Get the updates for this tracking.
     */
    public function updates()
    {
        return $this->hasMany(TrackingUpdate::class);
    }

    /**
     * Get the latest update for this tracking.
     */
    public function latestUpdate()
    {
        return $this->hasOne(TrackingUpdate::class)->latest();
    }
}
