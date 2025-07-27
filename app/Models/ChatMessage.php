<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'message',
        'is_from_admin',
        'admin_id',
        'message_id',
        'is_read',
    ];

    protected $casts = [
        'is_from_admin' => 'boolean',
        'is_read' => 'boolean',
    ];

    public function chat()
    {
        return $this->belongsTo(Chat::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
