<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

        public $table = 'orders';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'user_id',
        'price',
        'address',
        'delivery_charge',
        'comment',
        'status',
        'promocode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}