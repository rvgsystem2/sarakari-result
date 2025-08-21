<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['apply_start_date', 'apply_last_date', 'fee_last_date', 'correction_start_date', 'correction_end_date', 'exam_date', 'result_date', 'note'];
}
