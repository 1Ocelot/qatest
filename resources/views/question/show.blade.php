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
                <a href="/answers/{{ $question->id }}/create">Answer this question.</a>

                @if ($question->id == $userId)

                <a href="/questions/{{ $question->id }}/edit">Edit question.</a>

                <form action="/questions/{{ $question->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button>Delete</button>
                </form>

                @else

                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection