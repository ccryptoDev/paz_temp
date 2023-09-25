<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderCourse extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected function order()
    {
        return $this->belongsTo(Order::class);
    }
}
