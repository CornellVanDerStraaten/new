<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question',
        'default'
    ];

    protected $casts = [
        'default' => 'boolean'
    ];

    /**
     * Get the progress reports of this goal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function progressReports(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(ProgressReport::class, 'progress_report_has_questions');
    }
}
