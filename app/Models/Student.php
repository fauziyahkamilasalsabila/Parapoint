<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
     protected $fillable = [
        'student_name',
        'class_id',
        'nis'
        
    ];

    public function classStudent(): BelongsTo
    {
        return $this->belongsTo(ClassStudent::class);
    }

}
