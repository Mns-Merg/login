@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3 text-center">Vote</h1>
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
            <div class="form-group text-center">
                <label for="question">Question:</label></br>
                <input type="text" name="question" value="{{$quiz->question}}" readonly>
            </div>
            <div class="text-center">
                <label for="last_name">A</label>
                <input type="radio"  name="answer" value="a"/></br>
                <label for="last_name">B</label>
                <input type="radio"  name="answer" value="b"/></br>
                <label for="last_name">C</label>
                <input type="radio"  name="answer" value="c"/></br>
                <label for="last_name">D</label>
                <input type="radio"  name="answer" value="d"/>
                
            </div>
            
            
            
            <button type="submit" class="btn btn-primary btn-lg btn-block">Vote</button>
        </form>
    </div>
</div>
@endsection