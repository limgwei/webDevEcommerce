<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Banner extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,SoftDeletes;

    public $table = 'banners';

    protected $appends = [
        'image',
    ];


    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];  

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'product_id',
    ];

    public function getImageAttribute()
    {
        $files = $this->getMedia('image');
        $files->each(function ($item) {
            $item->url       = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview   = $item->getUrl('preview');
        });

        return $files;
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
