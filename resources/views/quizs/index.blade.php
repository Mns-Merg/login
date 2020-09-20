@extends('base')
@section('main')
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Quizs</h1>    
    <div>
    <a style="margin: 19px;" href="{{ route('quizs.create')}}" class="btn btn-primary">New Quiz</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Question</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($quizs as $quiz)
        <tr>
            <td>{{$quiz->id}}</td>
            <td>{{$quiz->question}}</td>
            <td>
                <a href="{{ route('quizs.edit',$quiz->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('quizs.destroy', $quiz->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection