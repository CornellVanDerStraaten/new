<?php

namespace App\Http\Controllers\Goals;

use App\Http\Controllers\Controller;
use App\Models\Goal;
use App\Models\ProgressReport;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;

class ReportQuestionsController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        // TODO: Sortby pivot table
        return view('dashboard.goals.questions', [
            'breadcrumbs' => Breadcrumbs::render('goals.questions', $goal),
            'goal' => $goal,
            'questions' => $goal->questions->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goal $goal)
    {
        //
    }
}
