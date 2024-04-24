<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $fillable=[
        'name',
        'image',
        'status',
    ];

    public function galleryitem()
    {
        return $this->hasMany(GalleryItem::class);
    }
}
