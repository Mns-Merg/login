@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Welcome {{$user->name}} </div>

                <div class="card-body text-left">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    In order to use the application first you need to join a class and then navigate to get quiz.<br>

                    <a href="/class_join">Join a Class</a><br>
                    <a href="/vote">Get Quiz</a><br>
                    {{ session()->get('class') }}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
