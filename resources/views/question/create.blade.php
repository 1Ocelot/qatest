@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ask a question</div>

                <div class="card-body">
                   
                   <form action="/questions" method="POST">

                        <input type="text" name="question" autocomplete="off">
                        @error('question') <p style="color:red;">{{ $message }}</p> @enderror

                        @csrf

                        <button type="submit">Submit question</button>

                   </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection