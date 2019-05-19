<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function viewQuestions()
    {
        $questions = json_decode(DB::table('NetworkQuestions')->get());
        $answers = json_decode(DB::table('Answers')->get());
        $questionData = [];
        foreach($questions as $qKey => $q) {
            $questionData[$qKey]['question'] = $q;
            $questionData[$qKey]['answers'] = [];
            foreach($answers as $aKey => $a) {
                if ($a->question_id == $q->id)
                    $questionData[$qKey]['answers'][$aKey] = $a;
            }
        }
        return view('questions', ['questionData' => $questionData]);
    }

    public function addAnswer($questionId, Request $request)
    {
        $data = $request->only('client', 'text');
        $client = $data['client'];
        $text = $data['text'];
        $date = new \DateTime();
        try {
            if (DB::table('Answers')->insert(['question_id' => $questionId, 'client' => $client, 'text' => $text, 'date' => $date])) return response()->json(1);
            else return response()->json(0);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }

    public function deleteAnswer($id)
    {
        try {
            if (DB::table('Answers')->where('id', $id)->delete()) return response()->json(1);
            else return response()->json(0);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }
}
