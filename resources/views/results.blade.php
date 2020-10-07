@extends('layouts.admin1')

@section('content')
      


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Connected Class : {{ session()->get('class') }} </div>

                <div class="card-body text-left">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    The correct Answer is : {{$votes[4] }}<br>
                    Total Votes for A: {{$votes[0]}}<br>
                    Total Votes for B: {{$votes[1]}}<br>
                    Total Votes for C: {{$votes[2]}}<br>
                    Total Votes for D: {{$votes[3]}}<br>
                    Vote Summary : {{$votes[5]}}<br>
                    Correct Votes : {{$votes[6]}}<br>
                    <a href="/">@php
                    if ($votes[6]<=$votes[7]){
                        echo "Answers are below threshold take this alternative quiz";
                    }
                    @endphp</a>
                    <a href="/quizs">Manage Quizs</a><br>

                    


                </div>
            </div>
        </div>
    </div>
</div>


@endsection