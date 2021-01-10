    @extends('layouts.app')
    @section('title')
        Todos List
    @endsection
    @section('content')
    <h1 class="text-center my-5">Todos Page</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
    
    <div class="card card-default">
        <div class="card-header">
            Todos
        </div>
        <div class="card-body">
                    <ul class='list-group'>
                        @foreach ($todos as $todo)
                            <li class="list-group-item">{{$todo->name}} 
                            <div class='float-end'>
                                <a href={{url("todos/{$todo->id}")}} class="btn btn-primary btn-sm">View</a>
                                @if (!$todo->completed)
                                    <a href="{{url("todos/{$todo->id}/complete")}}" class="btn btn-warning btn-sm">
                                        Complete
                                    </a>
                                @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
              
            </div>
            
        </div>
    </div>
    @endsection
        


