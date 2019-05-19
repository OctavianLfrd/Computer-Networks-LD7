<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function commentsView($workId)
    {
        $title = json_decode(DB::table('WorkTitles')->select('title')->where('work_id', $workId)->get())[0]->title;
        // $comments = DB::table('Comments')->select('id', 'date', 'client', 'text')->where('client', $client)->get();
        // return view('comments', ['ld' => $client, 'ldComments' => $comments]);
        return view('comments', ['title' => $title]);
    }

    public function addComment($workId, Request $request)
    {
        $data = $request->only('client', 'text');
        $client = $data['client'];
        $text = $data['text'];
        $date = new \DateTime();
        try {
            if (DB::table('Comments')->insert(['work_id' => $workId, 'client' => $client, 'text' => $text, 'date' => $date])) return response()->json(1);
            else return response()->json(0);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }

    public function deleteComment($id)
    {
        try {
            if (DB::table('Comments')->where('id', $id)->delete()) return response()->json(1);
            else return response()->json(0);
        } catch (Exception $e) {
            return response()->json(0);
        }
    }
}
