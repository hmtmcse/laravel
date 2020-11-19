<?php


namespace App\Http\Controllers;


use Carbon\Carbon;

class DrawIntervalController extends Controller
{

    public function index()
    {
        $drawStartTime = "2020-11-21 13:59:00";
        $drawStartTime = "2020-11-19 13:20:00";
        $numberOfDraws = 3;
        $intervalBetweenDraws = 1 * 24 * 60 * 60; // Day * Hour * Minute * Second
        $completedDraw = 0;
        $intervalBetweenDraws = Carbon::parse($drawStartTime)->addSeconds($completedDraw * $intervalBetweenDraws)->format("Y-m-d H:i:s");
        $countDownTime = 0;

        if (Carbon::now()->lessThan($intervalBetweenDraws)){
            $countDownTime =  $intervalBetweenDraws;
        }

        return "Draw Interval " .$intervalBetweenDraws . " <==> " . $countDownTime . " <==> " . Carbon::now()->format("Y-m-d H:i:s");
    }

}
