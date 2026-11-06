<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuizController extends Controller
{
    /**
     * Display the main landing page with topics and the "Jana Latihan" trigger.
     */
    public function index(): View
    {
        $topics = Topic::withCount('questions')->orderBy('topic_number')->get();
        $totalQuestions = Question::count();

        // Prepare initial seed of 30 questions as well so the page can render immediately or on demand
        $initialQuiz = $this->selectThirtyRandomQuestions();

        return view('quiz.index', [
            'topics' => $topics,
            'totalQuestions' => $totalQuestions,
            'initialQuiz' => $initialQuiz,
        ]);
    }

    /**
     * API endpoint to dynamically generate a new set of 30 random questions across all topics.
     */
    public function generate(): JsonResponse
    {
        $questions = $this->selectThirtyRandomQuestions();

        return response()->json([
            'success' => true,
            'total' => count($questions),
            'questions' => $questions,
        ]);
    }

    /**
     * Helper to select 30 random questions spanning all 5 topics.
     * Takes 6 questions from each of the 5 topics:
     * - 3 Aras Rendah
     * - 2 Aras Sederhana
     * - 1 Aras Tinggi
     * Total = 6 per topic * 5 topics = 30 questions!
     */
    public function selectThirtyRandomQuestions(): array
    {
        $topics = Topic::with('questions')->get();
        $selectedQuestions = collect();

        foreach ($topics as $topic) {
            $rendah = $topic->questions->where('difficulty', 'rendah')->random(min(3, $topic->questions->where('difficulty', 'rendah')->count()));
            $sederhana = $topic->questions->where('difficulty', 'sederhana')->random(min(2, $topic->questions->where('difficulty', 'sederhana')->count()));
            $tinggi = $topic->questions->where('difficulty', 'tinggi')->random(min(1, $topic->questions->where('difficulty', 'tinggi')->count()));

            $selectedQuestions = $selectedQuestions->concat($rendah)->concat($sederhana)->concat($tinggi);
        }

        // Shuffle the 30 questions so topics appear naturally mixed
        $shuffled = $selectedQuestions->shuffle()->values();

        // Map into convenient clean array structure for the frontend
        return $shuffled->map(function ($q, $index) {
            return [
                'number' => $index + 1,
                'id' => $q->id,
                'topic_id' => $q->topic_id,
                'topic_title' => $q->topic->title ?? 'Akidah Tahun 3',
                'topic_number' => $q->topic->topic_number ?? 1,
                'difficulty' => $q->difficulty,
                'difficulty_label' => ucfirst($q->difficulty),
                'type' => $q->type,
                'question_text' => $q->question_text,
                'options' => $q->options,
                'correct_answer' => $q->correct_answer,
                'explanation' => $q->explanation,
            ];
        })->toArray();
    }
}
