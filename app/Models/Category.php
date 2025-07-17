<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    //
    protected $fillable = ['category_name', 'type', 'image'];
  
        public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    public function issues()
    {
        return $this->hasMany(Issue::class);
    }

    
}
