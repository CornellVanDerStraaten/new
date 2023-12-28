<?php

namespace App\Livewire;

use App\Models\Goal;
use App\Models\ProgressReport;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Collection;
use Livewire\Component;

class GoalsShow extends Component
{
    public Goal $goal;
    public ?ProgressReport $activeProgressReport = null;
    public ?Collection $progressReports = null;

    public function mount()
    {
        $this->progressReports = $this->goal->progressReports()->get();
        if ($this->progressReports) {
            $this->activeProgressReport = $this->progressReports->last();
        }
    }

    public function render()
    {
        return view('livewire.goals-show');
    }
    public function add($reportId)
    {
        $this->activeProgressReport = $this->progressReports->where('id', $reportId)->first();
    }

    public function deleteGoal()
    {
        $this->goal->delete();

        return redirect()->route('goals.index');
    }
}
