<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiscountProduct extends Model
{
    use HasFactory,SoftDeletes;

    public $table = 'discount_products';



    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $fillable = [
        'product_id',
        'value',
        'start_date',
        'end_date',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
