<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tracking_number',
        'is_active',
        'admin_id',
        'last_message_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'last_message_at' => 'datetime',
    ];

    public function messages()
    {
        return $this->hasMany(ChatMessage::class)->orderBy('created_at', 'asc');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function unreadMessages()
    {
        return $this->messages()->where('is_read', false);
    }
}
