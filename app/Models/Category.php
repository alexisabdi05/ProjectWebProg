<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = "category";
    use HasFactory;
    public function Course()
    {
        return $this->hasMany(Course::class,'CategoryID', 'CategoryID');
    }
}
