<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;
    public $table = "enrollments";
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Course()
    {
        return $this->belongsTo(Course::class);
    }
}
