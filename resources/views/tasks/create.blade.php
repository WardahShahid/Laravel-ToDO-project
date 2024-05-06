    @extends('layouts.app')
    
    @section('content')
    <h1>New Task</h1>

    @if ($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
    <ul>
        <li> {{$error}}</li>
    </ul>
    </div>
@endforeach
    @endif
    <form method="POST" action="/tasks">
        @csrf
        <div class='form-group' style="margin-top: 10px">
        <label for="description">Task Description</label>
        <input class="form-control" name="description"/>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" style="margin-top: 10px">
        Create Task</button>
    </div>
    </form>
    @endsection

 