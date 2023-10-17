<?php

namespace App\Livewire;

use App\Models\Goal;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class GoalsShow extends Component
{
    public Goal $goal;

    public function deleteGoal()
    {
        $this->goal->delete();

        return redirect()->route('goals.index');
    }

    public function render()
    {
        return view('livewire.goals-show');
    }
}
