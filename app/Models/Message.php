<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;

    protected $table = 'message';
    protected $model = App\Models\Message::class;

    protected $fillable = [
        'user_id',
        'to_user_id',
        'message',
        'is_active',
        'is_read',
        'reply_id',
    ];
}
