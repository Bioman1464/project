<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'title', 'content'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
