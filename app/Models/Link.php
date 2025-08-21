<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{

    protected $fillable = ['category_id', 'title', 'url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

