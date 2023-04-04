<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultipleImageModel extends Model
{
    use HasFactory;

    protected $table = 'multiple_images';

    protected $fillable = [
        'user_id',
        "description",
        "activities",
        "location",
        'tagged_users',
        'media' 
    ];

}
