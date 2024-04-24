<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{

    protected $fillable=[
        'gallery_id',
        'url',
    ];


    public function gallery() {
        return $this->belongsTo(Gallery::class, 'gallery_id');
    }
}
