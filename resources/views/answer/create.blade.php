@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Question number: {{ $question->id }} <br>
                    Asked by: {{ $user->name }}<br>
                    On date: {{ $question->created_at}}
                </div>

                <div class="card-body">
                {{ $question->question }}
                <br>

                <form action="/answers/store" method="POST">

                    <input type="text" name="answer" autocomplete="off">
                    <input type="hidden" name="questionId" value="{{ $question->id }}">

                    @error('answer') <p style="color:red;">{{ $message }}</p> @enderror

                    @csrf

                    <button type="submit">Submit answer</button>

                </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection