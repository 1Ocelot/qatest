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
        $questions = \App\Question::all();
        
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

    public function show(\App\Question $question)
    {

        return view('question.show', compact('question'));

    }
}
