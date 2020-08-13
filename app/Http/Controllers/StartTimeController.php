<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StartTime;

class StartTimeController extends Controller
{
    //==========ここから追加==========
    public function index()
    {
        $start_times = StartTime::all();
        // $start_times = StartTime::all()->sortByDesc('created_at');

        return view('start_times.index', ['start_times' => $start_times]);
    }

    public function create()
    {
        return view('start_times.create');
    }
}
