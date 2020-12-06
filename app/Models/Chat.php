<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public $table = 'chats';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'user_id',
        'is_admin',
        'text',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
