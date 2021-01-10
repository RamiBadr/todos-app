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
            Edit A Todo
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
            <form method='post' action={{action("TodosController@update", $todo->id)}}>
                {{csrf_field()}}
                <input type="hidden" name="_method" value='put'>
                <div class="form-group">
                    <input type="text" class="form-control" name='name' placeholder="Name" value={{$todo->name}}>
                </div>
                <br>
                <div class="form-group">
                    <textarea name="description" cols="5" rows="5" class="form-control" placeholder="Description">{{$todo->description}}</textarea>
                </div><br>
                <div class="form-group">
                    <input type="submit" value="Update Todo" class="btn btn-success form-control">
                </div>
            </form>
        </div>
    </div>
</div>
        
    </div>  
    
@endsection