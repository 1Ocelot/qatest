<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::all();
        
        return view('question.index', compact('questions'));
    }

    public function create()
    {
        return view('question.create');
    }

    public function store()
    {
        $data = request()->validate([
            'question' => 'required'
        ]);

        $user_id = session()->get('id');

        Question::create(['question' => $data['question'], 'user_id' => $user_id]);

        return redirect('/questions');
    }

    public function show(Question $question)
    {
        $userId = session()->get('id');
        $questonId = $question->id;
        $user = \App\User::findOrFail($question->user_id);
        $answers = \App\Answer::where('question_id',$questonId)->get();

        if (!empty($answers[0]))
        {
            $answer = \App\Answer::where('question_id',$questonId)->first();
            $answerUserId = $answer->user_id;
            $answerUserInfo = \App\User::findOrFail($answerUserId);
        }

        return view('question.show', compact('question','userId','user','answers','answerUserInfo'));
    }

    public function edit(Question $question)
    {
        return view('question.edit', compact('question'));
    }

    public function update(Question $question)
    {
        $data = request()->validate([
            'question' => 'required'
        ]);

        $user_id = session()->get('id');

        $question->update(['question' => $data['question'], 'user_id' => $user_id]);

        return redirect('/questions');
    }
    
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect('/questions');
    }
    
}
