<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStatus extends Model
{
    use HasFactory;
    public $fillable = ["user_id", "coursedetail_id"];
    public function CourseDetail()
    {
        return $this->belongsTo(CourseDetail::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
