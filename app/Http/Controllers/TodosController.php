<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    function index() {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    function show(Todo $todo) {
        return view('todos.show', compact('todo'));
    }

    function create() {
        return view('todos.create');
    }

    function store(TodoRequest $request) {

        Todo::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        session()->flash('success', 'Todo Created Successfully');

        return redirect('todos');
    }

    function edit($id) {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    function update(TodoRequest $request, Todo $todo) {

        $todo->name = $request->name;
        $todo->description = $request->description;

        $todo->save();

        session()->flash('success', 'Todo Updated Successfully');

        return redirect("todos/$todo->id");
    }

    function destroy(Todo $todo) {
        $todo->delete();

        session()->flash('success', 'Todo Deleted Successfully');

        return redirect('todos');
    }

    function updateComplete($id) {
        $todo = Todo::findOrFail($id);
        
        $todo->update([
            'completed' => true
        ]);

        session()->flash('success', 'Todo Completed Successfully');

        return redirect('todos');
    }
}
