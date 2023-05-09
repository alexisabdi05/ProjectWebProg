<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
