<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected function question()
    {
        return $this->belongsTo(Question::class);
    }

    protected function user()
    {
        return $this->belongsTo(User::class);
    }
}
