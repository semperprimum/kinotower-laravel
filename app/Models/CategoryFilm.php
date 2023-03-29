<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFilm extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'film_id'
    ];

    public $timestamps = false;

    public function parentCategory () {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function parentFilm() {
        return $this-> belongsTo(Film::class, 'film_id');
    }
}
