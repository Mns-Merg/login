@extends('layouts.admin1')

@section('content')
@section('content')
<div class="container">
<div class="col-sm-12">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif     



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

                    In order to use the application first you need to create a class and then create a RT-Quiz.<br>

                    <a href="/quizs">Manage Quizs</a><br>
                    <a href="/class">Create a class</a><br>
                    


                </div>
            </div>
        </div>
    </div>
</div>


@endsection