@extends('layout')

@section('content')
<div class="container">

<hr>
 <div class="row">
      <a href="/todoams" class="btn btn-danger">Back to Todoams Page</a>
      <br><hr>
    <div class="col-lg-6 col-md-3">
       <form action="{{ route('todoams.save', ['id' => $todoam->id]) }}" method="post">
         {{ csrf_field() }}
         <input type="text" class="form-control input-lg" name="todoam"  value="{{ $todoam->todoam }}" placeholder="Create a new todo">
      </form>
    </div>
 </div> 
 <hr>
</div>
@stop