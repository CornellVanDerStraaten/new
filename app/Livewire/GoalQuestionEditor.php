<?php

namespace App\Livewire;

use App\Models\Goal;
use App\Models\GoalHasQuestion;
use App\Models\Question;
use Illuminate\Support\Collection;
use Livewire\Component;

class GoalQuestionEditor extends Component
{
    public Goal $goal;
    public ?array $questions;
    public ?string $newQuestion = '';

    public function render()
    {
        return view('livewire.goal-question-editor');
    }

    public function save()
    {
        $currentQuestions = $this->goal->questions;

        $iteration = 0;
        $stillExistingQuestionIds = [];
        foreach ($this->questions as $question) {
            // If it has no ID, it is a new item
            if (!isset($question['id'])) {
                $newQuestion = Question::create([
                    'question' => $question['question']
                ]);
                GoalHasQuestion::create([
                    'goal_id' => $this->goal->id,
                    'question_id' => $newQuestion->id,
                    'sort' => $iteration
                ]);
            } else {
                $goalHasQuestion = GoalHasQuestion
                    ::where('question_id', $question['id'])
                    ->where('goal_id', $this->goal->id)
                    ->first();
                $goalHasQuestion->sort = $iteration;
                $goalHasQuestion->save();

                $stillExistingQuestionIds[] = $question['id'];
            }

            $iteration++;
        }

        // Delete existing questions & GoalHasQuestions if it did not still exist
        $currentQuestionIds = $currentQuestions->pluck('id')->toArray();

        $questionIdsToRemove = array_diff($currentQuestionIds, $stillExistingQuestionIds);
        $this->goal->detachQuestions($currentQuestions->whereIn('id', $questionIdsToRemove), $questionIdsToRemove);

        // TODO: Toast
    }

    public function updateQuestionOrder($orderedItems)
    {
        $tempArray = [];
        $questions = $this->questions;
        foreach ($orderedItems as $orderedItem) {
            // Use orderedItem value as key of existing array to set new array order
            $tempArray[] = $questions[$orderedItem['value']];
        }
        $this->questions = $tempArray;
    }

    public function addQuestion()
    {
        if ($this->newQuestion) {
            $this->questions[] = [
                'question' => $this->newQuestion
            ];
            $this->newQuestion = null;
        }
    }

    public function removeQuestion($questionArrayKey)
    {
        unset($this->questions[$questionArrayKey]);
    }
}
