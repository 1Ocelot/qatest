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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection