<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'parent_id'
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class, "parent_id");
    }

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    public function films()
    {
        return $this->belongsToMany(Film::class, "category_films");
    }
}
