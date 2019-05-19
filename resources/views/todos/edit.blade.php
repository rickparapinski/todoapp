@extends('layout.app')

@section('title')

Create a new todo

@endsection

@section('content')

<h1 class="text-center">Edit a todo</h1>


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Edit Todo</div>
            <div class="card-body">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                <form action="/todos/{{$todo->id}}/update-todos" method="POST" >
                @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="" class="form-control" value="{{$todo->name}}">
                        <textarea name="description" id="" cols="5" rows="5" class="form-control my-3" placeholder="Description">{{$todo->description}}</textarea>
                        <button type="submit"class="btn btn-success btn-block">Update todo</button>
                    </div>
                    
                </form>
            </div>
        </div>

    </div>
</div>

@endsection