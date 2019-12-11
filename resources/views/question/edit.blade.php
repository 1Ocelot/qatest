@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit question
                </div>

                <div class="card-body">
                    <form action="/questions/{{ $question->id }}" method="POST">

                        @method('PATCH')

                       <input type="text" name="question" autocomplete="off" value="{{ $question->question }}">
                        @error('question') <p style="color:red;">{{ $message }}</p> @enderror

                        @csrf

                        <button type="submit">Save changes</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection