@extends('layouts.app')

@section('content')
       
       <div class="container text-center">
       <div class="row">
        <div class="col-sm-8 offset-sm-2">
           <h1 class=" text-center">Join a class</h1>
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
             <form method="get" action="/session/set2">
                 @csrf
                 <div class="form-group">    
                     
                     <input type="text" class="form-control" name="class"/>
                 </div>
                 <button type="submit" class="btn btn-primary">Join  class</button>
             </form>
         </div>
       </div>
       </div>
       </div>

       @endsection

     

