<?php

namespace App\Livewire;

use App\Models\Goal;
use Livewire\Attributes\On;
use Livewire\Component;

class GoalsIndex extends Component
{

    public $goals = null;

    #[On('goal-created')]
    public function retrieveGoals()
    {
        $this->goals = Goal::ofCurrentUser()->get();
    }

    public function mount()
    {
        $this->retrieveGoals();
    }

    public function render()
    {
        return view('livewire.goals-index');
    }
}
