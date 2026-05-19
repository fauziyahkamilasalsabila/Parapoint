<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PointCategory extends Model
{
     protected $fillable = [
        'category_type',
        'amount',
        'description_point',
    ];
}
