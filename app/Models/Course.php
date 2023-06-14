<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function CourseDetail()
    {
        return $this->hasMany(CourseDetail::class);
    }
}
