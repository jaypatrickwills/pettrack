<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingUpdate extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tracking_id',
        'status',
        'location',
        'description',
        'admin_id',
    ];

    /**
     * Get the tracking that owns this update.
     */
    public function tracking()
    {
        return $this->belongsTo(Tracking::class);
    }

    /**
     * Get the admin that created this update.
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
