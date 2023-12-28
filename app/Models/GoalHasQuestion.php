<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoalHasQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'goal_id',
    ];

    /**
     * Get the question this GoalHasQuestion belongs to
     *
     * @return BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    /**
     * Get the goal this GoalHasQuestion belongs to
     *
     * @return BelongsTo
     */
    public function goal(): BelongsTo
    {
        return $this->belongsTo(Goal::class);
    }
}
