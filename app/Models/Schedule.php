<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

    protected $hidden = ['created_at', 'updated_at'];


    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
