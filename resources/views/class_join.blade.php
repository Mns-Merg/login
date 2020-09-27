<html>
    <body>
       Sindesou

       <div class="row">
        <div class="col-sm-8 offset-sm-2">
           <h1 class="display-3">Join a class</h1>
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
                     <label for="class">Class:</label>
                     <input type="text" class="form-control" name="class"/>
                 </div>
                 <button type="submit" class="btn btn-primary">Join a class</button>
             </form>
         </div>
       </div>
       </div>

    </body>
</html>