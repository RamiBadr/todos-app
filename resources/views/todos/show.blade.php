@extends('layouts.app')
@section('title')
    Single Todo:{{ $todo->name}}
@endsection
@section('content')
        <h1 class="text-center my-5">{{$todo->name}}</h1>
            <div class="row justify-container">
                <div class="col-md-6 mx-auto">
                    <div class="card card-default">
                        <div class="card-header">
                            Details
                        </div>
                        <div class="card-body">
                            {{$todo->description}}
                        </div>
                    </div>
                    <br>
                    <a href={{url("todos/$todo->id/edit")}} class="btn btn-primary">Edit</a>
                    <form method="post" action={{action("TodosController@destroy", $todo->id)}} class='d-inline'>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
            </div>
        </div>
@endsection