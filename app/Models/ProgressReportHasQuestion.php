<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgressReportHasQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'progress_report_id',
        'answer'
    ];
}
