@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                   @forelse($users as $user)
                        <div class="alert alert-success">
                            Name: {{ $user->name }}
                            <br>
                            Username: {{ $user->username }}
                            <br>
                            Email: {{ $user->email }}
                        </div>
                    @empty
                         <div class="alert alert-success">
                            There are no users to show.
                        </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection