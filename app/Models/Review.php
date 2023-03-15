<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
      'film_id',
      'user_id',
        'message',
        'is_approved'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
