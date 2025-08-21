<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Totalpost extends Model
{
    use HasFactory;
    protected $fillable = ['min_age', 'max_age', 'note', 'total'];
}
