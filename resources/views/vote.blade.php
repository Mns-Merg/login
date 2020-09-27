@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Vote for quiz</h1>
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
        <form method="get" action="{{ url('vote_send')}}">
             <!-- @method('PATCH') -->
            @csrf
            <div class="form-group">
                <label for="question">Question:</label>
                <input type="text" class="form-control" name="question" value={{ $quiz->question }} />
            </div>
            <div class="form-group">
                <label for="last_name">Answer</label>
                <input type="text" class="form-control" name="answer"/>
            </div>
            
            
            <button type="submit" class="btn btn-primary">Vote</button>
        </form>
    </div>
</div>
@endsection