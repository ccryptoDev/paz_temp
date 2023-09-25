<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function student()
    {
        return $this->belongsTo(User::class);
    }

    protected function course()
    {
        return $this->belongsTo(Course::class);
    }
}
