@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Questions
                <a href="/questions/create">Ask a question</a>
                </div>

                <div class="card-body">
                   @forelse($questions as $question)
                        <div class="alert alert-success">
                            <a href="/questions/{{ $question->id }}">{{ $question->question }}</a>
                        </div>
                    @empty
                         <div class="alert alert-success">
                            There are no questions to show.
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection