<?php

namespace App\Livewire;

use App\Models\ProgressReport;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class GoalProgressReport extends Component
{
    #[Reactive]
    public ProgressReport $progressReport;

    public function render()
    {
        return view('livewire.goal-progress-report');
    }
}
