@extends('layout')

@section('content')
<div class="container">

<hr>
 <div class="row">
      <a href="/" class="btn btn-danger btn-sm">Go Back</a><br>
    <div class="col-lg-6 col-md-3">
       <form action="/create/todoam" method="post">
         {{ csrf_field() }}
         <input type="text" class="form-control input-lg" name="todoam" placeholder="Create a new todo">
      </form>
    </div>
 </div> 
 <hr>
   @foreach($todoams as $todoam)
        {{ $todoam->todoam }} <a href="{{ route('todoam.delete', ['id'=>$todoam->id]) }}" class="btn btn-danger">X</a>
        <a href="{{ route('todoam.update', ['id'=>$todoam->id]) }}" class="btn btn-primary btn-sm">Update</a>
        @if (!$todoam->completed)
            <a href="{{ route('todoams.completed', ['id'=> $todoam->id]) }}" class="btn btn-xs btn-success">Mark as completed</a>
    
            @else

                 <span class="text-success">Completed!</span>

            
        @endif
        <hr>
   @endforeach
</div>
@stop