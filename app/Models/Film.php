<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Contry::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_films');
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

}
