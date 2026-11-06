<?php

namespace Tests\Feature;

use App\Models\Topic;
use App\Models\Question;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QuizTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_landing_page_can_be_rendered(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Akidah Tahun 3');
        $response->assertSee('Jana Latihan');
    }

    public function test_database_contains_fifty_questions_and_five_topics(): void
    {
        $this->assertEquals(5, Topic::count());
        $this->assertEquals(50, Question::count());

        foreach (Topic::with('questions')->get() as $topic) {
            $this->assertEquals(10, $topic->questions->count(), "Topic {$topic->title} should have 10 questions");
            $this->assertEquals(5, $topic->questions->where('difficulty', 'rendah')->count(), "Topic {$topic->title} should have 5 rendah questions");
            $this->assertEquals(3, $topic->questions->where('difficulty', 'sederhana')->count(), "Topic {$topic->title} should have 3 sederhana questions");
            $this->assertEquals(2, $topic->questions->where('difficulty', 'tinggi')->count(), "Topic {$topic->title} should have 2 tinggi questions");
        }
    }

    public function test_generate_quiz_api_returns_thirty_questions(): void
    {
        $response = $this->getJson('/api/generate-quiz');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'success',
            'total',
            'questions' => [
                '*' => [
                    'number',
                    'id',
                    'topic_id',
                    'topic_title',
                    'topic_number',
                    'difficulty',
                    'difficulty_label',
                    'type',
                    'question_text',
                    'options',
                    'correct_answer',
                    'explanation',
                ],
            ],
        ]);

        $this->assertEquals(30, count($response->json('questions')));

        // Verify all 5 topics are represented in the 30 questions
        $topicNumbers = collect($response->json('questions'))->pluck('topic_number')->unique();
        $this->assertEquals(5, $topicNumbers->count());
    }
}
