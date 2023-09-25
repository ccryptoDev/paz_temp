<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function user()
    {
        return $this->belongsTo(User::class)->withDefault(null);
    }

    protected function chapter()
    {
        return $this->hasMany(Chapter::class);
    }

    protected function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    protected function course_students()
    {
        return $this->hasMany(CourseStudent::class);
    }

    protected function orders()
    {
        return $this->hasMany(OrderCourse::class);
    }
}
