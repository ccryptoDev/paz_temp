<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    protected function tests()
    {
        return $this->hasMany(Test::class);
    }
}
