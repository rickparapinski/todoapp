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


    public function show($todoId) {

        $todo = Todo::find($todoId);

        return view ('todos.view')->with('todo', $todo);
        

    }

    public function create(){
        return view ('todos.create');
    }

    public function store() {

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }
}
