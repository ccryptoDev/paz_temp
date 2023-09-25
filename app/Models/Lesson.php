<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected  $guarded = [];

    protected function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    protected function questions()
    {
        return $this->hasMany(Question::class);
    }

}
