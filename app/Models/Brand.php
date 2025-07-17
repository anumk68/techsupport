<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $fillable = ['category_id', 'brand_name', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function issues()
{
    return $this->hasMany(Issue::class);
}

}
