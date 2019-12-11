@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Question number: {{ $question->id }}
                </div>

                <div class="card-body">
                {{ $question->question }}
                <br>
                <a href="#">Answer this question.</a>

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