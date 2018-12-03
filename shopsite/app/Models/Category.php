<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title'
    ];

    public $timestamps = false;

    public function articles()
    {
        return $this->belongsToMany(Item::class);
    }
}
