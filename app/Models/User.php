<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function courses()
    {
        return $this->hasMany(Course::class);
    }

    protected function order()
    {
        return $this->hasMany(Order::class);
    }

    protected function course_students()
    {
        return $this->hasMany(CourseStudent::class);
    }

    protected function pay_logs()
    {
        return $this->hasMany(PayLog::class);
    }

    protected function reviews()
    {
        return $this->hasMany(Review::class);
    }

    protected function tests()
    {
        return $this->hasMany(Test::class);
    }

    protected function user_lessons()
    {
        return $this->hasMany(UserLesson::class);
    }
}
