<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'rating',
        'category',
        'message',
        'is_reviewed',
    ];

    protected $casts = [
        'is_reviewed' => 'boolean',
        'rating' => 'integer',
    ];
}
