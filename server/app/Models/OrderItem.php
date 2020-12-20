<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public $table = 'order_items';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'order_id',
        'order_name',
        'quantity',
        'current_price' //after discount only for 1 item
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
