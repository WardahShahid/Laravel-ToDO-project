@extends('layouts.app')

@section('content')

    <h1>Task List</h1>
    @foreach($task as $task)
    <div class="card @if($task->isCompleted()) border-success mb-3 @endif" style="margin-bottom: 20px;">
  <div class="card-body">

  <p>
  {{$task->description}}
</p>
@if(!$task->isCompleted())

<div style="display: inline;">

<form action="/tasks/{{$task->id}}" method="POST" style="display: inline;">
        @method('DELETE')
        @csrf
        <button class="btn btn-outline-danger" type="submit">Delete</button>
    </form>

    <form action="/tasks/{{$task->id}}" method="POST" style="display: inline;">
        @method('PATCH')
        @csrf
        <button class="btn btn-outline-success" type="submit">Mark as completed</button>
    </form>

   
</div>

@else

<form  action="/tasks/{{$task->id}}" method="POST">
  @method('DELETE')
  @csrf

  <button  class="btn btn-outline-danger" type="submit" style="display: block; width: 100%;">Delete</button>
  </form>

@endif



  </div>
</div>
   
@endforeach
<div class="d-grid">
<a href="/tasks/create" class="btn btn-primary btn-lg ">New Task</a>
</div>
@endsection