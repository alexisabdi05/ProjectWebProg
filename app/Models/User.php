<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Gallery;
use App\Models\Enrollment;
use App\Models\Achievement;
use App\Models\CourseStatus;
use App\Models\SocialAccount;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Model
{
    use HasFactory;
    public function CourseStatus()
    {
        return $this->hasMany(CourseStatus::class);
    }

    public function Achievement()
    {
        return $this->hasMany(Achievement::class);
    }

    public function SocialAccount()
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function Enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function Gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
protected $fillable = [
        'email',
        'username',
        'password',
        'valAdmin'
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
}
