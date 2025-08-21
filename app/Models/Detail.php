<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    Use HasFactory;
    protected $fillable = ['title', 'post_date', 'post_time', 'description'];
}
