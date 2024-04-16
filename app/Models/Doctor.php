<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $fillable=[
        'name',
        'image',
        'icon',
        'type',
        'status',
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
