<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
     protected $fillable = [
        'name_students',
        'class_id',
        'nis',
        
    ];

    public function classStudent(): BelongsTo
    {
        return $this->belongsTo(ClassStudent::class, 'class_id');
    }

    public function pointDetails()
    {
        return $this->hasMany(PointDetail::class);
    }

    public function getCurrentPointAttribute()
    {
        return 150 + $this->pointDetails->sum('counted_point');
    }


}
