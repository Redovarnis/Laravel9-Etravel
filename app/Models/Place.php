<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    # many To One
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // one To Many
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
