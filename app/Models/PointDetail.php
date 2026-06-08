<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PointDetail extends Model
{
     protected $fillable = [
        'student_id',
        'teacher_id',
        'category_id',
        'point_amount',
        'occurrence_number',
        'counted_point'
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function pointCategory(): BelongsTo
    {
    return $this->belongsTo(PointCategory::class, 'category_id');
    }

     protected static function booted()
    {
    static::creating(function ($model) {
        self::calculatePoint($model);
    });

    static::updating(function ($model) {
        self::calculatePoint($model);
    });
    }

    private static function calculatePoint(PointDetail $model)
    {
        $category = \App\Models\PointCategory::find($model->category_id);

        $amount = $category?->amount ?? 0;

        $total = $amount * ($model->occurrence_number ?? 1);

        if ($category?->category_type === 'subtract') {
        $total = -$total;
    }

        $model->point_amount = $amount;
        $model->counted_point = $total;
    }
}
