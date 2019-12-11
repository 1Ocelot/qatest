<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
    public function create(Question $question)
    {
        $userId = session()->get('id');
        $user = \App\User::findOrFail($question->user_id);
        
        return view('answer.create', compact('question','user'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'answer' => 'required'
        ]);

        $user_id = session()->get('id');

        $questionId = $request->input('questionId');

        Answer::create(['answer' => $data['answer'], 'user_id' => $user_id, 'question_id' => $questionId]);

        return redirect('/questions');
    }
}
