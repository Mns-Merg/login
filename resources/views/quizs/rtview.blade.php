@extends('layouts.admin1')

@section('content')
      


<div class="container">
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Real Time quiz</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="get" action="{{ url('rt_quiz_destroy')}}">
             <!-- @method('PATCH') -->
            @csrf
            <div class="form-group">
                <label for="question">Question:</label>
                <input type="text" class="form-control" name="question" value='{{ $quiz->question }}' readonly/>
            </div>
            <div class="form-group">
                <label for="last_name">Answer A:</label>
                <input type="text" class="form-control" name="answer_A" value='{{ $quiz->answer_A }}' readonly/>
            </div>
            <div class="form-group">
                <label for="email">Answer B:</label>
                <input type="text" class="form-control" name="answer_B" value='{{ $quiz->answer_B }}' readonly/>
            </div>
            <div class="form-group">
                <label for="city">Answer C:</label>
                <input type="text" class="form-control" name="answer_C" value='{{ $quiz->answer_C }}' readonly/>
            </div>
            <div class="form-group">
                <label for="country">Answer D:</label>
                <input type="text" class="form-control" name="answer_D" value='{{ $quiz->answer_D }}' readonly/>
            </div>
            
            
            <button type="submit" class="btn btn-primary">End Vote</button>
        </form>
    </div>
</div>
@endsection