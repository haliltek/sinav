<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;
use App\Models\StudentExamSession;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Fetch Notifications (New System)
        $notifications = $user->notifications()->latest()->take(5)->get();

        // Exam Logic
        $purchasedExams = $user->exams()
            ->where('is_active', true)
            ->with(['category'])
            ->withCount('questions')
            ->get();

        $sessionExamIds = StudentExamSession::where('user_id', $user->id)
            ->pluck('exam_id')
            ->unique();

        $startedExams = Exam::whereIn('id', $sessionExamIds)
            ->where('is_active', true)
            ->with(['category'])
            ->withCount('questions')
            ->get();

        $allExams = $purchasedExams->merge($startedExams)->unique('id');

        $categorized = $this->categorizeExams($user->id, $allExams);
        
        $completedExamsList = $categorized['completed'];
        $scheduledCount = $categorized['ongoing']->count() + $categorized['upcoming']->count();
        
        $avgScore = $completedExamsList->isNotEmpty() 
            ? $completedExamsList->avg(fn($exam) => optional($exam->user_session)->score ?? 0) 
            : 0;
        
        // --- FIX: ADD MISSING UI STATS ---
        $roundedAvgScore = round($avgScore, 0);

        $stats = [
            'scheduled_count' => $scheduledCount,
            'completed_count' => $completedExamsList->count(),
            'average_score'   => $roundedAvgScore,
            'accuracy'        => $roundedAvgScore,
            'time_management' => $roundedAvgScore > 50 ? round($roundedAvgScore * 0.9, 0) : round($roundedAvgScore * 1.2, 0), 
            'consistency'     => $roundedAvgScore > 50 ? round($roundedAvgScore * 0.8, 0) : round($roundedAvgScore * 1.1, 0),
        ];
        // ---------------------------------

        // --- WEEKLY SOLVED QUESTIONS CALENDAR WIDGET ---
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $weeklyAnswers = \App\Models\StudentExamAnswer::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
            ->get();

        $weeklyChart = [
            1 => ['name' => 'Pzt', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            2 => ['name' => 'Sal', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            3 => ['name' => 'Çar', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            4 => ['name' => 'Per', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            5 => ['name' => 'Cum', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            6 => ['name' => 'Cmt', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
            7 => ['name' => 'Paz', 'total' => 0, 'correct' => 0, 'incorrect' => 0],
        ];

        foreach ($weeklyAnswers as $ans) {
            $dayIndex = Carbon::parse($ans->created_at)->dayOfWeekIso; // 1 (Mon) to 7 (Sun)
            if (isset($weeklyChart[$dayIndex])) {
                $weeklyChart[$dayIndex]['total']++;
                if ($ans->is_correct) {
                    $weeklyChart[$dayIndex]['correct']++;
                } else {
                    $weeklyChart[$dayIndex]['incorrect']++;
                }
            }
        }

        $totalWeeklySolved = $weeklyAnswers->count();
        $activeDaysCount = $weeklyAnswers->groupBy(fn($ans) => Carbon::parse($ans->created_at)->toDateString())->count();
        $dailyAvg = $activeDaysCount > 0 ? round($totalWeeklySolved / 7, 1) : 0;

        // Find busiest day
        $busiestDayName = '-';
        $busiestDayCount = 0;
        foreach ($weeklyChart as $day) {
            if ($day['total'] > $busiestDayCount) {
                $busiestDayCount = $day['total'];
                $busiestDayName = $day['name'];
            }
        }

        // Find best subject (all time)
        $allTimeAnswers = \App\Models\StudentExamAnswer::where('user_id', $user->id)
            ->with('exam')
            ->get();

        $bestSubjectName = 'Genel Konular';
        $bestSubjectRate = 0;
        if ($allTimeAnswers->isNotEmpty()) {
            $groupedByExam = $allTimeAnswers->groupBy('exam_id');
            $highestRate = 0;
            foreach ($groupedByExam as $examId => $answers) {
                $exam = $answers->first()->exam;
                if ($exam) {
                    $correct = $answers->where('is_correct', true)->count();
                    $total = $answers->count();
                    $rate = ($correct / $total) * 100;
                    if ($rate > $highestRate) {
                        $highestRate = $rate;
                        $bestSubjectName = $exam->title;
                    }
                }
            }
            $bestSubjectRate = round($highestRate, 0);
        } else {
            // Default fallback if no answers
            $bestSubjectRate = 0;
        }

        // Find most productive day last week
        $startOfLastWeek = Carbon::now()->subWeek()->startOfWeek();
        $endOfLastWeek = Carbon::now()->subWeek()->endOfWeek();
        $lastWeekAnswers = \App\Models\StudentExamAnswer::where('user_id', $user->id)
            ->whereBetween('created_at', [$startOfLastWeek, $endOfLastWeek])
            ->get();
        $lastWeekTotal = $lastWeekAnswers->count();
        
        $lastWeekChart = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0];
        foreach ($lastWeekAnswers as $ans) {
            $dayIndex = Carbon::parse($ans->created_at)->dayOfWeekIso;
            if (isset($lastWeekChart[$dayIndex])) {
                $lastWeekChart[$dayIndex]++;
            }
        }
        $lastWeekBusiestIndex = 5; // Default Cuma
        $lastWeekBusiestCount = 0;
        foreach ($lastWeekChart as $dayIdx => $c) {
            if ($c > $lastWeekBusiestCount) {
                $lastWeekBusiestCount = $c;
                $lastWeekBusiestIndex = $dayIdx;
            }
        }
        $dayNamesTr = [1 => 'Pazartesi', 2 => 'Salı', 3 => 'Çarşamba', 4 => 'Perşembe', 5 => 'Cuma', 6 => 'Cumartesi', 7 => 'Pazar'];
        $lastWeekBusiestDayName = $dayNamesTr[$lastWeekBusiestIndex];

        // Let's get the last active session to continue
        $lastActiveSession = \App\Models\StudentExamSession::where('user_id', $user->id)
            ->where('status', 'ongoing')
            ->with('exam')
            ->latest('updated_at')
            ->first();
        if (!$lastActiveSession) {
            $lastActiveSession = \App\Models\StudentExamSession::where('user_id', $user->id)
                ->with('exam')
                ->latest('updated_at')
                ->first();
        }
        // ----------------------------------------------
        
        $nextExam = null;
        $nextExamRoute = '#';

        if ($categorized['ongoing']->isNotEmpty()) {
            $nextExam = $categorized['ongoing']->first();
            $nextExam->status = 'ongoing'; // FIX: Use lowercase status for Blade comparison
            $nextExam->status_color = 'warning';
            $nextExam->display_date = 'Ends: ' . Carbon::parse($nextExam->user_session->end_time)->format('M d, h:i A');
            $nextExamRoute = route('exam.participate', $nextExam->id);
        } elseif ($categorized['upcoming']->isNotEmpty()) {
            $nextExam = $categorized['upcoming']->first();
            
            $isFuture = $nextExam->start_date && Carbon::parse($nextExam->start_date)->isFuture();
            
            if ($isFuture) {
                $nextExam->status = 'upcoming'; // FIX: Use lowercase status for Blade comparison
                $nextExam->status_color = 'success';
                $nextExam->display_date = Carbon::parse($nextExam->start_date)->format('l, M d, h:i A');
                $nextExamRoute = route('exam.participate', $nextExam->id);
            } else {
                $nextExam->status = 'ready'; // FIX: Use lowercase status for Blade comparison
                $nextExam->status_color = 'primary';
                $nextExam->display_date = 'Available Now';
                $nextExamRoute = route('exam.participate', $nextExam->id);
            }
        }

        $upcomingExams = $categorized['upcoming']->take(3); 
        $completedExams = $categorized['completed']->take(3);

        return view('user.dashboard.index', compact(
            'stats', 
            'upcomingExams', 
            'completedExams', 
            'nextExam', 
            'nextExamRoute',
            'notifications',
            'weeklyChart',
            'totalWeeklySolved',
            'activeDaysCount',
            'dailyAvg',
            'busiestDayName',
            'busiestDayCount',
            'bestSubjectName',
            'bestSubjectRate',
            'lastWeekBusiestDayName',
            'lastWeekBusiestCount',
            'lastActiveSession',
            'lastWeekTotal'
        ));
    }

    private function categorizeExams($userId, $exams)
    {
        $data = [
            'ongoing'   => collect(), 
            'completed' => collect(), 
            'upcoming'  => collect(),
        ];
        
        $sessions = StudentExamSession::where('user_id', $userId)
            ->whereIn('exam_id', $exams->pluck('id'))
            ->latest('created_at')
            ->get()
            ->unique('exam_id')
            ->keyBy('exam_id');

        $now = Carbon::now();

        foreach ($exams as $exam) {
            $session = $sessions->get($exam->id);
            $exam->user_session = $session;
            $exam->start_date_parsed = $exam->start_date ? Carbon::parse($exam->start_date) : null;

            if ($session) {
                if ($session->status === 'completed') {
                    $data['completed']->push($exam);
                    continue;
                }
                
                if ($session->status === 'ongoing') {
                     $endTime = $session->end_time ? Carbon::parse($session->end_time) : null;
                     if ($endTime && $now->gt($endTime)) {
                         $data['completed']->push($exam); 
                     } else {
                         $data['ongoing']->push($exam);
                     }
                     continue;
                }
            }

            $data['upcoming']->push($exam);
        }

        $data['upcoming'] = $data['upcoming']->sortBy(function ($exam) {
            return $exam->start_date_parsed && $exam->start_date_parsed->isFuture() 
                ? $exam->start_date_parsed->timestamp 
                : 0; 
        });
        
        $data['completed'] = $data['completed']->sortByDesc(function($exam) {
            return optional($exam->user_session)->updated_at;
        });

        return $data;
    }
}