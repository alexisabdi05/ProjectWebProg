<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $table = "course";
    public function Category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function CourseDetail()
    {
        return $this->HasOne(CourseDetail::class,'CourseID', 'CourseID');
    }
}
