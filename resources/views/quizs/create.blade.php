@extends('layouts.admin1')

@section('content')
      


<div class="container">
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a quiz</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('quizs.store') }}">
          @csrf
          <div class="form-group">    
              <label for="question">Question:</label>
              <input type="text" class="form-control" name="question" required/>
          </div>
          <div class="form-group">
              <label for="answer_A">Answer A:</label>
              <input type="text" class="form-control" name="answer_A" required/>
          </div>
          <div class="form-group">
              <label for="answer_A">Answer B:</label>
              <input type="text" class="form-control" name="answer_B" required/>
          </div>
          <div class="form-group">
              <label for="answer_A">Answer C:</label>
              <input type="text" class="form-control" name="answer_C" required/>
          </div>
          <div class="form-group">
              <label for="answer_A">Answer D:</label>
              <input type="text" class="form-control" name="answer_D" required/>
          </div>  
          <div class="form-group">
              <label for="answer_A">Correct Answer:</label>
              <input type="text" class="form-control" name="correct_answer" required/>
          </div>                
          <button type="submit" class="btn btn-primary">Add quiz</button>
      </form>
  </div>
</div>
</div>
@endsection