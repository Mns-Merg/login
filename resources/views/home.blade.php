@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{$user->name}}

                    <a href="/class_join">Σύνδεση σε αίθουσα αίθουσας</a>{{ session()->get('class') }}
                    <a href="/vote">Get Quiz for Vote


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
