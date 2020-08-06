<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MyEvent;

class ScoreUpdateController extends Controller
{
    function PushScoreValue(Request $request)
    {
        $score = $request->input('score');
        event(new MyEvent($score));
        return $score;
    }
}
