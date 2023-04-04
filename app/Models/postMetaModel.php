<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postMetaModel extends Model
{
    use HasFactory;

    protected $table = 'post_metas';

    protected $fillable = [
        'post_id',
        "key",
        "value",  
    ];
}
