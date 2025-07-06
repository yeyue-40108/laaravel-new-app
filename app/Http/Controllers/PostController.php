<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function events()
    {
        $events = [
            [
                'title' => 'イベント1',
                'start' => '2025-07-07'
            ],
            [
                'title' => 'イベント2',
                'start' => '2025-07-15'
            ]
        ];

        return response()->json($events);
    }
}
