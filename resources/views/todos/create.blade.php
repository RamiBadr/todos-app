@extends('layouts.app')
@section('title')
    Create Single Todo
@endsection
@section('content')
    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row">
        <div class="col-6 mx-auto">
    <div class="card card-default">
        <div class="card-header">
            Create New Todo
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">
                            {{$error}}
                        </li>
                    @endforeach
                    </ul>
            </div>
        @endif
            <form method='POST' action={{route('todos.store')}}>
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" name='name' placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <textarea name="description" cols="5" rows="5" class="form-control" placeholder="Description"></textarea>
                </div><br>
                <div class="form-group">
                    <input type="submit" value="Add Todo" class="btn btn-success form-control">
                </div>
            </form>
        </div>
    </div>
</div>
        
    </div>  
    
@endsection