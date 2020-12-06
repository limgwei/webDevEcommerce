<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountProduct extends Model
{
    use HasFactory;

    public $table = 'carts';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'product_id',
        'rate',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
