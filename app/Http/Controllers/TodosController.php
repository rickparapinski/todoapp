<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {

        //fetch all todos from database
        $todos = Todo::all(); 

        //display in the index page
        

        return view ('todos.index')->with('todos', $todos);
    }


    public function show(Todo $todo) {

        return view ('todos.view')->with('todo', $todo);
        

    }

    public function create(){
        return view ('todos.create');
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function edit (Todo $todo) {

        return view('todos.edit')->with('todo', $todo);

    }

    public function update(Todo $todo) {

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');

    }

    public function destroy(Todo $todo){
        $todo->delete();

        return redirect('/todos');
    }
}
