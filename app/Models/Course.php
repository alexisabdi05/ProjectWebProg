<?php

namespace App\Models;

use App\Models\Category;
use App\Models\CourseDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
