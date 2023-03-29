<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id',
        'duration',
        'year_of_issue',
        'age',
        'link_img',
        'link_kinopoisk',
        'link_video',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_films');
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }

}
