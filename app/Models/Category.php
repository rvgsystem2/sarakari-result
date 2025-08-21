<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;

class Category extends Model
{

    protected $fillable = ['name'];

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
