<?php

namespace App\Livewire;

use App\Models\Goal;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class GoalCreateModal extends ModalComponent
{
    public string $name;
    public bool $active = true;
    public bool $saving = false;

    protected $rules = [
        'name' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $this->saving = true;

        $goal = Goal::create([
            'name' => $this->name,
            'user_id' => auth()->id(),
            'active' => $this->active
        ]);

        $goal->assignDefaultQuestions();

        $this->dispatch('goal-created')->to(GoalsIndex::class);
        $this->closeModal();

        $this->saving = false;
    }

    public function render()
    {
        return view('livewire.goal-create-modal');
    }
}
