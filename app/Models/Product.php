<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $table = 'products';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'sub_category_id',
        'name',
        'description',
        'price',
        'is_enable',
        'quantity'
    ];

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }


}
