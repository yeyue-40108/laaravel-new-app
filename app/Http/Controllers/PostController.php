<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function own(Request $request) {
        $year = $request->input('year')??Carbon::today()->format('Y');
        $month = $request->input('month')??Carbon::today()->format('m');
        $calendarYm = Carbon::Create($year, $month, 01, 00, 00, 00);
        $calendarDays = [];

        // 月初の日付が日曜日でないときの、追加する前月カレンダーの日付
        if ($calendarYm->dayOfWeek != 0) {
            $calendarStartDay = $calendarYm->copy()->subDays($calendarYm->dayOfWeek);
            for ($i = 0; $i < $calendarYm->dayOfWeek; $i++) {
                $calendarDays[] = ['date' => $calendarStartDay->copy()->addDays($i), 'show' => false, 'status' =>false];
            }
        }

        // 当月の日付
        for ($i = 0; $i < $calendarYm->daysInMonth; $i++) {
            if ($calendarYm->copy()->addDays($i)>=Carbon::now()) {
                $show = true;
                $status = true;
            } else {
                $show = true;
                $status = false;
            }
            $calendarDays[] = ['date' => $calendarYm->copy()->addDays($i), 'show' => $show, 'status' => $status];
        }

        // 月末の日付が土曜日でないときの、追加する翌月カレンダーの日付
        if ($calendarYm->copy()->endOfMonth()->dayOfWeek !=6) {
            for ($i = $calendarYm->copy()->endOfMonth()->dayOfWeek+1; $i < 7; $i++) {
                $calendarDays[] = ['date' => $calendarYm->copy()->addDays($i), 'show' => false, 'status' => false];
            }
        }

        return view('posts.own', [
            'calendarDays' => $calendarDays,
            'previousMonth' => $calendarYm->copy()->subMonth(),
            'nextMonth' => $calendarYm->copy()->addMonth(),
            'thisMonth' => $calendarYm,
        ]);
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->input('title');
        
        return redirect()->route('posts.index');
    }
}
