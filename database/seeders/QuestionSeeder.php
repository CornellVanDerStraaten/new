<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            'How far are you along to achieving your goal?',
            'What did you do to achieve your goal this month?',
            'What are you planning to do next month to achieve your goal?'
        ];

        foreach ($questions as $question) {
            Question::updateOrCreate(
                [
                    'question' => $question
                ],
                [
                    'default' => true
                ]
            );
        }
    }
}
