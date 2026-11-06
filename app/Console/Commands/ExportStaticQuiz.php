<?php

namespace App\Console\Commands;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportStaticQuiz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quiz:export-static';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export all 50 questions and quiz application into standalone static index.html and docs/index.html for GitHub Pages';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Exporting static web app for GitHub Pages...');

        $topics = Topic::with('questions')->orderBy('topic_number')->get();
        $allQuestions = [];

        foreach ($topics as $topic) {
            foreach ($topic->questions as $q) {
                $allQuestions[] = [
                    'id' => $q->id,
                    'topic_id' => $q->topic_id,
                    'topic_title' => $topic->title,
                    'topic_number' => $topic->topic_number,
                    'difficulty' => $q->difficulty,
                    'difficulty_label' => ucfirst($q->difficulty),
                    'type' => $q->type,
                    'question_text' => $q->question_text,
                    'options' => $q->options,
                    'correct_answer' => $q->correct_answer,
                    'explanation' => $q->explanation,
                ];
            }
        }

        $docsDir = base_path('docs');
        if (!File::isDirectory($docsDir)) {
            File::makeDirectory($docsDir, 0755, true);
        }

        // Generate static HTML using quiz/index.blade.php template
        $questionsJson = json_encode($allQuestions, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        
        $bladePath = resource_path('views/quiz/index.blade.php');
        $html = File::get($bladePath);

        // Replace Blade tokens for standalone static execution
        $html = str_replace('{{ csrf_token() }}', '', $html);
        $html = str_replace(
            'window.INITIAL_QUIZ_DATA = @json($initialQuiz ?? []);',
            "window.ALL_QUESTIONS_BANK = {$questionsJson};\n        window.IS_STATIC_GITHUB_PAGES = true;",
            $html
        );

        // Update startQuiz function in static mode to sample 30 questions locally
        $staticLogic = <<<JS
        // Static GitHub Pages randomizer: 6 questions per topic (3 rendah, 2 sederhana, 1 tinggi) = 30 total
        async function startQuiz() {
            initAudio();
            const btn = document.getElementById('btnJanaLatihan');
            if (btn) {
                btn.innerHTML = '<span>⚡</span><span>Menjana 30 Soalan...</span>';
                btn.disabled = true;
            }

            if (window.ALL_QUESTIONS_BANK && window.ALL_QUESTIONS_BANK.length > 0) {
                const bank = window.ALL_QUESTIONS_BANK;
                const selected = [];

                // Group by topic 1 to 5
                for (let t = 1; t <= 5; t++) {
                    const topicQuestions = bank.filter(q => q.topic_number === t);
                    const rendah = topicQuestions.filter(q => q.difficulty === 'rendah').sort(() => 0.5 - Math.random()).slice(0, 3);
                    const sederhana = topicQuestions.filter(q => q.difficulty === 'sederhana').sort(() => 0.5 - Math.random()).slice(0, 2);
                    const tinggi = topicQuestions.filter(q => q.difficulty === 'tinggi').sort(() => 0.5 - Math.random()).slice(0, 1);
                    selected.push(...rendah, ...sederhana, ...tinggi);
                }

                // Shuffle the 30 questions
                allQuestions = selected.sort(() => 0.5 - Math.random()).map((q, idx) => ({
                    ...q,
                    number: idx + 1
                }));
            } else {
                try {
                    const res = await fetch('/api/generate-quiz');
                    const data = await res.json();
                    allQuestions = data.questions;
                } catch(e) {
                    console.error('Error loading questions', e);
                }
            }

            if (btn) {
                btn.innerHTML = '<span class="text-2xl">⚡</span><span>Jana Latihan</span>';
                btn.disabled = false;
            }

            if (!allQuestions || allQuestions.length === 0) {
                alert('Ralat semasa menjana soalan.');
                return;
            }

            currentIndex = 0;
            userAnswers = {};

            document.getElementById('welcomeScreen').classList.add('hidden');
            document.getElementById('resultScreen').classList.add('hidden');
            document.getElementById('quizScreen').classList.remove('hidden');

            buildNavigatorGrid();
            renderQuestion(0);
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
JS;

        // Replace the startQuiz function in the output HTML
        $html = preg_replace(
            '/async function startQuiz\(\) \{[\s\S]*?\/\/ Build the bottom 30 buttons navigator/',
            $staticLogic . "\n\n        // Build the bottom 30 buttons navigator",
            $html
        );

        // Save to BOTH root index.html AND docs/index.html
        File::put(base_path('index.html'), $html);
        File::put($docsDir . '/index.html', $html);

        // Create .nojekyll in root and docs
        File::put(base_path('.nojekyll'), '');
        File::put($docsDir . '/.nojekyll', '');

        $this->info("Successfully generated root index.html and docs/index.html with " . count($allQuestions) . " questions!");
        $this->info("GitHub Pages will now serve the interactive app immediately from root / OR /docs!");

        return Command::SUCCESS;
    }
}
