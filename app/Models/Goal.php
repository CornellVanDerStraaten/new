<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

class Goal extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * Get the user this goal belongs to
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the questions of this goal
     *
     * @return BelongsToMany
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'goal_has_questions');
    }

    /**
     * Get the progress reports of this goal
     *
     * @return HasMany
     */
    public function progressReports(): HasMany
    {
        return $this->hasMany(ProgressReport::class);
    }

    public function hasProgressReports()
    {
        return $this->progressReports()->count() != 0;
    }

    /**
     * @return string
     */
    public function readableDate(): string
    {
        return Carbon::parse($this->created_at)->format('j F Y');
    }

    public static function ofCurrentUser(): Builder
    {
        return self::query()->where('user_id', auth()->id());
    }

    /**
     * Assign default questions on a goal as a start-off point for users to edit their questions
     * @return void
     */
    public function assignDefaultQuestions()
    {
        $ooDefaultQuestions = Question::where('default', true)->get();

        $iteration = 0;
        foreach ($ooDefaultQuestions as $oDefaultQuestion) {
            GoalHasQuestion::create([
                'goal_id' => $this->id,
                'question_id' => $oDefaultQuestion->id,
                'sort' => $iteration
            ]);

            $iteration++;
        }
    }

    public function detachQuestions(Collection $questions, $questionIds)
    {
        $this->questions()->detach($questionIds);

        foreach ($questions as $question) {
            if (!$question->progressReports()->exists() && !$question->default) {
                $question->delete();
            }
        }

    }
}
