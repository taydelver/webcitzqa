<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Answer;
use App\Rating;

class AnswersController extends Controller
{
    public function create(Request $request)
    {
        $answer = new Answer;
        $answer->question_id = $request->question_id;
        $answer->content = $request->content;
        $answer->posted_date = date("Y-m-d");
        $answer->save();

    }

    public function update(Request $request, Answer $answer)
    {
        $answer->content = $request->content;
        $answer->posted_date = date("Y-m-d");
        $answer->save();

    }

    public function rateAnswer(Request $request)
    {
        $rating = new Rating;
        $rating->answer_id = $request->answer_id;
        $rating->rating_value = $request->rating_value;

        $rating->save();

        $answer = $rating->answer;
        $ratings = $answer->ratings;

        $average = array_sum($ratings)/count($ratings);
        $answer->rating = $average;
        
    }
}
