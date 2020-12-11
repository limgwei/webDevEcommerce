<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocodeHistory extends Model
{
    use HasFactory;

    public $table = 'promo_code_histories';



    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'user_id',
        'promocode_id',
    ];

    public function promocode()
    {
        return $this->belongsTo(Promocode::class, 'promocode_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
