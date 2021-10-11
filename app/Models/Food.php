<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'menu';

    use HasFactory;

    function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
