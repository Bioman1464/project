<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Item
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Item whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Item extends Model
{

    protected $fillable = [
        'name', 'price', 'color', 'description'
    ];


    /*protected $fillable = [
        'title', 'content'
    ];*/

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
